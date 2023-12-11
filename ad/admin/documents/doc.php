<?php
include ('../connector.php');
$que="SELECT * FROM `learnm` WHERE learnmid='".$_GET["learnmid"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{  
	extract($row);
	$learnM = $row['module'];

	$file = $learnM;
	$filename = $learnM;
	header('Content-type: application/pdf');
	header('Content-Disposition: inline; filename"'.$filename.'"');
	header('Content-Transfer-Encoding: binary');
	header('Accept-Ranges: bytes');
	@readfile($file);

}