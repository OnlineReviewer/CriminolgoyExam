<?php
include('../connector.php');

extract($_POST);
$documentname = $_FILES["learnM"]["name"];
$target_dir = "../documents/";
$target_file = $target_dir . basename($documentname);
// VALIDATION
// validate image size. Size is calculated in Bytes
if($_FILES['learnM']['size'] > 200000) 
{
   $msg = "Image size should not be greated than 200Kb";
   $msg_class = "alert-danger";
}
   // check if file exists
if(file_exists($target_file)) 
{
   $msg = "File already exists";
   $msg_class = "alert-danger";
}
    // Upload image only if no errors
if (empty($error)) 
{
    if(move_uploaded_file($_FILES["learnM"]["tmp_name"], $target_file)) 
    {
   		$sql = "INSERT INTO learnm(subid,  module) VALUES 
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