<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" href="../../../../assets/fontawesome-5.9.0/css/all.min.css">
<link rel="stylesheet" href="../../../../assets/css/sideslide.css">
<link rel="stylesheet" href="../../../../assets/css/simple-sidebar0.css">
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
    width: ;
    height: ;
    padding: 0;
    overflow: hidden;
}

.bg-ecris{
background-color: #EFEDDF;
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
<html lang="en" class="">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>LCR

  </title>
</head>
<body>

<div class="d-flex wrapper" id="wrapper" >
  <!-- Sidebar -->
<nav class="bg-white rounded-bottom z-index-">

      <div class ="main-menu pt-5 bg-white" style="position: sticky; top:0; position: -webkit-sticky;">
      <div class ="blue-gradient pb-4">
      <div class="sidebar-heading">
        <img src="<?php base_url()?>/assets/img/ecrislogo.svg" alt="" height="120px" width="140px" class="" style="margin-left:50px">
      </div>
      <ul class="list-group list-group-flush">
      <li class="">
    	<i class="fa fa-user fa-lg white-text pl-3 mb-3 "></i><span class=" bg-title text-center white-text ml-3" id="curr_name" style="font-size:15px">
  		</span>
      </li>

      <li >
			<i class="far fa-clock fa-lg white-text pl-3"></i><span id="current_time" class="bg-title text-center white-text ml-3"></span>
			</div>
      </li>
      </ul>

<ul class="list-group list-group-flush pt-2 ">
  <li class="text-left list-group-item list-group-item-action pl-2"  style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" ><img src="<?php echo base_url() .'/assets/svg/dashboard(samp).svg' ?>" height="25px" alt=""><span class="nav-text">Dashboard </span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/search'  ?>" ><img src="<?php echo base_url() .'/assets/svg/search(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Search and Payment</span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/add'  ?>" ><img src="<?php echo base_url() .'/assets/svg/add(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Add</span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
      	<a href="<?php echo base_url() . 'pages/dash/formgen'  ?>" ><img src="<?php echo base_url() .'/assets/svg/formgen(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> LCR Form Generator</span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/print'  ?>"><img src="<?php echo base_url() .'/assets/svg/print(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Print</span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/users'  ?>"><img src="<?php echo base_url() .'/assets/svg/print(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Users Manager</span></a>
  </li>
</ul>
      <!-- </div> -->
      </div>
</nav>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar fixed-top navbar-expand-lg navbar-light bg-white z-depth-1 " style="border-bottom:3px solid #3F729B">
        <!-- <a class="px-3 " id="menu-toggle"><i class="fas fa-bars "></i></a> -->
        <h5 class="pt-2 pl-4">ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</h5>
        <div class = "">

        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color:teal"></span>
        </button>

        </div>

        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0" >
            <div class ="px-2">

            <li class="nav-item dropdown ">
                <span class="badge badge-default float-right px-2" id="notif_num">Loading...</span>
                <a class="nav-link dropdown-toggle bg-title" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-bell pb-2" style="color:teal"></i>
                </a>
              <!--  -->
                <div class="dropdown-menu dropdown-menu-right pb-0 "  id="notif" aria-labelledby="navbarDropdown" style="background-color:tomato;">
                  <h6 class="dropdown-header mt-0 pb-3 white-text" style="background-color:tomato; width:230px;">Notification   <i class="fas fa-bell float-right px-0"></i></h6>
                  <div class="" style="height: 300px; overflow-y:scroll" id="notif_load">

                  </div>
                </div>
            </li>
          </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                <i class="far fa-user-circle fa-lg pr-1" style="color:teal"></i>
                <span id="curruser_name">

                </span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="<?php echo base_url() . 'pages/LCR'  ?>">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<div class = "m-5"></div>
    <!-- /#page-content-wrapper -->
