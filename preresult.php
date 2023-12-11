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
$sql = "INSERT INTO barchart(studid, pretest, classid, datesofpretest) VALUES 
                           ('$studid', '$correct', '$classid','$dateregister')";

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