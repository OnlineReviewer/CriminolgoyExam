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
   		$sql = "INSERT INTO student(studid, fname, mname, lname,  uname, pass,profile) VALUES 
		('$studid', '$fname', '$mname', '$lname',  '$uname', '$pass','$profileImageName')";
    }
}

if($conn->query($sql) === TRUE) 
	{
		session_start();
	    $assigntid= $_SESSION["assigntid"];
	    date_default_timezone_set("Asia/Manila");
	    $araw = date("Y-m-d");
	    $oras = date("h:i:sa");
	    $activity = "Add Student ".$fname." ".$lname;
	    $teachfname= $_SESSION["teacherfname"];  
	    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
	                                  ('$assigntid','$oras','$araw', '$activity','$teachfname')";
	    if($conn->query($sql) === TRUE) 
	    {?>
	        <script type="text/javascript">window.location="../student.php";</script><?php
	    }
	    else 
	    {
	        echo "Error: " . $sql . "<br>" . $conn->error;
	    }
	} 
	
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;?>
		<script type="text/javascript">
		window.location="../index.php";
		</script>
		<?php 
	} 

?>