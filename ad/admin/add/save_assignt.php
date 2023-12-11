<?php
include('../connector.php');

extract($_POST);
$passw = hash('sha256', $_POST['password']);
function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$password = hash('sha256', $salt . $passw);
$sql = "INSERT INTO assignteacher(assigntid,  classid, teacherfname, password) VALUES 
		('$assigntid', '$classid','$teacherfname', '$password')";
    
if($conn->query($sql) === TRUE) 
	{?>
		<script type="text/javascript">
		window.location="../assign-teacher.php";
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