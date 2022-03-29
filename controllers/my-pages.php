<?php
include("models/" . $page . "-models.php");
$allPages = getAllPage($_SESSION['user_id']);

//Create
include ("common/create-pages.php");
?>