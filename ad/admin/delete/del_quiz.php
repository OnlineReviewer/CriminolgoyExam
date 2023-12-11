<?php
include('../connector.php');


$quizid =  $_GET["quizid"];


$sql = "DELETE FROM quiz WHERE quizid='".$quizid."'";
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