<?php
include('../connector.php');

session_start();
$quizid =  $_GET["quizid"];


$sql = "DELETE FROM quiz WHERE quizid='".$quizid."'";
if ($conn->query($sql) === TRUE) 
{
	$assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Delete quiz ";
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                              ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    {
    	 header("location:../course.php");
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