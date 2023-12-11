<?php  
session_start(); 
$f=0;
if(isset($_SESSION["studid"]))
{
	$f=1;
}
else if(isset($_SESSION["studid"]))
{
	$f=2;
}
else
{
	$f=0;
}
session_destroy(); 

?>
<script>
window.location="login.php";
</script>
<?php

  exit;
?>