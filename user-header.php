<?php 
session_start();
include ('connector.php');
$studid = $_SESSION["studid"];
$sql = "SELECT * FROM `student` where studid = '$studid' ";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
if ($row['gender']=="male") 
    {
        $_SESSION["gender"] = "ad/admin/images/avatar.png";
    }
    else
    {
        $_SESSION["gender"] = "ad/admin/images/face8.jpg";
    } 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title></title>
    <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
    <style type="text/css">
    #alto
    {
      height:50px;
      width:50px;
      background-image:url('assets/images/faces/avatar.png');
      background-size: cover;
    }</style>
  </head>
  <body><br><br><br><br>
    <div class="container-scroller">
  <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #228B22 ;">
        <div class="navbar-brand-wrapper d-flex align-items-center" style="background-color: #228B22;">
          <a class="navbar-brand brand-logo ml-auto text-right" href="index.php" >
            <img src="assets/images/bg/logo2.png" alt="logo"/>
          </a>
          
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1" >
          <ul class="navbar-nav navbar-nav-right ml-auto" >
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown" >
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false" >
                <img class="img-xs rounded-circle ml-2" id="alto" src="ad/admin/images/<?php echo $row['profile'];?>">
                <span class="font-weight-normal"><!--name of user--> </span></a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header d-flex">
                  <img class="img-md rounded-circle" id="alto" src="ad/admin/images/<?php echo $row['profile'];?>" width="60px" >
                  <div><p class="mb-1 mt-3" style="font-size: 130%;"><b><?php echo $row['fname']." ".$row['mname']." ".$row['lname'];?><b></p>
                  <p class="font-weight-light text-muted mb-0"></p> </div>  
                </div>
                <a class="dropdown-item" href="user-profile.php"><i class="dropdown-item-icon icon-user text-primary"></i> My Profile</a>
                <a class="dropdown-item" href="use-changepass.php"><i class="dropdown-item-icon icon-energy text-primary"></i> Change Password</a>
                <a class="dropdown-item" href="logout.php"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas" >
            <span class="icon-menu" style="color:white;"></span>
          </button>
        </div>
      </nav>
    </div>
  </body>
  </html>
