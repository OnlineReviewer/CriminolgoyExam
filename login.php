<?php  session_start();
include('connector.php');?>
<link rel="stylesheet" href="popup_style.css">
<?php
if(isset($_POST['btn_login']))
{
    $unm = $_POST['studid'];

    $passw = hash('sha256', $_POST['pass']);

    function createSalt()
    {
        return '2123293dsj2hu2nikhiljdsd';
    }
    $salt = createSalt();
    $pass = hash('sha256', $salt . $passw);

    $sql = "SELECT * FROM student WHERE studid='" .$unm . "' and pass = '". $pass."'";
    $result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
    if (($row['mname']=="n/a")||($row['mname']=="none")||($row['mname']=="wala")||($row['mname']==" ")) 
    {
        $mname= " ";
    }
    $_SESSION["studid"] = $row['studid'];

    $count=mysqli_num_rows($result);
    if($count==1 && isset($_SESSION["studid"]) && isset($pass)) {
    {?>
        <div class="popup popup--icon -success js_success-popup popup--visible">
            <div class="popup__background"></div>
            <div class="popup__content">
                <h3 class="popup__content__title">
                    Success 
                </h3>
                <p>Login Successfully</p>
                <p>
                    <?php echo "<script>setTimeout(\"location.href = 'index.php';\",1500);</script>"; ?>
                </p>
            </div>
        </div>
      
         <?php
        }
    }
    else 
    { 
        session_destroy();?>
        <div class="popup popup--icon -error js_error-popup popup--visible">
            <div class="popup__background"></div>
            <div class="popup__content">
                <h3 class="popup__content__title">
                    Error 
                </h3>
                <p>Invalid ID or Password</p>
                <p>
                    <a href="login.php"><button class="button button--error">Close</button></a>
                </p>
            </div>
        </div><?php
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title></title>
</head>
<style> 
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
body, html{
    height: 100%;
    font-family: 'Poppins',sans-serif;
    font-weight: 400;

}
.Main-container{
    width: 100%;
    margin: 0 auto;
}
.container-login{
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: linear-gradient(to right, rgb(182, 244, 146), rgb(51, 139, 147));
}
.wrap-login{
    width: 960px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 177px 130px 33px 95px;
}
.login-pic{
    width: 316px;
}
.login-pic img{
    max-width: 100%;
}
.login-form{
    width: 390px;
}
.login-form-title{
    font-family: 'poppins', sans-serif;
    font-size: 24px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    font-weight: 700;
    width: 100%;
    display: block;
    padding-bottom: 54px;
}
.wrap-input{
    position: relative;
    width: 100%;
    z-index: 1;
    margin-bottom: 10px;
}
.input{
    font-family: 'Poppins' , sans-serif;
    font-size: 15px;
    font-weight: 500;
    line-height: 1.5;
    color: #666666;
    outline: none;
    border: none;
    display: block;
    width: 100%;
    background: #e6e6e6;
    height: 50px;
    border-radius: 25px;
    padding: 0 30px 0 68px;
}
.focus-input{
    display: block;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    box-shadow: 0px 0px 0px 0px;
    color: rgba(87, 184,70, 0.8);
}
.input:focus + .focus-input{
    animation:  anim-shadow 0.5s ease-in-out forwards;
}
@-webkit-keyframes anim-shadow{
    to {
        box-shadow:  0px 0px 70px 25px ;
        opacity: 0;
    }
}
@keyframes anim-shadow{
    to {
        box-shadow:  0px 0px 70px 25px ;
        opacity: 0;
    }
}

.symbol-input{
    font-size: 15px;
    display: flex;
    align-items: center;
    position: absolute;
    border-radius: 25px;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding-left: 35px;
    pointer-events: none;
    color: #666666;
    transition: all 0.4s
}
.input:focus + .focus-input + .symbol-input{
    color: #57b846;
    padding-left: 28px;
}

.login-form-btn-container{
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 20px;
}
.login-form-btn{
    font-family:'poppins',sans-serif ;
    font-size: 15px;
    line-height: 1.5;
    color: #fff;
    background: #57b846;
    text-transform: uppercase;
    width: 100%;
    height: 50px;
    border-radius: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 25px ;
    transition: all 0.4s;
    border: none;

}
.login-form-btn:hover{
    background: #333333;
}
.text-center{
    text-align: center;
}
.txt1{
    font-family: 'poppins';
    font-size: 13px;
    line-height: 1.5;
    color: #666666;
}
.txt2{
    font-family: 'poppins';
    font-size: 13px;
    line-height: 1.5;
    color: #666666;
}
.p-t-1{
    padding-top: 12px;
}
.p-t-2{
    padding-top: 136px;
}

a{
    font-family: 'poppins', sans-serif;
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    margin: 0px;
    transition: all 0.4s;
    text-decoration: none;
    font-weight: 400;
}
a:focus{
    outline: none !important;
}
a:hover{
    color: #57b846;
}
button{
    outline: none !important;
    border: none;
    background: transparent;
}
button:hover{
    cursor: pointer;
}

/* Responsive */
@media (max-width: 992px){

.wrap-login{
    padding: 177px 90px 33px 85px;
}

.login-pic{
    width: 35%;
}
.login-form{
    width: 50%;
}

}


@media (max-width: 768px){
    .wrap-login{
        padding: 100px 80px 33px 80px;
    }
    
    .login-pic{
       display: none;
    }
    .login-form{
        width: 100%;
    } 
}


@media (max-width: 576px){
    .wrap-login{
        padding: 100px 15px 33px 15px;
    }
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
    <div class="Main-container">
        <div class="container-login">
            <div class="wrap-login">

                <div class="login-pic">
                    <img src="assets/images/bg/Capture.jpg" alt="IMG">
                </div>

                <form class="login-form" method="post">
                    <span class="login-form-title">Student Login</span>

                    <div class="wrap-input">
                        <input type="text" class="input"  name="studid" placeholder="Student ID" required>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input">
                        <input type="password" class="input" name="pass" placeholder="Password" id="myInput" required>
                        <div class="input-group-append">
                        <div class="input-group-text " style="cursor: pointer;" onclick="togglePassword()" >
                            <span id="eyeIcon" class="fa fa-eye" style= "margin-top: -9%; margin-left:89%;"></span>
                        </div>
                    </div>
                        <span class="focus-input"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            
                        </span>
                        
                    </div>
            
                    <div class="login-form-btn-container">
                        <button name="btn_login" class="login-form-btn">Login</button>
                    </div>



                  <div class="text-center p-t-1">
                      <a href="signup.php" class="txt2">Create Your Account <i class="fa fa-long-arrow-right " aria-hidden="true"></i></a>
                  </div>

                </form>

            </div>
        </div>
    </div>
  <script>
    function togglePassword() {
        var passwordInput = document.getElementById("myInput");
        var eyeIcon = document.getElementById("eyeIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    }
</script>
</body>
</html>