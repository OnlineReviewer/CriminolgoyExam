<?php
include ('../connector.php');
session_start();
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `quiz` SET  `question`='$question',`answer`='$answer' ,`options1`='$options1',`options2`='$options2',`options3`='$options3' WHERE `quizid`='$quizid'";
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
    $assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Edit Quiz ";
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                              ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    { ?>
        <script type="text/javascript">window.location="../course.php";</script><?php
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
