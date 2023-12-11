<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO announcement(title,  description, dates, tim) VALUES 
		('$title', '$desc','$date', '$time')";
    
	if($conn->query($sql) === TRUE) 
	{
			session_start();
		    $assigntid= $_SESSION["assigntid"];
		    date_default_timezone_set("Asia/Manila");
		    $araw = date("Y-m-d");
		    $oras = date("h:i:sa");
		    $activity = "Add Announce ".$title;
		    $teachfname= $_SESSION["teacherfname"];  
		    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
		                                  ('$assigntid','$oras','$araw', '$activity','$teachfname')";
		    if($conn->query($sql) === TRUE) 
		    {?>
				<script type="text/javascript">window.location="../announcement.php";</script><?php
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