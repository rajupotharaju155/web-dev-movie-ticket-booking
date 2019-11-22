<?php
session_start();
include("connection.php");
?>
<!DOCTYPE HTML>
<html lang="en" >
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" >

  function checkpass()
  {
    var first = document.frm.pass1.value;
    var sec = document.frm.pass2.value;

    var n = document.frm.phone.value;
    if (n.length != 10)
    {
        alert("Please enter 10 digit mobile number");
        return false;      
    }

    if (first == sec)
    {
      return true;
    }
    else
    {
      alert("Both passwords should match! ");
      return false;
    }

    
  }
  </script>
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
  



  <section id="all" >
    <div class="logo">
        <img src="media/images/logo1.png" alt="">
    </div>
      
      <div class="login-page">
          <h3>Sign-Up</h3>
          <div class="form">
            <form name="frm" action="registration.php" method="POST"  onsubmit="return checkpass()" >
                <input type="text" name="fullname" placeholder="full name"  required  />
                <input type="email"  name="email" placeholder="email address"  required />
                <input type="number"  name="phone"  placeholder="enter phone number"  required />
                <input type="text"  name="username"  placeholder="pick a username"  required />
                <input type="password"  name="pass1" placeholder="set a password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"     required />
                <input type="password"  name="pass2"  placeholder="confirm password"  required />
              
                <button type="submit" class="btn btn-primary"> SIGN UP</button>
            </form>
        </div>
      </div>
</section>





</body>
</html>

