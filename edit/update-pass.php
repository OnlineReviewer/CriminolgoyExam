<?php
include('../connector.php');
session_start();
$passw = hash('sha256',$_SESSION["npassword"]);
$studid = $_SESSION["studid"];
date_default_timezone_set("Asia/Manila");
 $lastupdate = date("Y-m-d h:i:sa");
function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$password = hash('sha256', $salt . $passw);
 $sql="UPDATE `student` SET  `pass`='$password',`lastupdate`='$lastupdate' WHERE `studid`='$studid'";
    
if($conn->query($sql) === TRUE) 
	{?>
	    
		<script type="text/javascript">
		window.location="../use-changepass.php";
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