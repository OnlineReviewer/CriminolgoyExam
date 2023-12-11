<?php
include('../connector.php');


$examid =  $_GET["examid"];


$sql = "DELETE FROM exam WHERE examid='".$examid."'";
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