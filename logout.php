<?php
include("db.php");
session_destroy();
header('location: '.SITE_URL);
?>