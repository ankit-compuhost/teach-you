<?php
include("models/" . $page . "-models.php");
$allGroups = getAllGroups();

//Create
include ("common/create-groups.php");

//Joined
include ("common/joined.php");

?>