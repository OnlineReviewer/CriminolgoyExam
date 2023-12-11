<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    date_default_timezone_set("Asia/Manila");
    $lastupdate = date("Y-m-d h:i:sa");
   $q1="UPDATE `student` SET  `fname`='$fname',`mname`='$mname',`lname`='$lname',`lastupdate`='$lastupdate',`gender`='$gender' WHERE `studid`='$studid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?id=<?php echo $_GET['studid']; ?>";
    </script>
<?php
}
if ($conn->query($q1) === TRUE) 
{?>
    <script type="text/javascript">
        window.location="../user-profile.php";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
