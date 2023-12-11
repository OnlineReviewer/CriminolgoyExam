<?php 
include ('connector.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dashboard</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 40px 0;
}
.table-wrapper {
    width: 850px;
    background: #fff;
    margin: 0 auto;
    padding: -5px 40px 15px;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
}
.table-title .btn-group {
    float: right;
}
.table-title .btn {
    min-width: 50px;
    border-radius: 2px;
    border: none;
    padding: 6px 12px;
    font-size: 105%;
    outline: none !important;
    height: 50px;
}
.table-title {
    min-width: 110%;
    border-bottom: 1px solid #e9e9e9;
    padding-bottom: 15px;
    margin-bottom: 5px;
    background: rgb(0, 50, 74);
    margin: -20px -31px 10px;
    padding: 15px 30px;
    color: #fff;
}
.table-title h2 {
    margin: 2px 0 0;
    font-size: 24px;
}
table.table {
    min-width: 100%;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 50px;
}
table.table tr th:last-child {
    width: 110px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table td a {
    color: #2196f3;
}
table.table td .btn.manage {
    padding: 6px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 5px;
}
table.table td .btn.manage:hover {
    background: #2e9c81;    
}


.fas {
  margin-right: 4px !important; /*override*/
}

.fas .glyphicon {
  margin-right: 0px !important; /*override*/
}

.pagination a {
  color: #555;
}

.card ul {
  padding: 0px;
  margin: 0px;
  list-style: none;
}
.btn.manage {
    padding: 6px 10px;
    background: #37BC9B;
    color: #fff;
    border-radius: 5px;
}
.news-item {
  padding: 4px 4px;
  margin: 0px;
  border-bottom: 1px dotted #555;
}


</style>
<script>
$(document).ready(function(){
  $(".btn-group .btn").click(function(){
    var inputValue = $(this).find("input").val();
    if(inputValue != 'all'){
      var target = $('table tr[data-status="' + inputValue + '"]');
      $("table tbody tr").not(target).hide();
      target.fadeIn();
    } else {
      $("table tbody tr").fadeIn();
    }
  });
  // Changing the class of status label to support Bootstrap 4
    var bs = $.fn.tooltip.Constructor.VERSION;
    var str = bs.split(".");
    if(str[0] == 4){
        $(".label").each(function(){
          var classStr = $(this).attr("class");
            var newClassStr = classStr.replace(/label/g, "badge");
            $(this).removeAttr("class").addClass(newClassStr);
        });
    }
});
</script>
<?php include_once('user-header.php');?><br>
  
      <div class="container-fluid page-body-wrapper">
        
        <?php include_once('sidebar.php');?>
        
           <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">       
                    <h3 class="font-weight-semibold">Dashboard</h3>
                    <div class="row ">
                      <div class=" col-md-6 report-inner-cards-wrapper">
                        <div class="report-inner-card color-1" >
                        <div class="inner-card-text text-white">
                  
                          <span class="report-title">Total Subjects</span>
                          <h4><?php 
                          $sql = "SELECT count(*) FROM `class`";
                          $result = $conn->query($sql);
          
                          // Display data on web page
                          while($row = mysqli_fetch_array($result)) 
                          {
                              echo $row['count(*)'];
                          }?></h4>
                          <a href="tbl_subject.php"><span class="report-count"> View Subjects </span></a>
                        </div>
                        <div class="inner-card-icon">
                          <i class="icon-layers menu-icon"></i>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6 report-inner-cards-wrapper">
                        <div class="report-inner-card color-2">
                        <div class="inner-card-text text-white">
                         
                          <span class="report-title">Total Assessments</span>
                          <h4><?php 
                          $sql = "SELECT count(*) FROM `quiz`";
                          $result = $conn->query($sql);
          
                          // Display data on web page
                          while($row = mysqli_fetch_array($result)) 
                          {
                              echo $row['count(*)'];
                          }?></h4>
                          <a href="tbl_assessment.php"><span class="report-count"> View Assessments</span></a>
                        </div>
                        <div class="inner-card-icon ">
                          <i class="icon-doc menu-icon"></i>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 report-inner-cards-wrapper float-left"><br>
                      <b><span class="report-title" style="color:black;font-size:23px;">Announcement</span></b>
                        <div class="report-inner-card color-3" style="background-color:white;border:4px solid;border-color: green;">
                        <div class="inner-card-text text-white">
                         <h4 style="color:black;font-size:13px;">
                    <?php 
                        $sql = "SELECT * FROM `announcement` ORDER BY dates DESC LIMIT 3; ";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        { echo "<b>".$row['title']; ?></b><br><?php echo $row['description']." ".$row['tim']." ".$row['dates']."<br><br><br>";
                        }
                        ?>
</h4>
                          
                          <h4></h4>
                          
                        </div>                       
                      </div>
                    </div>
                  
                    <div class="col-md-8 report-inner-cards-wrapper float-right">    
                          <h4></h4>
                          <div class="card">
                       <div class="card-body">
                          <div class="chart-title">
                             <h3 style="color:black;font-size:23px;">Pre Test and Post Test Chart </h3>
                              <button class="btn btn-sm manage" id="mybutton" onclick="showData(6)" >View all exam Score</button>
                              <button class="btn btn-sm manage" id="mybutton2" onclick="resetData(3)" style="display: none;" >Back to Default</button>    
                          </div>
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
                          unset($conn);?>
                          
                          <canvas id="myChart"></canvas>
                       </div>
                    </div>               
                   
                    </div>
                    </div>

<br>
                       <!-- <div class="col-md-6 report-inner-cards-wrapper">
                          <b><span class="report-title" style="color:black;font-size:33px;">Announcement</span></b>
                        <div class="report-inner-card color-3" style="background-color:white;border:4px solid;border-color: green;"><br>
                        <div class="inner-card-text text-white">
                          
                          <h4 style="color:black;font-size:20px;"><<<<<<<<<announcement</h4>
                        </div>             
                      </div>
                    </div>-->

                    <!--<div class="row">
                      <div class="col-md-12">
                        <div id="piechart" style="width: 100%; height: 500px;"></div>
                      </div>
                    </div>-->
                  </div>
                       
                       </div>       
          </div>
          
         <?php include_once('footer.php');?>
         
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

    //Setup Block
    const pretest =<?php echo json_encode($pretest);?>;
    const posttest =<?php echo json_encode($posttest);?>;
    const classname =<?php echo json_encode($classname);?>;
    const posttestSliced = posttest.slice(0,3);
    const pretestSliced = pretest.slice(0,3);
    const classnameSliced = classname.slice(0,3);
      
    const data = 
    {
      labels: classnameSliced,
            datasets: [{
                label: 'Score of Pretest ',
                data: pretestSliced,
                backgroundColor:'rgba(255, 99, 132, 0.2)',
                borderColor:'rgba(255, 99, 132, 1)',
                borderWidth: 1
            },{
                label: 'Score of Post test',
                data: posttestSliced,
                backgroundColor:'rgba(255, 206, 86, 0.2)',   
                borderColor:'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }
            ]
    };

    //Config Block

    const config = 
    {
      type: 'bar',
        data,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    //Render Block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
      );
    function showData(num)
    {
      myChart.data.datasets[0].data = pretest;
      myChart.data.datasets[1].data = posttest;
      myChart.data.labels = classname;
      myChart.update();
      var x = document.getElementById("mybutton");
      var z = document.getElementById("mybutton2");
      if (x.style.display === "none") {
        x.style.display = "block";
        z.style.display = "none";
      } else {
        x.style.display = "none";
        z.style.display = "block";
      }
    }
    function resetData(num)
    {
      myChart.data.datasets[0].data = pretestSliced;
      myChart.data.datasets[1].data = posttestSliced;
      myChart.data.labels = classnameSliced;
      myChart.update();
      x = document.getElementById("mybutton");
      z = document.getElementById("mybutton2");
      if (x.style.display === "none") {
        x.style.display = "block";
        z.style.display = "none";
      } else {
        x.style.display = "none";
        z.style.display = "block";
      }
    }

     
    

    </script>
   <script src="../assets/jquery/jquery.min.js"></script>
   <script src="../assets/js/adminlte.js"></script>
   <script src="../assets/js/chart.js"></script>
   
</body>
</html>


