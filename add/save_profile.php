<?php include('../connector.php');

extract($_POST);
date_default_timezone_set("Asia/Manila");
 $lastupdate = date("Y-m-d h:i:sa");
$profileImageName = $_FILES['profileImage']["name"];
$target_dir = "../ad/admin/images/";
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
		 $sql="UPDATE `student` SET  `profile`='$profileImageName',`lastupdate`='$lastupdate' WHERE `studid`='$studid'";
	}
}

    
if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../user-profile.php";
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