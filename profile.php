<?php include_once('user-header.php');?>
  
      <div class="container-fluid page-body-wrapper">
        
        <?php include_once('sidebar.php');?>
        
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Profile</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> View Profile</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <div class="dropdown-header d-flex">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" width="150px" alt="Profile image">
                  <div><p class="mb-1 mt-3">name of user</p>
                  <p class="font-weight-light text-muted mb-0">email</p> 
                  <button class="btn" style="background-color:white;color: black;border: 2px solid #4CAF50;margin-top:10%;"><a href="user-profile.php">Profile</button>
                  <button class="btn" style="background-color:white;color: black;border: 2px solid #4CAF50;margin-top:10%;"><a href="use-changepass.php">Change Password</button></div>
                   </div>      
                        <div>
                          
                  </div>
                </div>
              </div>
            </div>
                 
         <?php include_once('footer.php');?>
          
        </div>
      </div>
    </div>
   <?php   ?>
</body>
</html>

