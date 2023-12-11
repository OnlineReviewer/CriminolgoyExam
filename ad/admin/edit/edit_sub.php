<!DOCTYPE html>
<?php
include ('../sidebar.php'); 
include ('../connector.php');
?>
<?php
$que="SELECT * FROM `subject` WHERE subid='".$_GET["subid"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    
    extract($row);
$subname = $row['subname'];
$classid = $row['classid'];
$learnM = $row['learnmid'];



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
    
   <div class="popup popup--icon -question js_question-popup popup--visible">
     <div class="popup__background"></div>
      <div class="popup__content">
        <form  method="POST" action="updating_sub.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Subject Information</span>
                 </div>
              </div>
   
                     <div class="col-md-12">
                        <div class="form-group">
                          
                          <input name="subid" type="text" value="<?php echo $subid; ?>" class="form-control" placeholder="middle name" hidden>
                        </div>
                     </div>
                     
                       <div class="col-md-12">
                       <div class="form-group">
                      <label for="exampleInputEmail1" class="float-left">Class</label>
                      <select type="text" name="classid" id="class_id" class="form-control"   placeholder="Class" required="">
                       <option value="">--Select Class--</option>
                       <?php $c1 = "SELECT * FROM `class`";
                       $result = $conn->query($c1);
                       if ($result->num_rows > 0) 
                       {
                          while ($row = mysqli_fetch_array($result)) 
                          {?>
                           <option value="<?php echo $row["classid"];?>"<?php if($classid==$row["classid"]){ echo "Selected";}?>>
                           <?php echo $row['classname'];?></option><?php
                          }
                       } 
                       else 
                       {
                         echo "0 results";
                       }
                     }?></select>
                       </div>
                    </div>
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Subject Name</label>
                         <input name="subname" type="text" value="<?php echo $subname; ?>" class="form-control" placeholder="Subject Name" required>
                          <input name="subid" type="text" value="<?php echo $subid; ?>" class="form-control" placeholder="Subject Name" hidden>
                       </div>
                    </div>

     
                    
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a class="btn bg1" href="../subject.php" >Cancel</a>
                  </div>
                </form>
            </div>
         </div>
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
                           <th>Subject Name</th>
                           <th>Learning Materials</th>
                           <th>Class Name</th>
                           <th>Assign Teacher</th>

                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
                        $sql = "SELECT * FROM `subject`";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                           $classid = $row['classid'];
                           $subid = $row['subid'];
                           $teachid = $row['assigntid'];
                           ?>
                        <tr>
                           <td><?php echo $row['subname']; ?></td>
                           <td><?php echo $row['learnmid']; ?></td>
                            <td> <?php 
                                    
                                  $sql2 = "SELECT * FROM  `class` where classid = $classid";
                                   $result2 = $conn->query($sql2);
                                   while($row = $result2->fetch_assoc()) { echo $row['classname'];}?></td>
                                   
                           <td> <?php 
                                    
                                   $sql3 = "SELECT * FROM  `assignteacher` where assigntid = $teachid";
                                   $result3 = $conn->query($sql3);
                                   while($row = $result3->fetch_assoc()) { echo $row['teacherfname'];}?></td>
                                  <td class="text-right">
                                 <a class="btn btn-sm bg3" href="edit/edit_sub.php?subid=<?php echo $subid;?>"><i class="fa fa-edit"></i> edit</a>
                                 <a class="btn btn-sm bg1" href="subject.php?subid=<?php echo $subid;?>" >
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
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
  
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