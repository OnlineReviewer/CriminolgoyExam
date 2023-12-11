<?php

$servername = "sql206.infinityfree.com";
$username = "if0_35491360";
$password = "AJFUglIZ5RSl6WZ";
$dbname = "if0_35491360_reviewer";
$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
}

?> 