<?php
include('../connector.php');

extract($_POST);
$video_name = $_FILES['video']['name'];
$tmp_name = $_FILES['video']['tmp_name'];
$error = $_FILES['video']['error'];
if ($error === 0) 
{
	$video_ex = pathinfo($video_name,PATHINFO_EXTENSION);
	$video_ex_lc = strtolower($video_ex);
	$allowed_exs = array("mp4","webm","avi","flv");
	if (in_array($video_ex_lc, allowed_ex)) 
	{
		$new_video_name= uniqid("video-",true).'.'.$video_ex_lc;
		$video_upload_path = "../video/".$new_video_name;
		move_uploaded_file($tmp_name, $video_upload_path);
		$sql = "INSERT INTO learnm(video,subid) VALUES ('$subid',$new_video_name)";
	}
	else
	{
		$em = "You can't upload files of this type";
		header("Location: index.php?error=$em");
	}
}
if($conn->query($sql) === TRUE) 
{?>
	<script type="text/javascript">
	window.location="../modulesub.php?subid=<?php echo $subid; ?>";
	</script><?php
} 
else 
{?>
	<script type="text/javascript">
	window.location="../index.php";
	</script><?php 
}
?>