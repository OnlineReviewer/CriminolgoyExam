<?php
include ('../connector.php');
if(isset($_POST["submit"]))
{
    extract($_POST);
    $q1="UPDATE `class` SET  `classname`='$classname',`description`='$description'WHERE `classid`='$classid'";
}
else
{?>
    <script type="text/javascript">
        window.location="../index.php?classid=<?php echo $_GET['classid']; ?>";
    </script>
<?php
}
if ($conn->query($q1) === TRUE) 
{?>
    <script type="text/javascript">
        window.location="../course.php";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
