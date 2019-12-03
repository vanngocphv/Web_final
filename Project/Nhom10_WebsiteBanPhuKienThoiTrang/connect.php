<?php
//MySQLi Procedural
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanly_mysql";


$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Connection failed: " . mysqli_connect_error());

mysqli_query($conn, "set names 'utf8'");
?>