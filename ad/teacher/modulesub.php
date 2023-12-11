<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');
if(isset($_GET['classid']))
{
  $classid = $_GET["classid"];
  }
   if (isset($_GET['error'])) 
    {?>
       <link rel="stylesheet" href="popup_style.css">
       <div class="popup popup--icon -success js_success-popup popup--visible">
       <div class="popup__background"></div>
       <div class="popup__content">
       <h3 class="popup__content__title">Invalid</h3>
       <p><?=$_GET['error']?></p>
       <p><?php echo "<script>setTimeout(\"location.href = 'subject.php';\",1500);</script>"; ?></p>
       </div></div><?php 
     }
     if (isset($_GET['video'])) 
     {?>
       <link rel="stylesheet" href="popup_style.css">
       <div class="popup popup--icon -question js_question-popup popup--visible">
       <div class="popup__background"></div>
       <div class="popup__content">
       <h3><?php $video = $_GET['video'];echo $video;
       ?><h3>
       <video width="400" height="300" controls>
       <source src="video/<?php echo $video;?>" type="video/mp4">    
          Sorry, your browser doesn't support the video element.
       </video>
        </div>
        </div>
        </div>
       <?php 
       }
  if(isset($_GET['subid']))
  {
    $subid = $_GET["subid"];
  
  ?>


  <html lang="en">
     <head>
      <style>
  .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


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
  <div id="add" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
                <form  method="POST" action="add/save_module.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Subject Information</span>
                 </div>
              </div>
   
                     <div class="col-md-12">
                        <div class="form-group">
                          
                          <input name="subid" type="text" class="form-control" placeholder="ex. 123-23432-12" hidden>
                        </div>
                     </div>
                     
                       <?php 
                        $sql = "SELECT * FROM `subject` where subid = $subid";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {?>
                     <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="float-left">Subject</label>
                          <input name="subid" type="text" value="<?php echo $row['subname'];?>" class="form-control" placeholder="ex. 123-23432-12" disabled>

                        </div>
                     </div>          <?php   }?>
                      <input name="subid" type="text" value="<?php echo $subid;?>" class="form-control" placeholder="ex. 123-23432-12" hidden>
                    </div>
                     
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Module</label>
                         <input name="learnM" type="file" class="form-control" value=" ">
                       </div>
                    </div>
     
                    
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a href="modulesub.php?subid=<?php echo $_GET['subid'];?>" class="btn bg1">Cancel</a>
                  </div>
                </form>
            </div>
         </div>
      </div>
   </div>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <div id="addv" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-body text-center">
                <form  method="POST" action="add/save_video.php"  enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                     <div class="col-md-12 float-left">
                        <div class="float-left">
                           <span class="fa fa-user"> Subject Information</span>
                 </div>
              </div>
   
                     <div class="col-md-12">
                        <div class="form-group">
                          
                          <input name="subid" type="text" class="form-control" placeholder="ex. 123-23432-12" hidden>
                        </div>
                     </div>
                     
                       <?php 
                        $sql = "SELECT * FROM `subject` where subid = $subid";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {?>
                     <div class="col-md-12">
                        <div class="form-group">
                          <label for="exampleInputEmail1" class="float-left">Subject</label>
                          <input name="subid" type="text" value="<?php echo $row['subname'];?>" class="form-control" placeholder="ex. 123-23432-12" disabled>

                        </div>
                     </div>          <?php   }?>
                      <input name="subid" type="text" value="<?php echo $subid;?>" class="form-control" placeholder="ex. 123-23432-12" hidden>
                    </div>
                     
                       <div class="col-md-12">
                       <div class="form-group">
                         <label for="exampleInputEmail1" class="float-left">Video</label>
                         <input name="video" type="file" class="form-control" value=" ">
                       </div>
                    </div>
     
                    
                    </div>
  
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                     <button type="submit" name="submit" class="btn bg2">Save</button>
                     <a href="modulesub.php?subid=<?php echo $_GET['subid'];?>" class="btn bg1">Cancel</a>
                  </div>
                </form>
            </div>
         </div>
      </div>
   </div>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-book"></span> Subject Quiz</h1>
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
                     class="fa fa-plus"></i> Add module</a>   ||| <a class="btn btn-sm bg1" href="#" data-toggle="modal" data-target="#addv"><i
                     class="fa fa-video"></i> Add Video</a><br><br>    
                <div class="col-md-12 table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>Learning Materials</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
                        $sql = "SELECT * FROM `learnm` where subid = $subid";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {


                           ?>
                       <tr>
                           <td><a href="  documents/doc.php?learnmid=<?php echo $row['learnmid'];?>"><i class="fa fa-edit"></i> <?php echo $row['module']; ?> </a><a  href="modulesub.php?video=<?php echo $row['video'];?>"><?php echo $row['video']; ?></a></td>
                          
                           <td class="text-right">
                           <a class="btn btn-sm bg1" href="modulesub.php?learnmid=<?php echo $row['learnmid'];?>" >
                           <i class="fa fa-trash-alt"></i> delete</a>
                                 

                              </td>
                                            </tr>
                                          <?php 
                                        
                                        }} if(isset($_GET['learnmid']))
{?>
           <link rel="stylesheet" href="popup_style.css">
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to delete this Class?</h3>
  <div class="m-t-20"> <a href="quiz.php" class="btn btn-white">Close</a>
    <a href="delete/del_module.php?learnmid=<?php echo $_GET['learnmid']; ?>" class="btn btn-white" >
    <button type="submit" class="btn bg1">Delete</button></a>
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