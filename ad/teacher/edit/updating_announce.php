<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `announcement` SET `title`='$title', `description`='$desc',`dates`='$date',`tim`='$time' WHERE `anid`='$anid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?assigntid=<?php echo $_GET['assigntid']; ?>";
    </script>
<?php
}
if ($conn->query($q1) === TRUE) 
{
    session_start();
    $assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Edit Announcement ".$title;
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                                  ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    {
         header("location:../announcement.php");
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
