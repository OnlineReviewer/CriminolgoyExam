<?php  
include ('connector.php');
extract($_POST);
$correct = 0;
$incorrect = 0;
$studanswer = array();

foreach ($_POST as $key => $value) {
    if (strpos($key, 'option') !== false) {
        $examid = str_replace('option', '', $key);
        $studanswer[$examid] = $value;

        $sql = "SELECT answer FROM exam WHERE examid = $examid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $correctanswer = $row['answer'];

            if ($studanswer[$examid] == $correctanswer) {
                $correct++;
            } else {
                $incorrect++;
            }
        }
    }
}

$total = $correct + $incorrect;
$score = round($correct / $total * 100, 2);
date_default_timezone_set("Asia/Manila");
$dateregister = date("Y-m-d");

        $sql = "SELECT count(*) FROM `barchart` WHERE studid = $studid AND classid = $classid";
        $result = $conn->query($sql);
        $row = mysqli_fetch_array($result);
        if ($row['count(*)'] != 0) {
           $sql = "UPDATE `barchart` SET  `studid`='$studid',`posTtest`='$correct',`classid`='$classid',`datesofposttest`='$dateregister' WHERE `studid`='$studid' AND `classid`='$classid'";
        }
        else
        {
           $sql = "INSERT INTO barchart(studid, posTtest, classid, datesofposttest) VALUES 
                           ('$studid', '$correct', '$classid','$dateregister')";

        }


if($conn->query($sql) === TRUE) 
{?>
<script type="text/javascript">
  window.location="tbl_rates.php";
  </script><?php
  } 
  else 
  {
  echo "Error: " . $sql . "<br>" . $conn->error;?>
  <script type="text/javascript">
  window.location="index.php";
  </script><?php 
}


$conn->close();
?>