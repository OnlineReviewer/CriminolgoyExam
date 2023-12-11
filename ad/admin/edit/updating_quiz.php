<?php
include ('../connector.php');
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
