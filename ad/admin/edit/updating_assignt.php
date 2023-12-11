<?php
include ('../connector.php');
if(isset($_POST["submit1"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


}
if(isset($_POST["submit2"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


}
if(isset($_POST["submit3"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


}
if(isset($_POST["submit4"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


}
if(isset($_POST["submit5"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


}
if(isset($_POST["submit6"]))
{
    extract($_POST);
    $q1="UPDATE `assignteacher` SET `teacherfname`='$teacherfname', `classid`='$classid' WHERE `id`='$sid'";


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
