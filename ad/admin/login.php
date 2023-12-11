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

$sql = "SELECT * FROM admin_acc WHERE admin_user = '".$unm ."' and admin_pass = '".$pass."' ";
$result = mysqli_query($conn,$sql);
$row  = mysqli_fetch_array($result);
    
     $_SESSION["assigntid"] = $unm;
     $_SESSION["password"] = $row['admin_pass'];
     $count=mysqli_num_rows($result);
     if($count==1 && isset($_SESSION["assigntid"]) && isset($_SESSION["password"])) 
     {     
 
        ?>
         <div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">

      Success 
    </h1>
    <p>Login Successfully</p>
    <p>
    
     <?php echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; ?>
    </p>
  </div>
</div>
  
     <?php
}
else { session_destroy();
  ?>
     <div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">

    <h3 class="popup__content__title">
      Error 
    </h1>
    <p>Invalid ID or Password</p>
    <p>
      <a href="login.php"><button class="button button--error">Close</button></a>
    </p>
  </div>
</div>
       
        <?php
       
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
               <img src="images/Capture.jpg" alt="DSMS Logo" width="200">
               </a>
            </div>
            <div class="card-body" >
               <form  method="post">
               <div class="input-group mb-3"><h4 style = "margin-left: 30%;">Admin Login</h4> </div>
                  <div class="input-group mb-3">
                     <input type="text" name="assigntid" class="form-control" placeholder="Admin Username">
                     <div class="input-group-append">
                        <div class="input-group-text">
                           <span class="fas fa-user"></span>
                        </div>
                     </div>
                  </div>
                  <div class="input-group mb-3">
                     <input type="password" name="password" class="form-control" placeholder="Password" id="myInput">
                    <div class="input-group-append">
                        <div class="input-group-text" style="cursor: pointer;" onclick="togglePassword()">
                            <span id="eyeIcon" class="fas fa-eye"></span>
                        </div>
                    </div>
                  </div>
                </div>

                  <div class="row">
                     <div class="col-12 ">
                        <button type="submit" name="btn_login" class="btn btn-block btn-bg " style="background-color: rgb(39,93,43);color: rgb(211, 209, 207);">Sign In</button>
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
</body>

    <script src="../asset/js/lib/jquery/jquery.min.js"></script>

    <script src="../asset/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../asset/js/lib/bootstrap/js/bootstrap.min.js"></script>

    <script src="../asset/js/jquery.slimscroll.js"></script>

    <script src="../asset/js/sidebarmenu.js"></script>

    <script src="../asset/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <script src="../asset/js/custom.min.js"></script>
    <script>
    function togglePassword() {
        var passwordInput = document.getElementById("myInput");
        var eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>
</script>
</html>