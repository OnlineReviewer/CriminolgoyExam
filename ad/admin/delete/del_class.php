<?php
include('../connector.php');


$classid =  $_GET["classid"];


$sql = "DELETE FROM class WHERE classid='".$classid."'";
if ($conn->query($sql) === TRUE) 
{
    header("location:../course.php");
}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>