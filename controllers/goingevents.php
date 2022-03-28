<?php
include("models/" . $page . "-models.php");
$allEvents = getAllEvents($_SESSION['user_id']);

//Create
include ("common/create-event.php");

//Going | Interested
include ("common/going-interested.php");
?>