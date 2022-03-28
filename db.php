<?php
@session_start();
$hostname = getenv('HTTP_HOST');
if ($hostname == "localhost") {
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dbname = "teach";
    //WEBSITE URL
    define("SITE_URL", "http://localhost/teach-you/");
} else {
    $servername = "localhost";
    $username = "u309541507_teachyou";
    $pass = "Teachyou@123";
    $dbname = "u309541507_teachyou";
    //WEBSITE URL
    define("SITE_URL", "https://shopbooksnow.online/");
}
Global $conn;
$conn = @mysqli_connect($servername, $username, $pass , $dbname);
 if(!$conn){
 	echo "<center><h1>We are not connected to database</h1></center>";die;
 }


?>