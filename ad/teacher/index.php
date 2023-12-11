<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');
?>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
            <link rel="stylesheet" href="../asset/css/style.css">
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
               }
               .bg2{
                  background-color: rgb(4,91,98);
               }
               .bg3{
                  background-color: rgb(20,83,154);
               }
               .bg4{
                  background-color: rgb(109,65,161);
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
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-tachometer-alt"></span> Dashboard</h1>
                     </div>
                     <!-- /.col -->
                     <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">Dashboard</li>
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
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                     <div class="col-6 col-sm-6 col-md-5 offset-md-1">
            <div class="info-box">
              <span class="info-box-icon bg1 elevation-1"><i class="fas fa-chalkboard-teacher" style="color: rgb(211, 209, 207);"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Enrolled Students</span>
                <span class="info-box-number">
                <?php 
                  $sql = "SELECT count(*) FROM `student`";
                  $result = $conn->query($sql);
  
                  // Display data on web page
                  while($row = mysqli_fetch_array($result)) 
                  {
                      echo $row['count(*)'];
                  }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-6 col-sm-6 col-md-5">
            <div class="info-box">
              <span class="info-box-icon bg2 elevation-1"><i class="fas fa-user-graduate" style="color: rgb(211, 209, 207);"></i></span>
              <?php 
                  $sql = 
                  "
                  SELECT * FROM quizscore 
                  ";
                  $result1 = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                  $quizscore1 = 0; $perfectscore1=0;                        
                  while ($row = $result1->fetch_array(MYSQLI_ASSOC)) 
                  {
                    $quizscore1 = $quizscore1 + $row['score'];      
                    $perfectscore1 = $perfectscore1+50;      
                  }
                  $quizweight1= (($quizscore1 / $perfectscore1)*100);
                  $sql = 
                  "
                  SELECT * FROM barchart  
                  ";
                  $result1 = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                  $examscore1 = 0; $perfectscore1=0;                        
                  while ($row = $result1->fetch_array(MYSQLI_ASSOC)) 
                  {
                    $examscore1 = $examscore1 + $row['postTest'];      
                    $perfectscore1 = $perfectscore1+100;      
                  }
                  $examsweight1= (($examscore1 / $perfectscore1)*100);
                  $chanceofsuc1 =  ($quizweight1 * .30)+($examsweight1 * .70); 
             ?>
              <div class="info-box-content">
                <span class="info-box-text">Average Mark</span>
                <span class="info-box-number">
                  <?php echo number_format($chanceofsuc1 ,2)?>%
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-6 col-md-5 offset-md-1">
            <div class="info-box mb-3">
              <span class="info-box-icon bg3 elevation-1"><i class="fas fa-certificate" style="color: rgb(211, 209, 207);"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Underperforming Students</span>
                <span class="info-box-number"><?php 
                  $sql = "SELECT grade FROM `student`";
                  $result = $conn->query($sql);
                  $studfail=0;
                  while($row = mysqli_fetch_array($result)) 
                  { 
                     
                     if ($row['grade'] <=74) 
                     {
                       $studfail++;
                     }

                  }  echo $studfail;
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6 col-sm-6 col-md-5">
            <div class="info-box mb-3">
              <span class="info-box-icon bg4 elevation-1"><i class="fas fa-book" style="color: rgb(211, 209, 207);"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Number of Subject</span>
                <span class="info-box-number"><?php 
                  $sql = "SELECT count(*) FROM `subject`";
                  $result = $conn->query($sql);
  
                  // Display data on web page
                  while($row = mysqli_fetch_array($result)) 
                  {
                      echo $row['count(*)'];
                  }
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-md-5 offset-md-1">
            <!-- USERS LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Overall High Performer</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
                  <?php 
                  $sql = 
                  "
                  SELECT * FROM student ORDER BY grade DESC LIMIT 8; 
                  ";
                  $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                  $quizscore = 0; $perfectscore1=0;                        
                  while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
                  {?>
                  <li>
                    <img src="images/<?php echo $row['profile'];?>" alt="User Image">
                    <a class="users-list-name" href="#"><?php echo $row['fname'];?></a>
                    <span class="users-list-date"><?php echo $row['dateregister'];?></span>
                  </li><?php
                 }?>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="javascript::">View All Users</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!--/.card -->
          </div>
          <?php 
          try 
          {
            $sql = 
            "
            SELECT * FROM class 
            ";
            $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
            $totalnum  =  0;
            $pretest  =  0;
            $posttest  = 0;
            $classname = array();        
            $pangclass = array();
            $meanpre = array();  $meanpost = array();                  
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
            { 
              $classid = $row['classid'];
              $sql1 = 
              "
              SELECT * FROM barchart WHERE classid = $classid;
              ";
              $result1 = $conn->query($sql1) or trigger_error($conn->error."[$sql1]");                  
              while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) 
              {
                $pretest  = $pretest + $row1['preTest'];
                $posttest  = $posttest +  $row1['postTest'];
                $totalnum++;
              }
              if ($pretest != 0) {
              $meanpre[] = $pretest/$totalnum;
              $meanpost[] = $posttest/$totalnum;
              }

              $totalnum  =  0;
              $pretest  =  0;
              $posttest  = 0;
            }
            } 
            catch (Exception $e) 
            {
              die("Error:Could not able to execute $sql.".$e->getMessage());
            }?>

          <div class="col-12 col-md-5 col-lg-5 col-xl-5">
            <div class="card">
               <div class="card-body">
                  <div class="chart-title">
                     <h4>Student Score Bar Chart</h4><br>
                  </div>
                  <canvas id="bargraph"></canvas>
               </div>
            </div>
         </div>
        </div>
                  </div>
                  <!-- /.row -->
                  <!-- /.row (main row) -->
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
      <script src="../asset/js/adminlte.js"></script>
      <script src="../asset/js/chart.js"></script>
   <script>
    var meanpre =<?php echo json_encode($meanpre);?>;
    var meanpost =<?php echo json_encode($meanpost);?>;
      document.addEventListener("DOMContentLoaded", function () {
         // Bar Chart
         var barChartData = {
            labels: ["Exam 1","Exam 2","Exam 3","Exam 4","Exam 5","Exam 6"],
            datasets: [{
               label: 'Pre Test',
               backgroundColor: 'rgb(79,129,189)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: meanpre
            },
            {
               label: 'Post Test',
               backgroundColor: 'rgb(192,80,77)',
               borderColor: 'rgba(0, 158, 251, 1)',
               borderWidth: 1,
               data: meanpost
            }]
         };

         var ctx = document.getElementById('bargraph').getContext('2d');
         window.myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
               responsive: true,
               legend: {
                  display: true,
               }
            }
         });

      });
   </script>
   </body>
</html>