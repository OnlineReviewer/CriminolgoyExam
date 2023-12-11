<!DOCTYPE html>
<?php
include ('sidebar.php'); 
include ('connector.php');
if(isset($_GET['studid']))
{ $studid = $_GET['studid']; }
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
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
             <div class="content-wrapper">
              <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-certificate"></span>Result Rates</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Class</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body" style="border: 1px solid black;">
          
                     <div class=" col-md-6 report-inner-cards-wrapper float-left">
                        <center>Chance of Success</center>
                        <canvas id="myChart" style="width:100%;height:20%;text-align:center"></canvas>                       
                    </div>

                      <div class=" col-md-6 report-inner-cards-wrapper float-left" >
                        <center>Quality of Student</center>
                        <canvas id="myChart1" style="width:100%;height:20%;text-align:center"></canvas>  

                    </div>
                  <div class=" col-md-12 report-inner-cards-wrapper float-left"><hr></div>
                  
                    <div class=" col-md-6 report-inner-cards-wrapper float-left "style="width:100%;height:1200%;text-align:center">
                        <center>Student Skills</center>
                        <canvas id="myChart2"></canvas>            
                    </div>

                    <div class=" col-md-6 report-inner-cards-wrapper float-right" style="width:100%;height:1200%;text-align:center">
                        <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                            <th>Sub Topic</th>
                            <th>Score</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php 
                          try 
                          {
                            $sql = 
                            "
                              SELECT * FROM quizscore INNER JOIN subject ON quizscore.id = subject.subid WHERE studid = '$studid' 
                            ";
                            $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");                           
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
                            {?><tr>
                              <td><?php echo $row['subname'];?></td>
                              <td><?php echo $row['score'];?></td></tr>
                             <?php             
                            }

                          } 
                          catch (Exception $e) 
                          {
                            die("Error:Could not able to execute $sql.".$e->getMessage());
                          }
                          ?>
                        </tbody>
                  </table>
                          
                    </div>

                    <div class=" col-md-12  float-left"><hr></div>
                    <div class=" col-md-12  float-right "style="width:100%;height:1200%;text-align:center">
                       <h3 style="color:black;font-size:23px;">Pre Test and Post Test Chart </h3>
                   <?php 
                          try 
                          {
                            $sql = 
                            "
                              SELECT * FROM barchart INNER JOIN class ON class.classid = barchart.classid WHERE studid = '$studid' 
                            ";
                            $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                            $pretest  =  array();
                            $posttest  =  array(); 
                            $classname = array();                           
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
                            {
                               $pretest[] = $row['preTest'];
                               $posttest[] = $row['postTest'];
                               $classname[] = ucwords($row['classname']);              
                            }

                          } 
                          catch (Exception $e) 
                          {
                            die("Error:Could not able to execute $sql.".$e->getMessage());
                          }
                         ?>
                          
                          <canvas id="myChart4"></canvas>
                                  
                    </div>
                    
                    </div>
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
   <script src="../asset/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="../asset/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
   <?php include ('charts.php'); //https://canvasjs.com/php-charts/chart-with-multiple-axes/
    include ('success.js');include ('quality.js'); 
    ?>
    
    <script>
    var chanceofsuc1 =<?php echo $chanceofsuc1?>;
    var chanceofsuc2 =<?php echo $chanceofsuc2?>;
    var chanceofsuc3 =<?php echo $chanceofsuc3?>;
    var chanceofsuc4 =<?php echo $chanceofsuc4?>;
    var chanceofsuc5 =<?php echo $chanceofsuc5?>;
    var chanceofsuc6 =<?php echo $chanceofsuc6?>;  
    const data2 = {
      labels: [
        'Criminal Jurisprudence, Procedure and Evidence',
        'Law Enforcement Administration',
        'Criminalistics',
        'Crime Detection and Investigation',
        'Sociology of Crimes and Ethics',
        'Correctional Administration',
      ],
      datasets: [{
        label: 'Student Dataset',
        data: [chanceofsuc1, chanceofsuc2, chanceofsuc3, chanceofsuc4, chanceofsuc5, chanceofsuc6],
        fill: true,
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgb(255, 99, 132)',
        pointBackgroundColor: 'rgb(255, 99, 132)',
        pointBorderColor: '#fff',
        pointHoverBackgroundColor: '#fff',
        pointHoverBorderColor: 'rgb(255, 99, 132)'
      }]
    };
    const config2 = {
      type: 'radar',
      data: data2,
      options: {

        elements: {
          line: {
            borderWidth: 3
          }
        }
      },
    };
    var myChart2 = new Chart(
    document.getElementById('myChart2'),
    config2
    );
    </script>

   <script>
      $(function () {
         $("#example1").DataTable();
      });
    const pretest =<?php echo json_encode($pretest);?>;
    const posttest =<?php echo json_encode($posttest);?>;
    const classname =<?php echo json_encode($classname);?>;
      
    var data4 = 
    {
      labels: classname,
            datasets: [{
                label: 'Score of Pretest ',
                data: pretest,
                backgroundColor:'rgba(255, 99, 132, 0.2)',
                borderColor:'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },{
                label: 'Score of Post test',
                data: posttest,
                backgroundColor:'rgba(255, 206, 86, 0.2)',   
                borderColor:'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }
            ]
    };

    //Config Block

    var config = 
    {
      type: 'bar',
        data:data4,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    //Render Block
    var myChart4 = new Chart(
      document.getElementById('myChart4'),
      config
      );
  
    </script>
   </script>
</body>
</html>

