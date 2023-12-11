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
{?>
    <script type="text/javascript">
        window.location="../announcement.php";
    </script>
<?php
} 
else 
{   
    echo "error".$q1;?>
    <?php
}
