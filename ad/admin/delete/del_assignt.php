<?php
include('../connector.php');


$teacherfname =  $_GET["teacherfname"];


$sql = "DELETE FROM assignteacher WHERE teacherfname='".$teacherfname."'";
if ($conn->query($sql) === TRUE) 
{
    header("location:../assign-teacher.php");
}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>