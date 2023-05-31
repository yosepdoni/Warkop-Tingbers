<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ting | Bers</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- datatable -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
  <style>
* {
 }

body {
  margin: 0;
}

.navbar {

position: fixed;
position: center;
z-index: 99;
width: 100%;
}
.navbar-custom-menu {
  width:30%;
}
.sidebar-menu{
  position: fixed;
}
.main-sidebar{
  position: fixed;
}
.ml-auto{
  position: fixed;
  z-index:1%;
width: 100%;
height: 10%
}

</style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header ml-auto">
  <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>B</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TingBers.Io</b></span>
    </a>
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">            
          <!-- User Account: style can be found in dropdown.less -->
          <?php if($_SESSION){ ?>
          <li class="dropdown user user-menu">
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="NABIL.PNG" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="nabil.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']?>
                  <small>Admin</small>
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">LOGOUT</a>
                </div>
              </li>
            </ul>
          </li>
          <?php }else{} ?>
        </ul>
      </div>
    </nav>
  </header>
  <br>
  <br>
  <br>
  <br>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php if($_SESSION){ ?>
      <div class="user-panel">
        <div class="pull-left image">
          <img src="NABIL.PNG" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <?php }else{ }?>
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
      <?php if(empty($_SESSION['username'])){ ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li class="active treeview">
          <li><a href="index.php?page=home"><i class="fa fa-home"></i><span>HOME</span></a></li>
          <li><a href="index.php?page=login"><i class="fa fa-edit"></i><span>SIGN-IN</span></a></li>
      </ul>
      <?php }else{ ?>
        <ul class="sidebar-menu" data-widget="tree">
          <li><a href="content.php?page=home"><i class="fa fa-home"></i><span>HOME</span></a></li>
          <li><a href="content.php?page=trs"><i class="fa fa-calculator"></i><span>TRANSACTION</span></a></li>
          <li><a href="content.php?page=trsview"><i class="fa fa-eye"></i><span>VIEW TRANSACTION</span></a></li>
          <li><a href="content.php?page=tmbbrg"><i class="fa fa-cart-plus"></i><span>ADD ITEM</span></a></li>
          <li><a href="content.php?page=tmbp"><i class="fa fa-plus-square"></i><span>ADD EXPENDITURE</span></a></li>
          <li><a href="content.php?page=dtbrg"><i class="fa fa-th-large"></i><span>ITEM INFORMATION</span></a></li>
          <li><a href="content.php?page=rpt"><i class="fa fa-th-large"></i><span>REPORT</span></a></li>
          <li><a href="content.php?page=rptd"><i class="fa fa-th-large"></i><span>INCOME&EXPENDITURE REPORT</span></a></li>
          <li><a href="logout.php"><i class="fa fa-sign-out"></i><span>LOGOUT</span></a></li>
        </ul>
      <?php } ?>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
