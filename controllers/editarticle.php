<?php
include("models/" . $page . "-models.php");
$blogCategories = getBlogCategories();
$slug = $_GET['slug'];
$article = getArticleBySlug($slug);
$post = getArticleById($article['post_id']);
$user = getUserFullNameById($post['user_id']);

$error = $success = "";
if (!empty($_POST['submit'])) {

    if (!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['category_id'])) {
        $currentUser = getLoggedInUserByEmail($_SESSION['email']);
        $postData = [
            'post_id' => $article['post_id'],
            'user_id' => $currentUser['user_id'],
            'user_type' => 'user',
            'post_type' => 'article',
            'time' => date('Y-m-d H:i:s', time()),
            'privacy' => 'public',
            'text' => $_POST['text']
        ];
        $postId = update("posts", $postData, "post_id");
        if (!empty($postId)) {
            if (!empty($_FILES['cover']['name'])) {
                $file = fileUpload("photos/", $_FILES['cover']);
            }
            if (empty($file['error'])) {
                $postsArticles = [
                    "article_id" => $article['article_id'],
                    "post_id" => $article['post_id'],
                    "title" => $_POST['title'],
                    "slug" => updateSlug($_POST['title']),
                    "text" => $_POST['text'],
                    "category_id" => $_POST['category_id']
                ];
                if (!empty($file['file'])) {
                    @unlink("./".$article['cover']);
                    $postsArticles["cover"] = $file['file'];
                }
                $articleId = update("posts_articles", $postsArticles, "article_id");
                if ($articleId) {
                    header("location: ".base_url("myarticles.php"));
                }
            } else {
                $error = $file['error'];
            }
        }
    } else {
        $error = "All fields are mandatory.";
    }
}
?>