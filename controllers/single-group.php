<?php
include("models/" . $page . "-models.php");
$slug = $_GET['slug'];
$group = getGroupBySlug($slug);
$user = getUserFullNameById($group['group_admin']);
$category = checkTableValue("groups_categories", ['category_name'], ['category_id' => $group['group_category']]);
$totalMembers = getGroupTotal($group['group_id']);

$isGroup = getGroupLikesByUserId($group['group_id'], $_SESSION['user_id']);

?>