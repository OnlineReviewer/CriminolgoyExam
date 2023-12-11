<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');

if(isset($_GET['studid']))
{?>
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to delete this Student?</h3>
  <div class="m-t-20"> <a href="student.php" class="btn btn-white">Close</a>
    <a href="delete/del_student.php?studid=<?php echo $_GET['studid']; ?>" class="btn btn-white" >
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
           <a class="nav-link" href="logout.php">
           <i class="fas fa-power-off" style="color: rgb(211, 209, 207);"></i>
           </a>
        </li>
     </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-user-graduate"></span> Student</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Student</li>
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
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <div class="card-body">
                     <a class="btn btn-sm bg1" href="#" data-toggle="modal" data-target="#add"><i
                     class="fa fa-user-plus"></i> Add Student</a><br><br>
               <div class="col-md-12 table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>ID No.</th>
                           <th>Profile</th>
                           <th>Complete Name</th>                         
                           <th>Account Status</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                      <?php 
                        $sql = "SELECT * FROM `student`";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                          if ($row['mname']=="n/a") 
                          {
                            $row['mname'] = " ";
                          } 
                        ?>
                            <tr>
                            <td> <a href="rates.php?studid=<?php echo $row['studid'];?>"><i class="fa fa-edit"><?php echo $row['studid']; ?></i></a></td>
                            <td><img  style="height: 90px; width:90px; "src="images/<?php echo $row['profile'];?>"></td>
                            <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
                            <td ><center><?php $grades = $row['grade'];
                                if ($grades >= 75) {
                                    echo "<span style='height: 90px; width:90px; font-size:30px;' class='badge bg-success'>Pass</span>";
                                } else {
                                    echo "<span style='height: 90px; width:90px; font-size:25px;' class='badge bg-danger'>Failed</span>";
                                }?></center>

                              </td>
                            <td class="text-right">
                            <a class="btn btn-sm bg3" href="edit/edit_student.php?studid=<?php echo $row['studid'];?>"><i class="fa fa-edit"></i> edit</a>
                            <a class="btn btn-sm bg1" href="student.php?studid=<?php echo $row['studid'];?>" >
                            <i class="fa fa-trash-alt"></i> delete</a>
                            </td>
                        <?php  
                        }
                      ?>
                        
                        </tbody>
                  </table>
               </div>
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
  
   <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
               <form  method="POST" action="add/save_stud.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Profile Information</span>
                 </div>
              </div>
   
                     <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="float-left">ID No.</label>
                          <input name="studid" type="text" class="form-control" placeholder="ex. 123-23432-12" required>
                        </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                       <label for="exampleInputEmail1" class="float-left">First Name</label>
                       <input name="fname" type="text" class="form-control" placeholder="first name" required>
                     </div>
                  </div>
                       <div class="col-md-4">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Middle Name</label>
                         <input name="mname" type="text" class="form-control" placeholder="middle name" required>
                       </div>
                    </div>
                       <div class="col-md-4">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Last Name</label>
                         <input name="lname" type="text" class="form-control" placeholder="last name" required>
                       </div>
                    </div>                    
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Profile</label>
                         <input name="profileImage" type="file" class="form-control" required>
                       </div>
                    </div>
     
                       <div class="col-md-12">
                          <div class="float-left">
                             <span class="fa fa-user-lock"> Account</span>
                   </div>
                </div>
     
                       <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Username</label>
                         <input name="uname" type="text" class="form-control" placeholder="username" required>
                       </div>
                    </div>
                       <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Password</label>
                         <input name="pass" type="Password" class="form-control" placeholder="**********" required>
                       </div>
                    </div>
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a  href="student.php" type="submit" class="btn bg1">Cancel</a>
                  </div>
                </form>
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
</body>

</html>