<?php
include("models/" . $page . "-models.php");
$allGroups = getAllGroups($_SESSION['user_id']);

//Create
include("common/create-groups.php");

//Joined
include("common/joined.php");

?>