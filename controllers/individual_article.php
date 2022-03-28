<?php
include("models/" . $page . "-models.php");
$slug = $_GET['slug'];
$article = getArticleBySlug($slug);
$post = getPostById($article['post_id']);
$user = getUserFullNameById($post['user_id']);

if ($_SESSION['user_id'] == $user['user_id']) {
    if (!empty($_GET['post_id'])) {
        deletePost($_GET['post_id']);
        header("location:" . base_url("myarticles.php"));
    }
} else {
    updateViewCount($article['post_id']);
}
?>