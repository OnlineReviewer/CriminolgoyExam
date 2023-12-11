<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');

if(isset($_GET['assigntid']))
{?>
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to delete this Student?</h3>
  <div class="m-t-20"> <a href="assign-teacher.php" class="btn btn-white">Close</a>
    <a href="delete/del_assignt.php?assigntid=<?php echo $_GET['assigntid']; ?>" class="btn btn-white" >
    <button type="submit" class="btn bg1">Delete</button></a>
  </div>
  </div>
  </div>
  <?php 
}?>

<html lang="en">
   <head>
      <link rel="stylesheet" href="popup_style.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
            <link rel="stylesheet" href="../asset/css/style.css">
            <link rel="stylesheet" href="../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <style type="text/css">
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
            </style>
   </head>
   <body class="hold-transition sidebar-mini layout-fixed">
      <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: rgba(24,57,46);">
            <!-- Left navbar links -->
  <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: rgb(211, 209, 207);"></i></a>
     </li>
  </ul>
     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
      <ul class="navbar-nav ml-auto">
              <li class="nav-item">
           <a class="nav-link" href="#">
           <p style="color:rgb(211, 209, 207); "><?php echo $_SESSION["assigntid"]  ?></p></a>
        </li>
        <li class="nav-item">
           <a class="nav-link" data-widget="fullscreen" href="#" role="button">
           <i class="fas fa-expand-arrows-alt" style="color: rgb(211, 209, 207);"></i>
           </a>
        </li>
        <li class="nav-item">
           <a class="nav-link"  href="logout.php">
           <i class="fas fa-power-off" style="color: rgb(211, 209, 207);"></i>
           </a>
        </li>
     </ul>
  </nav>
  <!-- /.navbar -->
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-user"></span> Assign Teacher</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Assign Teacher</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <!-- Main content -->
         <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
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
                          <input name="assigntid" type="text" class="form-control" placeholder="ex. 123-23432-12" required>
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
                         <label for="exampleInputEmail1" class="float-left">Handle Subject</label>
                         <select type="text" name="subjectid" id="subject_id" class="form-control"   placeholder="Subject" required="">
                                <option value="">--Select Subject--</option>
                                    <?php  
                                    $c1 = "SELECT * FROM `subject`";
                                    $result = $conn->query($c1);

                                    if ($result->num_rows > 0) {
                                        while ($row = mysqli_fetch_array($result)) {?>
                                            <option value="<?php echo $row["subid"];?>" style="display: none;" data-id="<?php echo $row["classid"];?>">
                                                <?php echo $row['subname'];?>
                                            </option>
                                            <?php
                                        }
                                    } else {
                                    echo "0 results";
                                        }
                                    ?>
                                  </select>
                       </div>
                    </div>
     
                       <div class="col-md-12">
                          <div class="float-left">
                             <span class="fa fa-user-lock"> Account</span>
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
                     <a href="assign-teacher.php" class="btn bg1">Cancel</a>
                  </div>
                </form>
            </div>
         </div>
      </div>
   </div>
              <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <div class="card-body">
                     <a class="btn btn-sm bg1" href="#" data-toggle="modal" data-target="#add"><i
                     class="fa fa-user-plus"></i> Add Subject</a><br><br>    
               <div class="col-md-12 table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Teacher Name</th>
                           <th>Subject Name</th>
                           <th>Class</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $sql = "SELECT * FROM `assignteacher`";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                          $subid = $row['subjectid'];
                          $classid = $row['classid'];
                          $assigntid = $row['assigntid'];
                           ?>
                           <tr>
                             <td><?php echo $row['teacherfname']; ?></td>
                            <td> <?php 
                                    
                                   $sql2 = "SELECT * FROM  `subject` where subid = $subid";
                                   $result2 = $conn->query($sql2);
                                   while($row = $result2->fetch_assoc()) { echo $row['subname'];}?></td>
                            <td> <?php 
                                    
                                   $sql3 = "SELECT * FROM  `class` where classid = $classid";
                                   $result3 = $conn->query($sql3);
                                   while($row = $result3->fetch_array(MYSQLI_ASSOC)) { echo $row['classname'];}?></td>
                             
                            <td class="text-right">
                                 <a class="btn btn-sm bg3" href="edit/edit_assignt.php?assigntid=<?php echo $assigntid;?>"><i class="fa fa-edit"></i> edit</a>
                                 <a class="btn btn-sm bg1" href="assign-teacher.php?assigntid=<?php echo $assigntid;?>" >
                                 <i class="fa fa-trash-alt"></i> delete</a>
                              </td>
                           </tr>
                         <?php  
                        } ?>
                        </tbody>
                  </table>
               </div>
            </div>
      </div>

   </div>
   <!-- /.card-body -->
   </div>
   </div>
   <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="../asset/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Assignment?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn bg1">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   <script src="../asset/jquery/jquery.min.js"></script>
   <script src="../asset/js/bootstrap.bundle.min.js"></script>
   <script src="../asset/js/adminlte.js"></script>
   <!-- DataTables  & Plugins -->
   <script src="../asset/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="../asset/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>s
   <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <script>
      $(function () {
         $("#example1").DataTable();
      });
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
</body>

</html>