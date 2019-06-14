<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" href="../../../../assets/fontawesome-5.9.0/css/all.min.css">
<link rel="stylesheet" href="../../../../assets/css/simple-sidebar.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/mdb.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/style.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/addons/datatables.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/addons/datatables-select.min.css">
<link rel="stylesheet" href="../../../../assets/datepicker/calendar/lib/bootstrap-datepicker.css">
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
      <div class="sidebar-heading">ECRIS </div>
      <div class="list-group list-group-flush">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?php echo base_url() . 'pages/dash/search'  ?>" class="list-group-item list-group-item-action bg-light">Search and  Payment</a>
        <a href="<?php echo base_url() . 'pages/dash/add'  ?>" class="list-group-item list-group-item-action bg-light">Add</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Print</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Warning</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Birthday</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Death</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Marriage</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Prinb</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

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
                <a class="dropdown-item" href="<?php echo base_url() . 'pages/index'  ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

    <!-- /#page-content-wrapper -->
