<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `student` SET  `fname`='$fname',`mname`='$mname',`lname`='$lname',`uname`='$uname',`pass`='$pass' WHERE `studid`='$studid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?id=<?php echo $_GET['studid']; ?>";
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
    $activity = "Edit Student ".$fname;
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
    echo "error".$q1;?>
    <?php
}
