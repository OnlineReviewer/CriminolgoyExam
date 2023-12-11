<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');
if(isset($_GET['id']))
{?>
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to delete this Handle Class?</h3>
  <div class="m-t-20"> <a href="course.php" class="btn bg3">Close</a>
    <a href="delete/del_class.php?id=<?php echo $_GET['id']; ?>" class="btn btn-white" >
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
        <li class="nav-item">
           <a class="nav-link" href="logout.php">
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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-certificate"></span> Class</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Class</li>
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
               <div class="card card-info"><br><br>
                <div class="card-body">
                   
                  <form method="POST" action="add/save_class.php"  enctype="multipart/form-data">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="card-header">
                                 <span class="fa fa-certificate"> Class Information</span>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
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
                                     <input name="assigntid"  class="form-control"  value="<?php echo $_SESSION['assigntid'];?>" hidden><?php $assigntid = $_SESSION['assigntid'];
                                     $c1 = "SELECT * FROM `assignteacher` WHERE assigntid = '$assigntid'";
                                     $result = $conn->query($c1);
                                     if ($result->num_rows > 0) 
                                     {
                                        while ($row = mysqli_fetch_array($result)) 
                                        {?>
                                         <input name="teacherfname"  class="form-control"  value="<?php echo $row['teacherfname'];?>" hidden><?php
                                        }
                                     } 
                                     else 
                                     {
                                       echo "0 results";
                                     }?>
                                     </div>
                                 </div>
                                      
                              </div>
                              <div class="col-md-12">
                                 <button type="submit" class="btn bg2">Add Handle Class</button>
                              </div>
                  </form>
               </div>

               <div class="col-md-9 table-responsive" style="border-left: 1px solid #ddd;">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Class Name</th>
                           <th>Description</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $sql = "SELECT * FROM `class` INNER JOIN assignteacher ON assignteacher.classid = class.classid   
                        WHERE  assigntid = '$assigntid'";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                           ?>
                        <tr>
                            
                           <td><a  href="subjectquiz.php?classid=<?php echo $row['classid'];?>" ><?php echo $row['classname']; ?> <i class="fa fa-edit">Open Quiz</i></td>
                           <td><?php echo $row['description']; ?></td></a>
                           <td class="text-right">
                             <a class="btn btn-sm bg1" href="examquestion.php?classid=<?php echo $row['classid'];?>"><i
                              class="fa fa-expand-arrows-alt-plus float-right" ></i> Add Exam</a><br><br>
                              <a class="btn btn-sm bg3" href="course.php?id=<?php echo $row['id'];?>" >
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
               <h3>Are you sure want to delete this class?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn bg1">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
 

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