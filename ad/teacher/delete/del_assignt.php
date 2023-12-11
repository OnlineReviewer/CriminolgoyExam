<?php
include('../connector.php');


$assigntid =  $_GET["assigntid"];


$sql = "DELETE FROM assignteacher WHERE assigntid='".$assigntid."'";
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