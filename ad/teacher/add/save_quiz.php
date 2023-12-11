<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO quiz(question, answer, subid, options1,options2,options3) VALUES 
		('$question', '$answer',$subid,'$options1', '$options2','$options3')";
session_start();   
if($conn->query($sql) === TRUE) 
{
	$assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Add Quiz ";
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                              ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    { ?>
        <script type="text/javascript">window.location="../quiz.php?subid=<?php echo $subid;?>";</script><?php
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

else 
{
	echo "Error: " . $sql . "<br>" . $conn->error;?>
	<script type="text/javascript">
	window.location="../index.php";
	</script><?php 
} 

?>