<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `student` SET  `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`uname`='$uname',`pass`='$pass' WHERE `studid`='$studid'";
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
        window.location="../student.php";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
