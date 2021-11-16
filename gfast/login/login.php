<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login / Sign-up</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <!-- Core theme CSS -->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <style media="screen">
      @import url('https://fonts.googleapis.com/css?family=Mukta');
      body{
      font-family: 'Mukta', sans-serif;
      height:100vh;
      min-height:550px;
      /* background-image: url(http://www.planwallpaper.com/static/images/Free-Wallpaper-Nature-Scenes.jpg); */
      background-image: url("img/wp6696562-gas-station-wallpapers.jpg");
      background-repeat: no-repeat;
      background-size:cover;
      background-position:center;
      position:relative;
       overflow-y: hidden;
      }
      a{
      text-decoration:none;
      color:#444444;
      }
      .login-reg-panel{
       position: relative;
       top: 40%;
       transform: translateY(-50%);
      text-align:center;
       width:70%;
      right:0;left:0;
       margin:auto;
       height:400px;
       background-color: rgba(234, 131, 0, 0.9);
      }
      .white-panel{
       background-color: rgba(255,255, 255, 1);
       height:570px;
       /* height:500px; */
       position:absolute;
       top:-50px;
       width:50%;
       right:calc(50% - 50px);
       transition:.3s ease-in-out;
       z-index:0;
       box-shadow: 0 0 15px 9px #00000096;
      }
      .login-reg-panel input[type="radio"]{
       position:relative;
       display:none;
      }
      .login-reg-panel{
       color:#B8B8B8;
      }
      .login-reg-panel #label-login,
      .login-reg-panel #label-register{
       border:1px solid #9E9E9E;
       padding:5px 5px;
       width:150px;
       display:block;
       text-align:center;
       border-radius:10px;
       cursor:pointer;
       font-weight: 600;
       font-size: 18px;
      }
      .login-info-box{
       width:30%;
       padding:0 50px;
       top:20%;
       left:0;
       position:absolute;
       text-align:left;
      }
      .register-info-box{
       width:30%;
       padding:0 50px;
       top:20%;
       right:0;
       position:absolute;
       text-align:left;

      }
      .right-log{right:50px !important;}

      .login-show,
      .register-show{
       z-index: 1;
       display:none;
       opacity:0;
       transition:0.3s ease-in-out;
       color:#242424;
       text-align:left;
       padding:50px;
      }
      .show-log-panel{
       display:block;
       opacity:0.9;
      }
      .login-show input[type="text"], .login-show input[type="password"]{
       width: 100%;
       display: block;
       margin:20px 0;
       padding: 15px;
       border: 1px solid #b5b5b5;
       outline: none;
      }
      .login-show input[type="button"] {
       max-width: 150px;
       width: 100%;
       background: #444444;
       color: #f9f9f9;
       border: none;
       padding: 10px;
       text-transform: uppercase;
       border-radius: 2px;
       float:right;
       cursor:pointer;
      }
      .login-show a{
       display:inline-block;
       padding:10px 0;
      }

      .register-show input[type="text"], .register-show input[type="password"]{
       width: 100%;
       display: block;
       margin:20px 0;
       padding: 15px;
       border: 1px solid #b5b5b5;
       outline: none;
      }
      .register-show input[type="button"] {
       max-width: 150px;
       width: 100%;
       background: #444444;
       color: #f9f9f9;
       border: none;
       padding: 10px;
       text-transform: uppercase;
       border-radius: 2px;
       float:right;
       cursor:pointer;
      }
      .credit {
       position:absolute;
       bottom:10px;
       left:10px;
       color: #3B3B25;
       margin: 0;
       padding: 0;
       font-family: Arial,sans-serif;
       text-transform: uppercase;
       font-size: 12px;
       font-weight: bold;
       letter-spacing: 1px;
       z-index: 99;
      }
      a{
      text-decoration:none;
      color:#2c7715;
      }
    </style>
    <!-- Core JS -->
    <!-- <script src="js/scripts.js"></script> -->

  </head>
  <body>
    <a href="../index.php"><button type="button" class="btn btn-danger" style="position:relative; top:83%; left:75%; font-size:22px;">Return Home</button></a>
    <div class="login-reg-panel">
    		<div class="login-info-box">
    			<h2>Have an account?</h2>
    			<p>Lorem ipsum dolor sit amet</p>
    			<label id="label-register" for="log-reg-show">Login</label>
    			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
    		</div>

    		<div class="register-info-box">
    			<h2>Don't have an account?</h2>
    			<p>Lorem ipsum dolor sit amet</p>
    			<label id="label-login" for="log-login-show">Register</label>
    			<input type="radio" name="active-log-panel" id="log-login-show">
    		</div>

    		<div class="white-panel">
    			<div class="login-show">
    				<h2>LOGIN</h2>
            <form action="" method="POST" >
      				<input type="text" placeholder="Email" name="logEmail">
      				<input type="password" placeholder="Password" style="margin-bottom:60px" name="logPass">
      				<input type="submit" value="Login" name="btnLogin">
              <!-- <button type="submit" form="logForm" value="Submit">Log In</button> -->
            </form>
    				<a href="">Forgot password?</a>
    			</div>
    			<div class="register-show">
    				<h2>REGISTER</h2>
            <form action="" method="POST" >
              <input type="text" placeholder="First Name" name="fname">
              <input type="text" placeholder="Last Name" name="lname">
      				<input type="text" placeholder="Email" name="regEmail">
      				<input type="password" placeholder="Password" name="regPass">
      				<input type="text" placeholder="Phone" name="phone">
      				<input type="submit" value="Register" name="btnRegister">
            </form>
    			</div>
    		</div>
    	</div>

      <?php
        $con =mysqli_connect("localhost","root","","db_gfast");
        $err="";
        if($con){
          if(isset($_POST['btnLogin'])){
            $email=$_POST['logEmail'];
              $pwd=$_POST['logPass'];
              $query="select * from usertbl where email='$email' and password='$pwd'";
              $result = mysqli_query($con,$query);
              $count = mysqli_num_rows($result);
              if($count ==0)
                echo "<script language='javascript'> alert('Incorrect username or password');</script>";
              else{
                $row=mysqli_fetch_assoc($result);
                $_SESSION['login']=$row['email'];
                header("Location: ../indexx.php");
              }
          }

          if(isset($_POST['btnRegister'])){
              $fname=$_POST['fname'];
              $lname=$_POST['lname'];
              $email=$_POST['regEmail'];
              $pwd=$_POST['regPass'];
              $phone=$_POST['phone'];
              $query="INSERT INTO usertbl (firstName, lastName, email, password, phone) VALUES ('$fname','$lname', '$email','$pwd', '$phone')";
              mysqli_query($con,$query);
              header("Location: login.php");
              // $count = mysqli_num_rows($result);
              // if($count ==0)
              //   echo "<script language='javascript'> alert('Incorrect username or password');</script>";
              // else{
              //   $row=mysqli_fetch_assoc($result);
              //   $_SESSION['login']=$row['email'];
              //   header("Location: ../index.php");
              // }
          }
        }
       ?>

  </body>
</html>

<script type="text/javascript">

      $(document).ready(function(){
      $('.login-info-box').fadeOut();
      $('.login-show').addClass('show-log-panel');
  });


  $('.login-reg-panel input[type="radio"]').on('change', function() {
      if($('#log-login-show').is(':checked')) {
          $('.register-info-box').fadeOut();
          $('.login-info-box').fadeIn();

          $('.white-panel').addClass('right-log');
          $('.register-show').addClass('show-log-panel');
          $('.login-show').removeClass('show-log-panel');

      }
      else if($('#log-reg-show').is(':checked')) {
          $('.register-info-box').fadeIn();
          $('.login-info-box').fadeOut();

          $('.white-panel').removeClass('right-log');

          $('.login-show').addClass('show-log-panel');
          $('.register-show').removeClass('show-log-panel');
      }
  });

</script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
