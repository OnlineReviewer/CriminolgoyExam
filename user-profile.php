<?php 
include ('connector.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Assessment</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>

#profileDisplay { display: block; height: 140px; width: 50%; margin: 0px auto; border-radius: 50%; }
.img-placeholder {
  width: 50%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height: 130px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
}
.img-placeholder h4 {
  margin-top: 30%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 40px 0;
}
.table-wrapper {
    width: 850px;
    background: #fff;
    margin: 0 auto;
    padding: -5px 40px 15px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    min-width: 50px;
    border-radius: 2px;
    border: none;
    padding: 6px 12px;
    font-size: 105%;
    outline: none !important;
    height: 50px;
}
.table-title {
    min-width: 110%;
    border-bottom: 1px solid #e9e9e9;
    padding-bottom: 15px;
    margin-bottom: 5px;
    background: rgb(0, 50, 74);
    margin: -20px -31px 10px;
    padding: 15px 30px;
    color: #fff;
}
.table-title h2 {
    margin: 2px 0 0;
    font-size: 24px;
}
table.table {
    min-width: 100%;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 50px;
}
table.table tr th:last-child {
    width: 110px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table td a {
    color: #2196f3;
}
table.table td .btn.manage {
    padding: 6px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 5px;
}
table.table td .btn.manage:hover {
    background: #2e9c81;    
}
</style>
<script>
$(document).ready(function(){
  $(".btn-group .btn").click(function(){
    var inputValue = $(this).find("input").val();
    if(inputValue != 'all'){
      var target = $('table tr[data-status="' + inputValue + '"]');
      $("table tbody tr").not(target).hide();
      target.fadeIn();
    } else {
      $("table tbody tr").fadeIn();
    }
  });
  // Changing the class of status label to support Bootstrap 4
    var bs = $.fn.tooltip.Constructor.VERSION;
    var str = bs.split(".");
    if(str[0] == 4){
        $(".label").each(function(){
          var classStr = $(this).attr("class");
            var newClassStr = classStr.replace(/label/g, "badge");
            $(this).removeAttr("class").addClass(newClassStr);
        });
    }
});
</script>

<?php include_once('user-header.php');
$studid = $_SESSION["studid"];
$sql = "SELECT * FROM `student` where studid = '$studid' ";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
$fname = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];
$gender = $row['gender'];
$lastupdate = $row['lastupdate'];
$studid = $row['studid'];
$dateregister = $row['dateregister'];

?><br>
  
      <div class="container-fluid page-body-wrapper">
        
        <?php include_once('sidebar.php');?>
           <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Profile</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
              </nav>
            </div>
           <div class="card">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                    <h4 class="card-title" style="text-align: center;">Profile</h4>
                    <form class="login-form" method="post" action="add/save_profile.php" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-4 offset-md-4 form-div">
                        <h2 class="text-center mb-3 mt-3">Insert Image</h2>
                        <?php if (!empty($msg)): ?>
                          <div class="alert <?php echo $msg_class ?>" role="alert">
                            <?php echo $msg; ?>
                          </div>
                        <?php endif; ?>
                        <div class="form-group text-center" style="position: relative;" >
                          <span class="img-div">
                            <div class="text-center img-placeholder"  onClick="triggerClick()">
                              <h4>Update image</h4>
                            </div>
                            <img src="ad/admin/images/<?php echo $row['profile'];?>"  onClick="triggerClick()" id="profileDisplay">
                            <input type="text" name="studid" value="<?php echo $studid;?>" class="form-control" hidden>
                          </span>
                          <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none; " required>
                            <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>  
                        </div>                 
                    </div>
                  </div>  

                    </form>
                    <form class="forms-sample" method="post" action="edit/update-profile.php">
                       <div class="col-md-12 float-left">
                      <div class="form-group">
                        <label for="exampleInputName1">Student ID</label>
                        <input type="text" name="studid" value="<?php echo $studid;?>" class="form-control" readonly>
                      </div></div>
                      <div class="col-md-4 float-left">
                      <div class="form-group">
                        <label for="exampleInputName1">First Name</label>
                        <input type="text" name="fname" value="<?php echo $fname;?>" class="form-control" required='true'>
                      </div></div>
                      <div class="col-md-4 float-right">
                     <div class="form-group">
                        <label for="exampleInputName1">Middle Name</label>
                        <input type="text" name="mname" value="<?php echo $mname;?>" class="form-control" >
                      </div></div>
                      <div class="col-md-4 float-right"><div class="form-group">
                        <label for="exampleInputName1">Last Name</label>
                        <input type="text" name="lname" value="<?php echo $lname;?>" class="form-control" required='true'>
                      </div></div>
                      <div class="col-md-12 float-left">
                      <div class="form-group">
                        <label for="exampleInputPassword4">Gender</label>
                        <input type="text" name="gender" value="<?php echo $gender;?>"  class="form-control" maxlength='10' required='true'>
                      </div> </div>
                      <div class="col-md-6 float-left">
                      <div class="form-group">
                        <label for="exampleInputPassword4">Last Update</label>
                        <input type="text" name="lastupdate" value="<?php echo $lastupdate;?>"  class="form-control" readonly="" >
                      </div> </div>
                     <div class="col-md-6 float-right">
                      <div class="form-group">
                        <label for="exampleInputCity1">Registration Date</label>
                         <input type="date" name="reg" value="<?php echo $dateregister;?>" readonly="" class="form-control">
                      </div> </div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Update</button>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
         <?php include_once('footer.php');?>
        
        </div>
    </div>
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="script.js"></script>
</html>

