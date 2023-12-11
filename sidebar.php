<?php 
include ('connector.php');
if(!isset($_SESSION["studid"]))
{
    session_destroy(); 
    ?>
		<script type="text/javascript">
		window.location="login.php";
		</script><?php

}
else 
{
$studid = $_SESSION["studid"];
$sql = "SELECT * FROM `student` where studid = '$studid' ";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    #alto
    {
      height:50px;
      width:50px;
      background-image:url('assets/images/faces/avatar.png');
      background-size: cover;
    }</style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<nav class="sidebar sidebar-offcanvas" id="sidebar" style="margin-left:10px;background-color: #228B22;">
          <ul class="nav" ><br>
                      <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                              <div class="profile-image">
                                <img class="img-xs rounded-circle" src="ad/admin/images/<?php echo $row['profile'];?>" id="alto">
                                  <div class="dot-indicator bg-success"></div>
                                  </div>
                                  <div class="text-wrapper" style="color:white;"><?php echo $row["fname"]; ?></div>
                            </a>
                         </li>

            <li class="nav-item" >
              <a class="nav-link" href="index.php">
              <i class="icon-home menu-icon" style="color:white;"></i>
                <span class="menu-title" style="color:white; margin-top:3%;">Dashboard</span>

              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="tbl_subject.php">
                <i class="icon-layers menu-icon" style="color:white;"></i>
                <span class="menu-title" style="color:white; margin-top:3%;">Subjects</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="tbl_assessment.php">
                <i class="icon-doc menu-icon" style="color:white;"></i>
                <span class="menu-title" style="color:white; margin-top:3%;">Assessments</span>
              </a>   
            </li>


            <li class="nav-item">
              <a class="nav-link" href="tbl_rates.php">
              <i class="icon-flag menu-icon" style="color:white;"></i>
              <span class="menu-title" style="color:white; margin-top:3%;">Result Rates</span>
              </a>
            </li>

           <!-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="profile.php" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-user menu-icon"></i>
                <span class="menu-title">profile</span>
              </a>   
            </li>-->
            
              
               
            
          </ul>
        </nav>
        </body>
</html>
<?php } ?>