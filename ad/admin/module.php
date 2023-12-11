<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');


if(isset($_GET['classid']))
{
  $classid = $_GET["classid"];
  }
 if(isset($_GET['subid']))
{?>
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to delete this Subject?</h3>
  <div class="m-t-20"> <a href="subject.php" class="btn btn-white">Close</a>
    <a href="delete/del_subject.php?subid=<?php echo $_GET['subid']; ?>" class="btn btn-white" >
    <button type="submit" class="btn bg1">Delete</button></a>
  </div>
  </div>
  </div>
  <?php
}
if(isset($_GET['logout']))
{?>
<link rel="stylesheet" href="popup_style.css">
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to Logout?</h3>
  <div class="m-t-20"> <a href="subject.php" class="btn btn-white">Close</a>
    <a href="logout.php?anid=<?php echo $_GET['anid']; ?>" class="btn btn-white" >
    <button type="submit" class="btn bg1">Logout</button></a>
  </div>
  </div>
  </div>
  <?php 
}  
?>

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
           <a class="nav-link" href="module.php?logout=<?php echo $row['logout'];?>">
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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-book"></span> Subject</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Subject</li>
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
              
            </div>
         </div>
      </div>
   </div>
    <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <div class="card-body">
                                  
                <div class="col-md-12 table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Subject Name</th>
                           <th>Learning Materials</th>

                           <th>Assign Teacher</th>
                           <th class="text-right">Action</th>

                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $sql = "SELECT * FROM `subject` where classid = $classid ";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                           $classid = $row['classid'];
                           $subid = $row['subid'];
                           $teachid = $row['assigntid'];
                           ?>
                        <tr>
                           <td><?php echo $row['subname']; ?></td>   
                           <td><a  href="modulesub.php?subid=<?php echo $row['subid'];?>" ><i class="fa fa-book"></i> Modules  &  <i class="fa fa-video"></i> Videos</a></td>
                          
                           <td><?php $sql3 = "SELECT * FROM  `assignteacher` where subjectid = $subid";
                                   $result3 = $conn->query($sql3);
                                   while($row = $result3->fetch_assoc()) { echo $row['teacherfname'];}?></td>
                           <td class="text-right">
                              <a class="btn btn-sm bg3" href="edit/edit_sub.php?subid=<?php echo $subid;?>"><i class="fa fa-edit"></i> edit</a>
                              <a class="btn btn-sm bg1" href="module.php?subid=<?php echo $subid;?>" >
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
</body>

</html>