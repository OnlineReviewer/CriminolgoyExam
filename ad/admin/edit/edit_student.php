<!DOCTYPE html>
<?php
include ('../sidebar.php'); 
include ('../connector.php');
?>
<?php
$que="SELECT * FROM `student` WHERE studid='".$_GET["studid"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    
    extract($row);
$studid = $row['studid'];
$fname = $row['fname'];
$mname = $row['mname'];
$lname = $row['lname'];
$email = $row['email'];
$uname = $row['uname'];
$pass = $row['pass'];
}

?> 
<html lang="en">
   <head>
    <link rel="stylesheet" href="../popup_style.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../../asset/css/adminlte.min.css">
            <link rel="stylesheet" href="../../asset/css/style.css">
            <link rel="stylesheet" href="../../asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
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
        <li class="nav-item">
           <a class="nav-link" data-widget="fullscreen" href="#" role="button">
           <i class="fas fa-expand-arrows-alt" style="color: rgb(211, 209, 207);"></i>
           </a>
        </li>
        <li class="nav-item">
           <a class="nav-link" data-widget="fullscreen" href="../index.html">
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
                           <th>Email</th>
                           <th>Account Status</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                      <?php 
                        $sql = "SELECT * FROM `student`";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");; 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                          if ($row['mname']=="n/a") 
                          {
                            $row['mname'] = " ";
                          } 
                        ?>
                            <tr>
                            <td><?php echo $row['studid']; ?></td>
                            <td><?php echo $row['profile']; ?></td>
                            <td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><span class="badge bg-success">active</span></td>
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
  
   <div class="popup popup--icon -question js_question-popup popup--visible">
     <div class="popup__background"></div>
      <div class="popup__content">
        <form  method="POST" action="updating_student.php"  enctype="multipart/form-data">
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
                          <input name="studid" type="text" value="<?php echo $studid; ?>" class="form-control" placeholder="ex. 123-23432-12">
                        </div>
                     </div>
                     <div class="col-md-4">
                     <div class="form-group">
                       <label for="exampleInputEmail1" class="float-left">First Name</label>
                       <input name="fname" type="text" value="<?php echo $fname; ?>" class="form-control" placeholder="first name">
                     </div>
                  </div>
                       <div class="col-md-4">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Middle Name</label>
                         <input name="mname" type="text" value="<?php echo $mname; ?>" class="form-control" placeholder="middle name">
                       </div>
                    </div>
                       <div class="col-md-4">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Last Name</label>
                         <input name="lname" type="text" value="<?php echo $lname; ?>" class="form-control" placeholder="last name">
                       </div>
                    </div>                    
                       <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Email</label>
                         <input name="email" type="email" value="<?php echo $email; ?>" class="form-control" placeholder="ex. john@gmail.com">
                       </div>
                    </div>
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Profile</label>
                         <input name="profile" type="file" class="form-control" >
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
                         <input name="uname" type="text" value="<?php echo $uname; ?>" class="form-control" placeholder="username">
                       </div>
                    </div>
                       <div class="col-md-6">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Password</label>
                         <input name="pass" type="Password" value="<?php echo $pass; ?>"  class="form-control" placeholder="**********">
                       </div>
                    </div>
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a  class="btn bg1" href="../student.php" >Cancel</a>
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