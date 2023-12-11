<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO class(classname,  description) VALUES 
		('$classname', '$description')";
    
if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../course.php";
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