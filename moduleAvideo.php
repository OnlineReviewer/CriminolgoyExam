<?php

include ('connector.php');
if(isset($_GET['subid']))
{
  $subid = $_GET["subid"];
}
if (isset($_GET['video'])) 
     {?>
       <link rel="stylesheet" href="popup_style.css">
       <div class="popup popup--icon -question js_question-popup popup--visible">
       <div class="popup__background"></div>
       <div class="popup__content">
       <h3 class="popup__content__title">
       <h3><?php $video = $_GET['video'];echo $video;
       ?><h3>
       <video width="400" height="300" controls>
       <source src="ad/admin/video/<?php echo $video;?>" type="video/mp4">    
          Sorry, your browser doesn't support the video element.
       </video>
        </div>
        </div>
        </div>
       <?php 
       }
if (isset($_GET['module'])) 
     {?>
       <link rel="stylesheet" href="popup_style.css">
       <div class="popup popup--icon -question js_question-popup popup--visible">
       <div class="popup__background"></div>
       <div class="popup__content">
       <h3 class="popup__content__title">
       <h3><?php $video = $_GET['video'];echo $video;
       ?><h3>
       <video width="400" height="300" controls>
       <source src="ad/admin/video/<?php echo $video;?>" type="video/mp4">    
          Sorry, your browser doesn't support the video element.
       </video>
        </div>
        </div>
        </div>
       <?php 
       }
?>



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
                  <div class="card-body">
                    <div class="container-xl">
                      <div class="table-responsive">
                          <div class="table-wrapper">
                              <table class="table table-striped table-hover">
                                    <thead>
                        <tr>
                           <th>Module And Video </th>


                        </tr>
                     </thead>
                     <tbody>
                         <?php ini_set('display_errors', 0);
                         try
                         {
                        $sql = "SELECT * FROM `learnm` where subid = $subid";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {


                           ?>
                        <tr>
                           <td><a class="btn btn-sm bg3" href="ad/admin/documents/doc.php?learnmid=<?php echo $row['learnmid'];?>"><i class="fa fa-edit"></i> <?php echo $row['module']; ?> </a><a class="btn btn-sm bg3" href="moduleAvideo.php?video=<?php echo $row['video'];?>"><?php echo $row['video']; ?></a></td>
                           <td></a> </a></td>
                        <?php } }
                          catch (Exception $e) 
                          {
                            die("Error:Could not able to execute $sql.".$e->getMessage());
                          }
                        ?>

                              </td>
                                            </tr>
                              </table>
                          </div> 
                      </div>   
                    </div>
                  </div>
                </div>
              </div>
            </div>
         <?php include_once('footer.php'); ?>
          
        </div>
    </div>
   <?php   ?>

<script src="../asset/jquery/jquery.min.js"></script>
<script src="../asset/js/adminlte.js"></script>
<script src="../asset/js/chart.js"></script>
   
</body>
</html>

