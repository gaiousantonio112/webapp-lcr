<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" href="../../../../assets/fontawesome-5.9.0/css/all.min.css">
<link rel="stylesheet" href="../../../../assets/css/simple-sidebar.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/mdb.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/style.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/modules/animations-extended.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/addons/datatables.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/addons/datatables-select.min.css">
<link rel="stylesheet" href="../../../../assets/datepicker/calendar/lib/bootstrap-datepicker.css">
<link rel="stylesheet" href="../../../../assets/datepicker/calendar/lib/daterangepicker.css">

<style media="screen">

::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #F5F5F5;
	border-radius: 10px;
}

::-webkit-scrollbar
{
	width: 10px;
	background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-image: -webkit-gradient(linear,
									   left bottom,
									   left top,
									   color-stop(0.44, rgb(122,153,217)),
									   color-stop(0.72, rgb(73,125,189)),
									   color-stop(0.86, rgb(28,58,148)));
}



</style>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LCR</title>


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading py-3"><img src="<?php base_url()?>/assets/img/ecrislogo.svg" alt=""> </div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-columns "></i> Dashboard</a>
        <a href="<?php echo base_url() . 'pages/dash/search'  ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-search-dollar "></i> Search and Payment</a>
        <a href="<?php echo base_url() . 'pages/dash/add'  ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-user-plus "></i> Add</a>
        <a href="<?php echo base_url() . 'pages/dash/print'  ?>" class="list-group-item list-group-item-action bg-light"><i class="fas fa-print "></i> Print</a>
        <!-- <a href="#" class="list-group-item list-group-item-action bg-light">Warning</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Birthday</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Death</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Marriage</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Prinb</a> -->
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-flat " id="menu-toggle"><i class="fas fa-bars "></i></button>
        <h4 class="pt-2">ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</h4>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Account</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url() . 'pages/logout'  ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

    <!-- /#page-content-wrapper -->
