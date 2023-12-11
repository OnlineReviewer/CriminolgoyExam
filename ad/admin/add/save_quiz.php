<?php
include('../connector.php');

extract($_POST);
$sql = "INSERT INTO quiz(question, answer, subid, options1,options2,options3) VALUES 
		('$question', '$answer',$subid,'$options1', '$options2','$options3')";
    
if($conn->query($sql) === TRUE) 
{?>
	<script type="text/javascript">
	window.location="../quiz.php?subid=<?php echo $subid;?>";
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