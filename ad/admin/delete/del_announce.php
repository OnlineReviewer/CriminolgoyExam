<?php
include('../connector.php');


$anid =  $_GET["anid"];


$sql = "DELETE FROM announcement WHERE anid='".$anid."'";
if ($conn->query($sql) === TRUE) 
{
    header("location:../announcement.php");
}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>