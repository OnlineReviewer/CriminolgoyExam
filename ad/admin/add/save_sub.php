<?php
include('../connector.php');

extract($_POST);

   		$sql = "INSERT INTO subject(subid, subname, classid) VALUES 
		('$subid', '$subname', '$classid')";

if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../subject.php";
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