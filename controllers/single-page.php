<?php
include("models/" . $page . "-models.php");
$slug = $_GET['slug'];
$page = getPageBySlug($slug);
$user = getUserFullNameById($page['page_admin']);
$category = checkTableValue("pages_categories", ['category_name'], ['category_id' => $page['page_category']]);
$totalAppreciate = getPageTotal($page['page_id']);

$isAppreciate = getPageLikesByUserId($page['page_id'], $_SESSION['user_id']);
?>