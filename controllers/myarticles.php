<?php
include("models/" . $page . "-models.php");

$allPost = getAllPostByUserIds($_SESSION['user_id'], "article");
$postId = [];
foreach ($allPost as $val) {
    $postId[] = $val['post_id'];
}
$allArticle =  !empty($postId) ? getAllArticleByPostIds($postId) : [];
?>