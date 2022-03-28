<?php
$servername = "localhost";
$username = "compueaz_ty";
$pass = "Compuhost@123";
$dbname = "compueaz_ty";
$conn = mysqli_connect($servername, $username, $pass , $dbname);
 if(!$conn){
 	echo "<h1>we are not connected to database</h1>";
 }

?>