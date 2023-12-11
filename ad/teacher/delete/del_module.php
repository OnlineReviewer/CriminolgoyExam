<?php
include('../connector.php');


$learnmid =  $_GET["learnmid"];


$sql = "DELETE FROM learnm WHERE learnmid='".$learnmid."'";
if ($conn->query($sql) === TRUE) 
{
    header("location:../subject.php");
}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>