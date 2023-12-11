<?php
include('../connector.php');


$studid =  $_GET["studid"];


$sql = "DELETE FROM student WHERE studid='".$studid."'";
if ($conn->query($sql) === TRUE) 
{
	session_start();
    $assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Delete Student";
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                                  ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    {
         header("location:../student.php");
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
else 
{
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>