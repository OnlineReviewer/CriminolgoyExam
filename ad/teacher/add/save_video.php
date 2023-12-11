<?php
include('../connector.php');

extract($_POST);
$documentname = $_FILES["video"]["name"];
$target_dir = "../video/";
$target_file = $target_dir . basename($documentname);
if (empty($error)) 
{
    if(move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) 
    {
   		$sql = "INSERT INTO learnm(subid,  video) VALUES 
		('$subid',  '$documentname')";
    }
}
if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../modulesub.php?subid=<?php echo $subid; ?>";
		</script><?php
	} 
	
	else 
	{
		
		?>
		<script type="text/javascript">
		window.location="../index.php";
		</script>
		<?php 
	} 

?>

	