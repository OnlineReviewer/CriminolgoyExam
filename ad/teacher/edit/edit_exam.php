<!DOCTYPE html>
<?php
include ('../sidebar.php'); 
include ('../connector.php');
?>
<?php
$que="SELECT * FROM `exam` WHERE examid ='".$_GET["examid"]."'";
$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
    
    extract($row);




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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-book"></span> Exam</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Exam</li>
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
                           <th>Questions</th>
                           <th>Answer</th>
                           <th>Options</th>

                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
                        $sql = "SELECT * FROM `exam` where classid = $classid";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {


                           ?>
                        <tr>
                           <td><?php echo $row['examques']; ?></td>
                           <td></a> &ensp;<?php echo $row['answer']; ?></td>
                           <td> <div class="dropdown">
  <span>Option</span>
  <div class="dropdown-content"><?php $quizid= $row['classid'];?>
                       
                          
                          <p><?php echo $row['options1'];?></p>
                           <p><?php echo $row['options2'];?></p>
                            <p><?php echo $row['options3'];?></p>
                             <p><?php echo $row['options4'];?></p>
 </div>
</div>
                      </td>
                                   
                          
                                  <td class="text-right">
                                         
                                   <a class="btn btn-sm bg3" href="edit/edit_exam.php?classid=<?php echo $row['classid'];?>"><i class="fa fa-edit"></i> edit</a>
                              <a class="btn btn-sm bg1" href="exam.php?classid=<?php echo $row['classid'];?>" >
                                 <i class="fa fa-trash-alt"></i> delete</a>
                                 

                              </td>
                                            </tr>
                                          <?php 
                                        }} if(isset($_GET['examid']))
{?>
           <link rel="stylesheet" href="popup_style.css">
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
 <form  method="POST" action="updating_exam.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Subject Information</span>
                 </div>
              </div>
              <?php  $que="SELECT * FROM `exam` WHERE examid='".$_GET["examid"]."'";
              $query=$conn->query($que); while($row=mysqli_fetch_array($query))
              { extract($row);}?>
                     <div class="col-md-12"  style="font-size: 80%">
                        <div class="form-group">
                          
                          <input name="examid" type="text" value="<?php echo $examid; ?>" class="form-control" placeholder="ex. 123-23432-12" hidden>
                            <input name="classid" type="text" value="<?php echo $classid; ?>" class="form-control" placeholder="ex. 123-23432-12" hidden>
                        </div>
                     </div>
                     
                       <div class="col-md-12"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Questions</label>
                         <input name="examques" value="<?php echo $examques; ?>"  type="text" class="form-control" placeholder="Questions" required>
                       </div>
                    </div>
                       <div class="col-md-12"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Answer</label>
                         <input name="answer" type="text" value="<?php echo $answer; ?>" class="form-control" placeholder="Answer" required>
                       </div>
                    </div>
                    <div class="col-md-6"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Option1</label>
                         <input name="options1" type="text" value="<?php echo $options1; ?>" class="form-control" placeholder="Option1" required>
                       </div>
                    </div>
                    <div class="col-md-6"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Option2</label>
                         <input name="options2" type="text" value="<?php echo $options2; ?>" class="form-control" placeholder="Option2" required>
                       </div>
                    </div>
                    <div class="col-md-6"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Option3</label>
                         <input name="options3" type="text" value="<?php echo $options3; ?>" class="form-control" placeholder="Option3" required>
                       </div>
                    </div>
                                        <div class="col-md-6"  style="font-size: 80%">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left" >Option4</label>
                         <input name="options4" type="text" value="<?php echo $options4; ?>" class="form-control" placeholder="Option3" required>
                       </div>
                    </div>
                   
     
                    
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                    <a class="btn bg1" href="../course.php" >Cancel</a>
                  </div>
                </form>
  </div>
  </div>
  </div>
  <?php 
}?>
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