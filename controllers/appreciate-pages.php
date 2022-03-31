<?php
include("models/" . $page . "-models.php");
$allPages = getAllPages($_SESSION['user_id']);

//Create
include ("common/create-pages.php");

//Appreciate
include ("common/appreciate.php");

?>