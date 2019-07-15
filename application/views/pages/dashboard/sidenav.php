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

.wrap
{
    width: 320px;
    height: 192px;
    padding: 0;
    overflow: auto;
}

.bg-ecris{
background-color: #EFEDDF;
}
.navbar{
 border-bottom: 6px solid #163F54;

}
.list-group a:hover{
	background-color: #163F54;
  color: white;
}
.list-group a{

	border-top: 1px solid black ;
		border-bottom: 1px solid black ;
}
.bg-title{
  color: #163F54;
}
.notif:hover
{
    background-color:#F3F3F3;
}
.notif
{
    background-color: white;
    padding: 10px 0px;
}
.notif:active
{
    background-color: #EFECE0;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LCR

  </title>
</head>

<body style="position:fixed; width: 100%; height: 100%">

<div class="d-flex wrapper" id="wrapper"  >

    <!-- Sidebar -->

    <div class="bg-ecris  border-right" id="sidebar-wrapper">
      <div class="sidebar-heading py-3 "><img src="<?php base_url()?>/assets/img/ecrislogo.svg" alt=""></div>
			<div class="font-weight-bold bg-title text-center" id="curr_name">
				Name: Eduardo Dalisay
			</div>
			<div id="current_time" class=" font-weight-bold bg-title text-center">
			</div>

      <div class="list-group list-group-flush pt-2"  style="border-bottom: 1px solid lightgrey">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" class="font-weight-bold boder text-left list-group-item list-group-item-action bg-ecris bg-title" ><img src="<?php echo base_url() .'/assets/svg/dashboard(ecris).svg' ?>" height="25px" class="float-left mr-2" alt=""> Dashboard</a>
        <a href="<?php echo base_url() . 'pages/dash/search'  ?>" class="font-weight-bold  text-left list-group-item list-group-item-action bg-ecris bg-title "  ><img src="<?php echo base_url() .'/assets/svg/search and payment (eCRIS).svg' ?>" height="25px" class="float-left mr-3" alt=""></i> Search and Payment</a>
        <a href="<?php echo base_url() . 'pages/dash/add'  ?>" class="font-weight-bold  text-left list-group-item list-group-item-action bg-ecris bg-title "><img src="<?php echo base_url() .'/assets/svg/add (ecris).svg' ?>" height="25px" class="float-left mr-3" alt=""> Add</a>
      			<a href="<?php echo base_url() . 'pages/dash/formgen'  ?>" class="font-weight-bold  text-left list-group-item list-group-item-action bg-ecris bg-title "><img src="<?php echo base_url() .'/assets/svg/Print (ecris).svg' ?>" height="25px" class="float-left mr-3" alt="">  LCR Form Generator</a>
            <a href="<?php echo base_url() . 'pages/dash/print'  ?>" class="font-weight-bold  text-left list-group-item list-group-item-action bg-ecris bg-title "><img src="<?php echo base_url() .'/assets/svg/Print (ecris).svg' ?>" height="25px" class="float-left mr-3" alt="">  Print</a>

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

      <nav class="navbar navbar-fixed-top navbar sticky-top  navbar-expand-lg navbar-light bg-ecris ">
        <a class="px-3 " id="menu-toggle"><i class="fas fa-bars "></i></a>
        <h4 class="bg-title font-weight-bold pt-2">ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</h4>

        <div class = "">

        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        </div>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0" >
            <div class ="px-2">

            <li class="nav-item dropdown ">
                <span class="badge badge-default float-right px-2 ">9</span>
              <a class="nav-link dropdown-toggle bg-title" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell"></i>
              </a>

              <!--  -->
          <div class="dropdown-menu dropdown-menu-right pb-0 " id="notif" aria-labelledby="navbarDropdown" style="background-color:tomato;">
            <h6 class="dropdown-header mt-0 pb-3 white-text" style="background-color:tomato; width:230px;">Notification   <i class="far fa-bell float-right px-0"></i></h6>
            <a href="#" class="notif col-12 "> Notification Notification Notification Notification </a>
              <a href="#" class="col-12 notif ">Notification</a>
                <a href="#" class="col-12 notif ">Notification</a>
                  <a href="#" class="col-12 notif ">Notification</a>
                    <a href="#" class="col-12 notif ">Notification</a>
                      <a href="#" class="col-12 notif">Notification</a>
                        <a href="#" class="col-12 notif ">Notification</a>
              </div>

            </li>
          </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle bg-title" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                User
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <!-- <a class="dropdown-item" href="#">Account</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="<?php echo base_url() . 'pages/LCR'  ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

    <!-- /#page-content-wrapper -->
