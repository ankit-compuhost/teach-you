<?php
include("models/" . $page . "-models.php");
$slug = $_GET['slug'];
$event = getEventBySlug($slug);
$uploadUserName = getUserFullNameById($event['event_admin']);

$isInterested = getEventTotal($event['event_id'], "is_interested");
$isGoing = getEventTotal($event['event_id'], "is_going");


?>