<?php
session_start();
include("connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>

<body>

 
<!---------------------Navigation Bar-------------------->
<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><img src="media/images/logo1.png"></a>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
              
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME</a>
            </li>
            <?php  if(isset($_SESSION['username'])){
              echo " <li class=\"nav-item active\"> 
                <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a> 
              </li> ";
              }else{ 
               echo " <li class=\"nav-item active\">
                  <a class=\"nav-link\" href=\"login.php\"> LOG IN </a>
                </li> ";
              } ?>
              <li class="nav-item active">
                    <a class="nav-link" href="#top">TOP MOVIES</a>
                  </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
  </section>
  





<section id="all">
  <div class="logo">
          <img src="media/images/logo1.png" alt="">
  </div>
    <div class="login-page">
      <h3>LOG IN</h3>
        <div class="form">
            <form action="validation.php" method="POST" >
              <input type="text" placeholder="&#xf007;  username" name="username" required/>
              <input type="password" placeholder="&#xf023;  password"  name="password" required   />
              <input class="inp" type="submit" value="LOGIN">
              <p class="message"> Dont have an account?</p>
              <button type="button" onclick="window.location.href='signup.php'">SIGN UP</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

