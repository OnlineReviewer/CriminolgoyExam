<?php

session_start();
 include('connector.php');
    if(!isset($_SESSION["assigntid"])){
    
    header("location:login.php");

    
    
} else { 

?>
<head>
   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Exam Management System</title>
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/adminlte.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
<body><aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgba(39,93,43);">
                        <!-- Brand Logo -->
            <a href="index.html" class="brand-link animated swing"><br><br>
           <img src="../asset/img/logo.JPG" alt="DSMS Logo" width="200" style="margin-bottom: -50px; margin-left: 13px;" onerror="this.onerror=null; this.src='../../asset/img/logo.JPG';">
            </a><br><br>
            
            <!-- Sidebar -->
            <div class="sidebar">
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                        <a href="index.php" class="nav-link">
                           <i class="nav-icon fa fa-tachometer-alt"></i>
                           <p>
                              Dashboard
                           </p><br><br>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="course.php" class="nav-link">
                           <i class="nav-icon fa fa-certificate"></i>
                           <p>
                              Quizzes & Exam 
                           </p><br><br>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="subject.php" class="nav-link">
                           <i class="nav-icon fa fa-book"></i>
                           <p>
                               Learning Materials
                           </p><br><br>
                        </a>
                     </li>
                    
                     <li class="nav-item">
                        <a href="student.php" class="nav-link">
                           <i class="nav-icon fa fa-user-graduate"></i>
                           <p>
                              Student
                           </p><br><br>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="assign-teacher.php" class="nav-link">
                           <i class="nav-icon fa fa-file"></i>
                           <p>
                              Assign-teacher
                           </p><br><br>
                        </a>
                     </li>
                      <li class="nav-item">
                        <a href="announcement.php" class="nav-link">
                           <i class="nav-icon fa fa-bullhorn"></i>
                           <p>
                              Announcement
                           </p><br><br>
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="activityteach.php" class="nav-link">
                           <i class="nav-icon fa fa-history"></i>
                           <p>
                             History of Activity of teacher 
                           </p><br><br>
                        </a>
                     </li>

                      
                  </ul>
               </nav>
               <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
         </aside></body>
<?php } ?>