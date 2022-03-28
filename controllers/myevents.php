<?php
include("models/" . $page . "-models.php");

$allEvents = getAllEventsByUserIds($_SESSION['user_id'], ["public", "closed", "secret"]);

//Create
include ("common/create-event.php");

//Going | Interested
include ("common/going-interested.php");

?>