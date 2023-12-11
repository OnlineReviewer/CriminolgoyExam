<?php  session_start();
include('connector.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php
if(isset($_POST['btn_login']))
{
  $unm = $_POST['assigntid'];

  $passw = hash('sha256', $_POST['password']);

  function createSalt()
  {
      return '2123293dsj2hu2nikhiljdsd';
  }

  $salt = createSalt();
  $pass = hash('sha256', $salt . $passw);
  $sql = "SELECT * FROM assignteacher WHERE assigntid = '" .$unm . "' and password = '". $pass."'";
  $result = mysqli_query($conn,$sql);
  $row  = mysqli_fetch_array($result);
  $_SESSION["assigntid"] = $unm;
  $_SESSION["teacherfname"] = $row['teacherfname'];
  $_SESSION["password"] = $row['password'];
  $_SESSION["classid"] = $row['classid'];
  $_SESSION["subjectid"] = $row['subjectid'];
  $count=mysqli_num_rows($result);

  if($count==1 && isset($_SESSION["assigntid"]) && isset($_SESSION["password"])) 
  {
    $assigntid= $_SESSION["assigntid"];
    date_default_timezone_set("Asia/Manila");
    $araw = date("Y-m-d");
    $oras = date("h:i:sa");
    $activity = "Login in";
    $teachfname= $_SESSION["teacherfname"];  
    $sql = "INSERT INTO history (assigntid,  oras, araw, activity, teachfname) VALUES 
                              ('$assigntid','$oras','$araw', '$activity','$teachfname')";
    if($conn->query($sql) === TRUE) 
    {?>

      <div class="popup popup--icon -success js_success-popup popup--visible">
      <div class="popup__background"></div>
      <div class="popup__content">
      <h3 class="popup__content__title">Success</h3>
      <p>Login Successfully</p>
      <p><?php echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; ?>
      </p></div></div><?php
    }
    else 
    {
      echo "Error: " . $sql . "<br>" . $conn->error;
      ?>
      <?php 
    } 

  }
  else 
  { 

    session_destroy();?>
    <div class="popup popup--icon -error js_error-popup popup--visible">
    <div class="popup__background"></div>
    <div class="popup__content">
    <h3 class="popup__content__title">Error</h3>
    <p>Invalid ID or Password</p>
    <p><a href="login.php"><button class="button button--error">Close</button></a></p></div></div><?php

  }
}
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
      <style>
body {font-family: Arial, Helvetica, sans-serif;}
td a.btn{
                  font-size: 0.7rem;
               }
               td p{
                  padding-left: 0.5rem !important;
               }
               th{
                  padding: 1rem !important;
               }
               table tr td {
                  padding: 0.3rem !important;
                  font-size: 13px;
               }
               .bg1{
                  background-color: rgb(160,20,79);
                  color: rgb(211, 209, 207);
               }
               .bg2{
                  background-color: rgb(20,83,154);
                  color: rgb(211, 209, 207);
               }
               .bg3{
                  background-color: rgb(4,91,98);
                  color: rgb(211, 209, 207);
               }
               input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: -18%;
  width: 100%; /* Full width */
  height: 118%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
   </head>
   <body class="hold-transition login-page">
      <div class="login-box">
         <!-- /.login-logo -->
         <div class="card card-outline card-success">
            <div class="card-header text-center">
               <a href="login.php" class="brand-link">
               <img src="../asset/img/Capture.jpg" alt="DSMS Logo" width="200">
               </a>
            </div>
            <div class="card-body" >
               <form  method="post">
                  <div class="input-group mb-3">
                     <input type="text" name="assigntid" class="form-control" placeholder="ID">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-lock"></span>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-6">
                        <a id="myBtn"  class="btn btn-block btn-bg" style="background-color: rgb(39,93,43);color: rgb(211, 209, 207);">Register</a>
                     </div>
                     <div class="col-6 ">
                        <button type="submit" name="btn_login" class="btn btn-block btn-bg" style="background-color: rgb(39,93,43);color: rgb(211, 209, 207);">Sign In</button>
                     </div>
                  </div>
               </form>
            </div>
            <!-- /.card-body -->
         </div>
         <!-- /.card -->
      </div>
      <!-- /.login-box -->
      <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
      <div class="modal-dialog modal-dialog-centered modal-lg">

         <div class="modal-content">
            <div class="modal-body text-center">
               <form  method="POST" action="add/save_assignt.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Profile Information</span>
                 </div>
              </div>
   
                     <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="float-left">Teacher ID No.</label>
                          <input name="assigntid" type="text" class="form-control" placeholder="ex. 0123-0123" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                     <div class="form-group">
                       <label for="exampleInputEmail1" class="float-left">Full Name</label>
                       <input name="teacherfname" type="text" class="form-control" placeholder="first name" required>
                     </div>
                  </div>                   
                       <div class="col-md-6">
                       <div class="form-group">
                      <label for="exampleInputEmail1" class="float-left">Handle Class</label>
                       <select type="text" name="classid" id="class_id" class="form-control"   placeholder="Class" required="">
                       <option value="">--Select Class--</option>
                       <?php $c1 = "SELECT * FROM `class`";
                       $result = $conn->query($c1);
                       if ($result->num_rows > 0) 
                       {
                          while ($row = mysqli_fetch_array($result)) 
                          {?>
                           <option value="<?php echo $row["classid"];?>">
                           <?php echo $row['classname'];?></option><?php
                          }
                       } 
                       else 
                       {
                         echo "0 results";
                       }?></select>
                       </div>
                    </div>
                    
     
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Teacher ID No.</label>
                         <input type="text" class="form-control" placeholder="****-****" disabled>
                       </div>
                    </div>
                       <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Password</label>
                         <input name="password" onkeyup='check();' id="confirm_password" type="Password" class="form-control" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Confirm Password</label>
                         <input name="password" onkeyup='check();' id="password"  title="Must Match" placeholder="Confirm Password" type="Password" class="form-control"  required>
                         <span id="message1"></span>

                       </div>
                    </div>
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                
                  <div id="message">
                  <h3>Password must contain the following:</h3>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a href="login.php" class="btn bg1">Cancel</a>
                  </div>
                </form>
            </div>
         </div>
      </div>
   </div>   </body>
    <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 <script type="text/javascript">
 $('#class_id').change(function(){
    $("#subject_id").val('');
    $("#subject_id").children('option').hide();
    var class_id=$(this).val();
    $("#subject_id").children("option[data-id="+class_id+ "]").show();
    
  });
</script>
<script>
  var check = function() {
  if (document.getElementById('confirm_password').value ==
    document.getElementById('password').value) {
    document.getElementById('message1').style.color = 'green';
    document.getElementById('message1').innerHTML = 'Matching';
  } else {
    document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'NOT Matching';
    
  }
}
</script>
<script>
var myInput = document.getElementById("confirm_password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script> 
    <script src="../asset/js/lib/jquery/jquery.min.js"></script>

    <script src="../asset/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../asset/js/lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="../asset/js/jquery.slimscroll.js"></script>

    <script src="../asset/js/sidebarmenu.js"></script>

    <script src="../asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="../asset/js/custom.min.js"></script>
</html>