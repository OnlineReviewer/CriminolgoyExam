<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');
if(isset($_GET['logout']))
{?>
<link rel="stylesheet" href="popup_style.css">
  <div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
  <h3 class="popup__content__title">
  <h3>Are you sure want to Logout?</h3>
  <div class="m-t-20"> <a href="index.php" class="btn btn-white">Close</a>
    <a href="logout.php?anid=<?php echo $_GET['anid']; ?>" class="btn btn-white" >
    <button type="submit" class="btn bg1">Logout</button></a>
  </div>
  </div>
  </div>
  <?php 
} ?>
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
           <a class="nav-link" href="#">
           <p style="color:rgb(211, 209, 207); "><?php echo $_SESSION["assigntid"]  ?></p></a>
        </li>
               <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt" style="color: rgb(211, 209, 207);"></i>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="index.php?logout=<?php echo $row['logout'];?>">
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
             <div class="col-md-5 offset-md-1">
       
            <div class="card">
               <div class="card-body">
                  <div class="chart-title">
                     <h4>Student Score Bar Chart</h4><br>
                  </div>
                  <canvas id="bargraph"></canvas>
               </div>
            </div>
         </div>
         <div class="col-6 col-md- col-lg-11 col-xl-5">
    <!-- USERS LIST -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Overall High Performer</h3>
            <br>
            <label for="displayCriteria">Display Criteria:</label>
            <select id="displayCriteria">
    <option value="grade">Grade</option>
    <option value="avequiz">Quiz Score</option>
    <option value="aveexamscore">Exam Score</option>
</select>

<!-- Container to display the user list -->
<div id="userListContainer" class="card-body p-0">
    <!-- User list will be dynamically updated here based on the selected criteria -->
</div>


              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="users-list clearfix">
           
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="student.php">View All Users</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!--/.card -->
          </div>
               </div>
               
               <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
         </div>
                  </div>
        </div>
           
                  <!-- /.row -->
                  <!-- /.row (main row) -->
                  
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
   <script>
    document.addEventListener("DOMContentLoaded", function () {
        function updateUserList(selectedCriteria) {
            var userListContainer = document.getElementById('userListContainer');
            // Fetch new data from the server based on the selected criteria
            userListContainer.innerHTML = '<p>Loading...</p>';
            fetch('fetch_user_data.php?criteria=' + selectedCriteria)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(data => {
                    userListContainer.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    userListContainer.innerHTML = '<p>Error loading data</p>';
                });
        }

        // Initial load based on default criteria
        updateUserList('grade');

        // Listen for changes in the dropdown
        document.getElementById('displayCriteria').addEventListener('change', function () {
            var selectedCriteria = this.value;
            updateUserList(selectedCriteria);
        });
    });
</script>
   </body>
</html>