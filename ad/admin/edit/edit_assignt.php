<!DOCTYPE html>
<?php
include ('../sidebar.php'); 
include ('../connector.php');
?>
<?php
$que="SELECT * FROM `assignteacher` WHERE teacherfname='".$_GET["teacherfname"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    
  extract($row);
  $subid = $row['subjectid'];
  $classid = $row['classid'];
  $teacherfname = $row['teacherfname'];

}?>

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
                     
               <div class="col-md-12 table-responsive">
                 <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Subject Name</th>
                           <th>Class</th>
                           <th>Teacher ID No.</th>
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
      <div class="popup__content" style="max-height: 500px; overflow-y: auto;">
        <form  method="POST" action="updating_assignt.php"  enctype="multipart/form-data" style ="overflow-y: auto;">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12 float-left">
                <div class="float-left">
                  <span class="fa fa-user"> Profile Information</span>
                </div>
              </div>
                    <?php 
                        $sql = "SELECT DISTINCT teacherfname FROM `assignteacher` WHERE teacherfname = '$teacherfname'";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 

                        while ($teacherRow = $result->fetch_array(MYSQLI_ASSOC)) {
                            $teacherfname = $teacherRow['teacherfname'];

                            // Fetch all classes for the current teacher
                            $classSql = "SELECT class.classname, assignteacher.id, class.classid
                                        FROM `assignteacher`
                                        JOIN `class` ON assignteacher.classid = class.classid
                                        WHERE assignteacher.teacherfname = '$teacherfname'";
                            $classResult = $conn->query($classSql);

                            // Display one row per teacher with their associated classes
                        ?>
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Teacher FullName</label>
                         <input name="teacherfname" type="text" value="<?php echo $teacherfname; ?>" class="form-control" placeholder="middle name">
                         <input name="assigntid" type="text" value="<?php echo $assigntid; ?>" class="form-control" placeholder="middle name" hidden>
                       </div>
                         <?php $i=0;
                                    while ($classRow = $classResult->fetch_array(MYSQLI_ASSOC)) {
                                        $i++;
                                        $id =  $classRow['id'];
                                        $sad =  $classRow['classname'];
                                        $classid=  $classRow['classid'];?>
                                         <input name="sid" type="text" value="<?php echo $id; ?>" class="form-control" placeholder="middle name" hidden>
                                    <div class="col-md-12">
                       <div class="form-group">
                      <label for="exampleInputEmail1" class="float-left">Handle Class</label>
                       <select type="text" name="classid" id="class_id" class="form-control"   placeholder="Class" required="">
                       <option value="">--Select Class--</option>
                       <?php $c1 = "SELECT * FROM `class` ";
                       $result = $conn->query($c1);
                       if ($result->num_rows > 0) 
                       {
                          while ($row = mysqli_fetch_array($result)) 
                          {?>
                           <option value="<?php echo $row["classid"];?>"<?php if($classid==$row['classid']){ echo "Selected";}?>>
                           <?php echo $row['classname'];?></option><?php
                          }
                       } 
                       else 
                       {
                         echo "0 results";
                       }?></select>
                       </div>
                    </div><div class="card-footer">
                     <button type="submit" name="submit<?php echo $i; ?>" class="btn bg2">Save</button>
                     <a  class="btn bg1" href="../assign-teacher.php" >Cancel</a>
                  </div><?php
                                    }}?>
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