<?php
include('../connector.php');
session_start();
extract($_POST);
$sql = "INSERT INTO assignteacher(teacherfname, assigntid, classid) VALUES 
		('$teacherfname', '$assigntid', '$classid')";
    
	if($conn->query($sql) === TRUE) 
	{
		$assigntid= $_SESSION["assigntid"];
	    date_default_timezone_set("Asia/Manila");
	    $araw = date("Y-m-d");
	    $oras = date("h:i:sa");
	    $activity = "Add Handle Class ";
	    $teachfname= $_SESSION["teacherfname"];  
	    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
	                              ('$assigntid','$oras','$araw', '$activity','$teachfname')";
	    if($conn->query($sql) === TRUE) 
	    {?>
	      <script type="text/javascript">window.location="../course.php";</script><?php
	    }
	    else 
	    {
	      echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	} 
	
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		?>
		<script type="text/javascript">
		window.location="../index.php";
		</script>
		<?php 
	} 

?>