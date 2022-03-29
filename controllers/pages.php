<?php
include("models/" . $page . "-models.php");
$allPages = getAllPages();

//Create
include ("common/create-pages.php");

//Appreciate
include ("common/appreciate.php");

?>