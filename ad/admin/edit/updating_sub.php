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
   ?>
        <script type="text/javascript">window.location="../subject.php";</script><?php
} 
else 
{   
    echo "error".$sq1;?>
    <?php
}
