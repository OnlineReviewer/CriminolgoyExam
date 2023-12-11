<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO announcement(title,  description, dates, tim) VALUES 
		('$title', '$desc','$date', '$time')";
    
if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../announcement.php";
		</script><?php
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