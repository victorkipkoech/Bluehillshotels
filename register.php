<?php
session_start();
// require_once('connection.php');
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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
        <a class="nav-link" href="index.php"><i class="fa fa-user-circle">&nbsp;</i>Login </a>
      </li>
      </li>

    </ul>
  </div>
</nav>

   </header>
   <br><br><br><br><br>
   <div class="container">
    <div class="card mx-auto" style="width: 50rem;">
          <div class="card-header text-center"><b>Register</b></div>
          <div class="card-body">
            <form action="adduser.php" method="post">
              <div class="form-group">
                <label for="username">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Username" required="">
                <small id="u_error" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="id">National Id</label>
                <input type="number" name="idNo" class="form-control" id="idNo"  placeholder="Enter ID NO" required="">
                <small id="e_error" class="form-text text-muted">We'll never share your Id number with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" class="form-control" id="dob" placeholder="dd/mm/yyyy" required="">
              </div>
              <div class="form-group">
                <label for="dob">Telephone Number</label>
                <input type="number" name="telephone" class="form-control" id="telephone" placeholder="+254" required="">
              </div>
              <div class="form-group">
                <label for="dob">Address</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required="">
              </div>
              <div class="form-group">
                <label for="dob">City/State</label>
                <input type="text" name="city" class="form-control" id="city" placeholder="Enter City / State" required="">
              </div>
              <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" name="password" class="form-control"  id="password" placeholder="Password" required="">
                <small id="p1_error" class="form-text text-muted"></small>
              </div>
              <div class="form-group">
                <label for="password2">Re-enter Password</label>
                <input type="password" name="password2" class="form-control"  id="password2" placeholder="Password">
                <small id="p2_error" class="form-text text-muted"></small>
              </div>
            <!--   <div class="form-group">
                <label for="usertype">Usertype</label>
                <select name="usertype" class="form-control" id="usertype">
                  <option value="">Choose User Type</option>
                  <option value="Admin">Admin</option>
                  <option value="Other">Other</option>
                </select>
                <small id="t_error" class="form-text text-muted"></small>
              </div> -->

              <button href="register.php" type="submit" class="btn btn-block btn-primary"><span class="fa fa-user"></span>&nbsp;Register</button>
              <!-- <span><a href="index.php">Login</a></span> -->
              <?php
          if (isset($_SESSION['registerError'])) {
          ?>
          <div>
            <p class="text-center">Email Already Exists! Choose A Different Email!</p>
          </div>
          <?php
          unset($_SESSION['registerError']); 
        }
          ?>
            </form>
          </div>
        <div class="card-footer text-muted">
          
        </div>
      </div>
  </div>
  <div class="clearfix"> </div>
  <div id="acclaim" class="etickets">
    <div class="row">
      <div class="col-sm-12 text-center">
        <ul>
          <li><a href="index.php">Login</a></li>
        </ul>
        <hr class="mb5 mt5" style="border -bottom: 1px solid;">
      </div>
    </div>
  </div>
  <footer class="main-footer ">
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