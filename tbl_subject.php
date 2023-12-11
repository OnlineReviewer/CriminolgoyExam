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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
</head>
<style>
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}
.butn{
  color: black;
}

h1 {
    font-size: 24px;
    font-weight: 400;
    text-align: center;
}
.image {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}  
</style>
<?php include_once('user-header.php');?><br>
  
      <div class="container-fluid page-body-wrapper">
        
        <?php include_once('sidebar.php');?>
        
           <div class="main-panel">
          <div class="content-wrapper">
              <div class="page-header">
              <h3 class="page-title"> Subjects </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Subjects</li>
                </ol>
              </nav>
            </div>
        <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="main">
                        <h1>Subject</h1>
                        <ul class="cards">
                          <?php 
                        $sql = "SELECT * FROM `class`";
                        $result = $conn->query($sql) or trigger_error($conn->error."[$sql]"); 
                        while($row = $result->fetch_array(MYSQLI_ASSOC))
                        {
                           ?>
                            <li class="cards_item">
                            <div class="card">
                              <div class="card_image"><img class="image"src="assets/images/bg/Capture.jpg"></div>
                              <div class="card_content">
                                <h2 class="card_title"><a  href="module.php?classid=<?php echo $row['classid'];?>" ><?php echo $row['classname']; ?></h2>
                                <p class="card_text"><br><?php echo $row['description']; ?></p>
                                <a class="butn" href="module.php?classid=<?php echo $row['classid'];?>">Open</a></button>
                              </div>
                            </div></a>

                        <?php  
                        } ?>
                          
                          
                        </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>
                      
                      
                                 
                    
                  
                    </div>
                 </div>
             </div>
        </div>
    </div>
</div>
          
         <?php include_once('footer.php');?>
         
        </div>
    </div>
   <?php   ?>
</body>
</html>


