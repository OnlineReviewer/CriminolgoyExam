<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $sq1="UPDATE `subject` SET  `subname`='$subname',`classid`='$classid' WHERE `subid`='$subid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?assigntid=<?php echo $_GET['subid']; ?>";
    </script>
<?php
}
if ($conn->query($sq1) === TRUE) 
{
    session_start();
    $assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Edit Subject ".$subname;
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                                  ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    {?>
        <script type="text/javascript">window.location="../subject.php";</script><?php
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} 
else 
{   
    echo "error".$sq1;?>
    <?php
}
