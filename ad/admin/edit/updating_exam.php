<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `exam` SET  `examques`='$examques',`answer`='$answer' ,`options1`='$options1',`options2`='$options2',`options3`='$options3',`options4`='$options4' WHERE `examid`='$examid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?id=<?php echo $_GET['classid']; ?>";
    </script>
<?php
}
if ($conn->query($q1) === TRUE) 
{?>
    <script type="text/javascript">
        window.location="../examquestion.php?classid=<?php echo $classid; ?>";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
