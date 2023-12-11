<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `subjectid`='$subjectid',`classid`='$classid' WHERE `assigntid`='$assigntid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?assigntid=<?php echo $_GET['assigntid']; ?>";
    </script>
<?php
}
if ($conn->query($q1) === TRUE) 
{?>
    <script type="text/javascript">
        window.location="../assign-teacher.php";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
