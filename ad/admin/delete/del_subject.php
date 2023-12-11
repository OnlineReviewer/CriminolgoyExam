<?php
include('../connector.php');


$subid =  $_GET["subid"];


$sql = "DELETE FROM subject WHERE subid='".$subid."'";
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