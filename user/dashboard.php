<?php
session_start();
require_once('../connection.php');
if (empty($_SESSION['id_user'])) {
  header("Location:../index.php");
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blue Hills Resort | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
  body{

  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BLU</b>HILS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Blue Hills</b>Resort</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpeg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpeg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['fullname']; ?> - <?php echo $_SESSION['email']; ?>
                  
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Clients</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Services</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php
          echo $_SESSION['fullname'];
          ?>
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['email']; ?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="dashboard.php"><i class="fa fa-dashboard"> Dashboard</i></a></li>
            <li ><a href="viewrooms.php"><i class="fa fa-home"></i> Rooms</a></li>
            <li><a href="viewservices.php"><i class="fa fa-cog"></i> Services</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Services </span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.php"><i class="fa fa-circle-o"></i> Orders</a></li>
            <li><a href="pages/layout/collapsed-sidebar.php"><i class="fa fa-circle-o"></i> Rooms</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Todays Revenue</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="pages/tables/data.php"><i class="fa fa-circle-o"></i> Term Papers</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span> Reservation Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox /Messages</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <!-- <small class="label pull-right bg-red">5</small> -->
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
   <div class="contentpanel container-fluid">
     <div class="panel panel-default panel-bordered">
       <div class="panel-heading">
         <h3 class="panel-title">Welcome to Blue Hills Resort</h3>
         <P>Click on any type of services to access them. </P>
       </div>
       <div class="panel-body">
         <div class="row ">
          <div class="col-xs-4">
             <div class="blog-item ">
               <a href="#" class="blog-img">
                 <img src="images/0.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center ">
                 <h4 class="blog-title"><a href="#"><h3>Superior Rooms</h3></a></h4>
                 <div class="blog-summary ">
                  <p>King & Queen Size Beds</p>
            <table class="table table-striped mt30 ">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> King & Queen Size Beds</td>
                  <td><i class="fa fa-check-circle"></i> Complimentary standard Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Shower Only</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Telephone Service</td>
                  <td><i class="fa fa-check-circle"></i> Coffee/Tea  Maker Plus Accessories</td>
                  <td><i class="fa fa-check-circle"></i> Hair Drier</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Private Safe</td>
                  <td><i class="fa fa-check-circle"></i> Flat screen Tv: Satellite Tv</td>
                  <td><i class="fa fa-check-circle"></i> Premium Bedding</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                  <td><i class="fa fa-check-circle"></i> Slippers</td>
                  <td><i class="fa fa-check-circle"></i> </td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Make up Mirror</td>
                  <td><i class="fa fa-check-circle"></i> Bathrobe</td>
                  <td><i class="fa fa-check-circle"></i> Towel</td>
                </tr>       
              </tbody>
            </table>

                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div>
       <div class="col-xs-4">
             <div class="blog-item ">
               <a href="#" class="blog-img">
                 <img src="images/1.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center ">
                 <h4 class="blog-title"><a href="#"><h3>Deluxe Rooms</h3></a></h4>
                 <div class="blog-summary ">
                  <p>Bed Size Options, King/Queen/Twin. Interconnecting Door Room Option (on request) Free Laundry Service</p>
                  <table class="table table-striped mt30 ">
                    <tbody>
                      <tr>
                  <td><i class="fa fa-check-circle"></i> Telephone Service</td>
                  <td><i class="fa fa-check-circle"></i> Complimentary standard Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> In-room Private Safe</td>
                  <td><i class="fa fa-check-circle"></i> Coffee/Tea  Maker Plus Accessories</td>
                  <td><i class="fa fa-check-circle"></i> Hair Drier</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> King size Bed</td>
                  <td><i class="fa fa-check-circle"></i> Flat screen Tv: Satellite Tv</td>
                  <td><i class="fa fa-check-circle"></i> Shower</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Bathtub</td>
                  <td><i class="fa fa-check-circle"></i> Premium Bedding</td>
                  <td><i class="fa fa-check-circle"></i> Slippers</td>
                </tr>

                    </tbody>
                  </table>
                   <!-- <p>The Best rooms Available for our clients to stay in,
                   plus additional services offered like room services and massage</p> -->
                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div>
         <div class="col-xs-4">
             <div class="blog-item ">
               <a href="#" class="blog-img">
                 <img src="images/2.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center ">
                 <h4 class="blog-title"><a href="#">Business Deluxe Room Amenities</a></h4>
                 <div class="blog-summary fixHeight">
                  <p>Bed Size Options King/Queen Interconnecting Door Room Option (on request), Shower and Bath Tub, Laundry Service for Free</p>
                   <table class="table table-striped mt30 ">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Telephone Service</td>
                  <td><i class="fa fa-check-circle"></i> Complimentary standard Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> In-room Private Safe</td>
                  <td><i class="fa fa-check-circle"></i> Coffee/Tea  Maker Plus Accessories</td>
                  <td><i class="fa fa-check-circle"></i> Hair Drier</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> King size Bed</td>
                  <td><i class="fa fa-check-circle"></i> Flat screen Tv: Satellite Tv</td>
                  <td><i class="fa fa-check-circle"></i> Shower</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Bathtub</td>
                  <td><i class="fa fa-check-circle"></i> Premium Bedding</td>
                  <td><i class="fa fa-check-circle"></i> Slippers</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Free Newspaper</td>
                  <td><i class="fa fa-check-circle"></i> Queen Size Bed</td>
                  <td><i class="fa fa-check-circle"></i> Make up Mirror</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Make up Mirror</td>
                  <td><i class="fa fa-check-circle"></i> Bathrobe</td>
                  <td><i class="fa fa-check-circle"></i> Beverages</td>
                </tr>
              </tbody>
            </table>

                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div>
           
         </div>
<hr>
         <div class="row">
           <div class="col-xs-4 ">
             <div class="blog-item">
               <a href="#" class="blog-img">
                 <img src="images/3.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center">
                 <h4 class="blog-title"><a href="#">Business Suite Room Amenities</a></h4>
                 <div class="blog-summary">
                  <p>King Size Bed Separate Sitting Room, Interconnecting Door Room Option (on request), Shower and Bath Tub</p>
                  <table class="table table-striped mt30 ">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Telephone Service</td>
                  <td><i class="fa fa-check-circle"></i> Complimentary standard Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> In-room Private Safe</td>
                  <td><i class="fa fa-check-circle"></i> Coffee/Tea  Maker Plus Accessories</td>
                  <td><i class="fa fa-check-circle"></i> Hair Drier</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> King size Bed</td>
                  <td><i class="fa fa-check-circle"></i> 2 Flat Satellite Tv: Satellite Tv</td>
                  <td><i class="fa fa-check-circle"></i> Shower</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Bathtub</td>
                  <td><i class="fa fa-check-circle"></i> Premium Bedding</td>
                  <td><i class="fa fa-check-circle"></i> Slippers</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Free Newspaper</td>
                  <td><i class="fa fa-check-circle"></i> Queen Size Bed</td>
                  <td><i class="fa fa-check-circle"></i> Laundry service at a fee</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Make up Mirror</td>
                  <td><i class="fa fa-check-circle"></i> Bathrobe</td>
                  <td><i class="fa fa-check-circle"></i> Kitchenette</td>
                </tr>       
        <tr>
                  <td><i class="fa fa-check-circle"></i> Complimentary Bottled water</td>
                  <td><i class="fa fa-check-circle"></i> Towel</td>
                  <td><i class="fa fa-check-circle"></i> Beverages or snacks for at a fee</td>
                </tr>
              </tbody>
            </table>

                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-xs-4">
             <div class="blog-item">
               <a href="#" class="blog-img">
                 <img src="images/4.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center">
                 <h4 class="blog-title"><a href="#">Executive Suite Room Amenities</a></h4>
                 <div class="blog-summary">
                  <p>2 Bedrooms Sharing a Sitting Room and One King Size Bed in Each Rooms, Separate Sitting Room, Shower and Bath Tub</p>
                   <table class="table table-striped mt30">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Telephone Service</td>
                  <td><i class="fa fa-check-circle"></i> Complimentary standard Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> In-room Private Safe</td>
                  <td><i class="fa fa-check-circle"></i> Coffee/Tea  Maker Plus Accessories</td>
                  <td><i class="fa fa-check-circle"></i> Hair Drier</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> King size Bed</td>
                  <td><i class="fa fa-check-circle"></i> 2 Flat Satellite Tv: Satellite Tv</td>
                  <td><i class="fa fa-check-circle"></i> Shower</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Bathtub</td>
                  <td><i class="fa fa-check-circle"></i> Premium Bedding</td>
                  <td><i class="fa fa-check-circle"></i> Slippers</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Free Newspaper</td>
                  <td><i class="fa fa-check-circle"></i> Queen Size Bed</td>
                  <td><i class="fa fa-check-circle"></i> Laundry service for fee</td>
                </tr>
        <tr>
                  <td><i class="fa fa-check-circle"></i> Make up Mirror</td>
                  <td><i class="fa fa-check-circle"></i> Bathrobe</td>
                  <td><i class="fa fa-check-circle"></i> Kitchenette</td>
                </tr>     
        <tr>
                  <td><i class="fa fa-check-circle"></i> Complimentary Bottled water</td>
                  <td><i class="fa fa-check-circle"></i> Pantry</td>
                  <td><i class="fa fa-check-circle"></i> Beverages or snacks for at a fee</td>
                </tr>
              </tbody>
            </table>

                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div><div class="col-xs-4">
             <div class="blog-item">
               <a href="#" class="blog-img">
                 <img src="images/5.jpg" class="img-responsive" alt="">
               </a>
               <div class="blog-details text-center">
                 <h4 class="blog-title"><a href="#">Room Reservation</a></h4>
                 <div class="blog-summary">
                   <p>The Best rooms Available for our clients to stay in,
                   plus additional services offered like room services and massage</p>
                        <a href="reservation.php" class="btn btn-success"><strong>Get service Now! </strong></a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer fixed-bottom text-center">
    
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
  $(function(){
    var maxHeight=0;
    $(".fixHeight").each(function(){
      maxHeight=($(this).height() > maxHeight ?$(this).height():maxHeight);
    });
    $(".fixHeight").height(maxHeight);
  });
</script>
</body>
</html>
