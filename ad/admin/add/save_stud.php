<?php
include('../connector.php');

extract($_POST);
$profileImageName = $_FILES["profileImage"]["name"];
$target_dir = "../images/";
$target_file = $target_dir . basename($profileImageName);
// VALIDATION
// validate image size. Size is calculated in Bytes
if($_FILES['profileImage']['size'] > 200000) 
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
    if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) 
    {
   		$sql = "INSERT INTO student(studid, fname, mname, lname,  pass,profile) VALUES 
		('$studid', '$fname', '$mname', '$lname',  '$pass','$profileImageName')";
    }
}

if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../student.php";
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