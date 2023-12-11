<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Assessment</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php include_once('user-header.php');?><br>
      <div class="container-fluid page-body-wrapper"> 
        <?php include_once('sidebar.php');?>
           <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Result Rates </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Result Rates</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body" style="border: 1px solid black">
                    <div >
                              
                    </div>  
                     
<div class="col-md-6 report-inner-cards-wrapper float-left">
    <div style="text-align: center;">
        <i class="fas fa-info-circle" style="font-size: 24px;" title="The chance of success represents the probability rating of students passing the exam. "></i>
        <br>
        <strong>Chance of Success</strong>
    </div>
    <canvas id="myChart" style="width: 100%; height: 20%; text-align: center;"></canvas>
</div>

<!-- Rest of your HTML code -->
<div class="col-md-6 report-inner-cards-wrapper float-left">
    <div style="text-align: center;">
        <i class="fas fa-info-circle" style="font-size: 24px;" title="The quality of the student is determined by comparing them to other students."></i>
        <br>
        <strong>Quality of Student</strong>
    </div>
    <canvas id="myChart1" style="width: 100%; height: 20%; text-align: center;"></canvas>
</div>

<div class="col-md-12 report-inner-cards-wrapper float-left"><hr></div>

<div class="col-md-6 report-inner-cards-wrapper float-right" style="width:100%; height:1200%; text-align:center">
    <div style="text-align: center;">
        <i class="fas fa-info-circle" style="font-size: 24px;" title="Student skills refer to the various abilities and talents students possess, shaping their overall capabilities and performance"></i>
        <br>
        <strong>Student Skills</strong>
    </div>
    <canvas id="myChart2"></canvas>
</div>

                    <div class=" col-md-6 report-inner-cards-wrapper float-left" style="width:100%;height:1200%;text-align:center">
                        <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                            <th>Sub Topic</th>
                            <th>Score</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <?php 
                          try 
                          {
                            $studid = $_SESSION['studid'];
                            $sql = 
                            "
                              SELECT * FROM quizscore INNER JOIN subject ON quizscore.subid = subject.subid WHERE studid = '$studid' 
                            ";
                            $result = $conn->query($sql) or trigger_error($conn->error."[$sql]");                           
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
                            {?><tr>
                              <td><?php echo $row['subname'];?></td>
                              <td><?php echo $row['score'];?></td>
                              <td> <a href="form-asses.php?subid=<?php echo $row['subid']; ?>" ><button style="bg-color:lightgreen;" >Retake Quiz</button></a></td></tr>
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

                    <div class=" col-md-12 report-inner-cards-wrapper float-left"><hr></div>
                    <div class=" col-md-12 report-inner-cards-wrapper float-right "style="width:100%;height:1200%;text-align:center">
                       <h3 style="color:black;font-size:23px;">Pre Test and Post Test Chart </h3>
                   <?php 
                          try 
                          {
                            $studid = $_SESSION['studid'];
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
         <?php include_once('footer.php'); ?>     
        </div>
    </div>
    <?php include ('assets/charts.php'); //https://canvasjs.com/php-charts/chart-with-multiple-axes/
    include ('assets/js/success.js');include ('assets/js/quality.js'); 
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
const infoIcons = document.querySelectorAll('.info-icon');

for (const infoIcon of infoIcons) {
  const description = infoIcon.nextElementSibling;

  infoIcon.addEventListener('mouseenter', () => {
    description.style.display = 'block';
    description.style.opacity = 1;
  });

  infoIcon.addEventListener('mouseleave', () => {
    description.style.display = 'none';
    description.style.opacity = 0;
  });
}
</script>
    <script src="assets/tables/datatables/jquery.dataTables.min.js"></script>
   <script src="assets/tables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
   <script src="assets/tables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
   <script src="assets/tables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
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

