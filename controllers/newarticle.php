<?php
include("models/" . $page . "-models.php");
$blogCategories = getBlogCategories();

$error = $success = "";
if (!empty($_POST['submit'])) {
    $token = $_POST['token'] == $_SESSION['token'] ? 1 : 0;
    if ($token) {
        $_SESSION['token'] = generateRandomString(10);
        if (!empty($_POST['title']) && !empty($_POST['text']) && !empty($_POST['category_id']) && !empty($_FILES['cover']['name'])) {
            $currentUser = getLoggedInUserByEmail($_SESSION['email']);
            $postData = [
                'user_id' => $currentUser['user_id'],
                'user_type' => 'user',
                'post_type' => 'article',
                'time' => date('Y-m-d H:i:s', time()),
                'privacy' => 'public',
                'text' => $_POST['text']
            ];
            $postId = create("posts", $postData);
            if (!empty($postId)) {
                $file = fileUpload("photos/", $_FILES['cover']);
                if (empty($file['error'])) {
                    $postsArticles = [
                        "post_id" => $postId,
                        "cover" => $file['file'],
                        "title" => $_POST['title'],
                        "slug" => createSlug("posts_articles", $_POST['title']),
                        "text" => $_POST['text'],
                        "category_id" => $_POST['category_id']
                    ];
                    $articleId = create("posts_articles", $postsArticles);
                    if ($articleId) {
                        header("location: myarticles.php");
                        $_SESSION['success'] = "Your data has been submitted.";
                    }
                } else {
                    $error = $file['error'];
                }
            }
        } else {
            $error = "All fields are mandatory.";
        }
    } else {
        //$error = "CSRF token must match.";
    }
} else {
    $_SESSION['token'] = generateRandomString(10);
}
?>