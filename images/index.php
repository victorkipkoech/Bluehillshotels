<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Smart Tickets Management System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./includes/style.css">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="custom.css">
  </head>
  <body>

   <header>

     <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">
  <a class="navbar-brand" href="#">Smart Tickets</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home">&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right mr-auto">
    	<li class="nav-item">
        <a class="nav-link" href="service.php"><i class="fa fa-folder">&nbsp;</i>Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../logout.php"><i class="fa fa-admin-circle">&nbsp;</i>Logout </a>
      </li>

    </ul>
    <!-- <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="home_login.php"><span class="glyphicon glyphicon-user"></span>SignIn</a></li>
        <li class="nav-item"><a class="nav-link" href="register.php"><span class="glyphicon glyphicon-user"></span>Register</a></li>
      </ul> -->
  </div>
</nav>

   </header>
    <br><br><br><br><br>
<div class="container">
    <div class="card mx-auto" style="width: 40rem;">
      <img class="card-img-top mx-auto" style="width:40%;" src="./images/login.png" alt="Login Icon">
      <div class="card-body">
        <form action="checklogin.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" id="log_email" placeholder="Enter email" required="">
          <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="log_password" placeholder="Password" required="">
          <small id="p_error" class="form-text text-muted"></small>
        </div>
        <button href="login.php" type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
        <span><a href="register.php">Register</a></span>
        <?php
          if (isset($_SESSION['registerCompleted'])) {
          ?>
          <div>
            <p id="successMessage" class="text-center">You Have Registered Successfully! Please Check Your Email To Confirm.</p>
          </div>
          <?php
          unset($_SESSION['registerCompleted']); 
        }
          ?>
          <?php
          if (isset($_SESSION['loginError'])) {
          ?>
          <div>
            <p class="text-center">Invalid Email/Password! Try Again!</p>
          </div>
          <?php
          unset($_SESSION['loginError']); 
        }
          ?>
      </form>
        
      </div>
      <div class="card-footer"><a href="#">Forget Password ?</a></div>
    </div>
  </div>

  <footer class="main-footer navbar-fixed-bottom">
  	<div class="text-center" style="margin-left: 0px;">
      <strong>Copyright &copy; 2016-2017 <a href="victor.system">smartickets.com</a>.</strong> All rights
    reserved.
    </div>
  </footer>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
  </body>
</html>
?>