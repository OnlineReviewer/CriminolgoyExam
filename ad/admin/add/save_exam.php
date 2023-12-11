<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO exam(examques, answer, classid, options1,options2,options3,options4) VALUES 
		('$examques', '$answer',$classid,'$options1', '$options2','$options3','$options4')";
    
if($conn->query($sql) === TRUE) 
{?>
	<script type="text/javascript">
	window.location="../examquestion.php?classid=<?php echo $classid;?>";
	</script><?php	
}

else 
{
	echo "Error: " . $sql . "<br>" . $conn->error;?>
	<script type="text/javascript">
	window.location="../index.php";
	</script><?php 
} 

?>