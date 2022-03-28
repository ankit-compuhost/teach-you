<?php
include("models/" . $page . "-models.php");
$allEvents = getAllEvents();

//Create
include ("common/create-event.php");

//Going | Interested
include ("common/going-interested.php");
?>