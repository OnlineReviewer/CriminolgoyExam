<?php
include('../connector.php');


$studid =  $_GET["studid"];


$sql = "DELETE FROM student WHERE studid='".$studid."'";
if ($conn->query($sql) === TRUE) 
{
    header("location:../student.php");
}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>