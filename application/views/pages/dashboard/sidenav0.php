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
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/pages.css" >
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
.break-word
{
  overflow-wrap: break-word;
      /* font-size: calc(12px + (26 - 14) * ((100vw - 300px) / (1600 - 300))); */
    margin:0;
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
<nav class="bg-white rounded-bottom z-depth-1">

      <div class ="main-menu pt-5 bg-white" style="position: sticky; top:0; position: -webkit-sticky;">
      <div class ="blue-gradient pb-4">
      <div class="sidebar-heading ">
        <img src="<?php base_url()?>/assets/img/ecrislogo.svg" alt="" height="100px" width="160px" class="mt-2" style="margin-left:50px">
      </div>
      <ul class="list-group list-group-flush">
      <li class="mb-2 ">
<div class = "container px-0">
  <div class = "row">
    <div class = "col-2 ml-2">
    	 <i>
         <img src="<?php echo base_url() .'/assets/svg/user(ecris).svg' ?>" height="25px" class = "img-user" alt="">
       </i>
     </div>

      <div class = "col-9 pt-1 pb-0 px-2 ml-2">
      <p class="white-text break-word" id="curr_name"></p>
     </div>
   </div>
</div>

      </li>

      <li >
			<i>
          <img src="<?php echo base_url() .'/assets/svg/time(ecris).svg' ?>" height="25px" class = "ml-2" alt="">
      </i><span id="current_time" class="bg-title text-center white-text ml-3"></span>
			</div>
      </li>
      </ul>

<ul class="list-group list-group-flush pt-2 ">
  <li class="text-left list-group-item list-group-item-action pl-2"  style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" ><img src="<?php echo base_url() .'/assets/svg/dashboard(ecris).svg' ?>" height="25px" alt=""><span class="nav-text break-word">Dashboard </span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">

        <a href="<?php echo base_url() . 'pages/dash/searchv2'  ?>" ><img src="<?php echo base_url() .'/assets/svg/search(ecris).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Search and Payment</span></a>
  </li>

  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
      	<a href="<?php echo base_url() . 'pages/dash/formgen'  ?>" ><img src="<?php echo base_url() .'/assets/svg/formgen(ecris).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text break-word"> LCR Form Generator</span></a>
  </li>
  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/print'  ?>"><img src="<?php echo base_url() .'/assets/svg/print(ecris).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text break-word"> Print</span></a>
  </li>

  <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/online_requests'  ?>"><img src="<?php echo base_url() .'/assets/svg/print(ecris).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text break-word"> Online Request</span></a>
  </li>

  <!-- <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/users'  ?>"><img src="<?php echo base_url() .'/assets/svg/usermanager(ecris).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Users Manager</span></a>
  </li>
 -->

  <?php
  switch ($user_level) {
      case 'Admin':

      echo  '   <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
      <a href='.base_url().'pages/dash/add><img src='.base_url().'/assets/svg/add(ecris).svg height="28px" class="mr-3" alt=""><span class="nav-text"> Add</span></a>';
echo  '<li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">'
.'<a href='.base_url().'pages/dash/users>'.'<img src='.base_url().'/assets/svg/usermanager(ecris).svg height="25px" class="mr-3" alt=""><span class="nav-text"> User Manager</span></a>';

echo  '<li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">'
.'<a href='.base_url().'pages/dash/cashreport>'.'<img src='.base_url().'/assets/svg/cashier(ecris).svg height="25px" class="mr-3" alt=""><span class="nav-text">Cashier Page</span></a>';
        break;

        case 'Cashier':
        echo  '<li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">'
        .'<a href='.base_url().'pages/dash/cashreport>'.'<img src='.base_url().'/assets/svg/cashier(ecris).svg height="25px" class="mr-3" alt=""><span class="nav-text">Cashier Page</span></a>';
                break;

    default:
      // code...
      break;
  }
?>

  <!-- <li class="text-left list-group-item list-group-item-action pl-2" style="border:0px solid">
        <a href="<?php echo base_url() . 'pages/dash/users'  ?>"><img src="<?php echo base_url() .'/assets/svg/usermanager(samp).svg' ?>" height="25px" class="mr-3" alt=""><span class="nav-text"> Users Manager</span></a>
  </li>

</ul>-->

      </div>
</nav>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar fixed-top navbar-expand-lg navbar-light bg-white z-depth-1 py-0 " style="border-bottom:3px solid #3F729B ;">

       <div class = "mt-2">
        <p class="electext px-0">ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</p>
      </div>

         <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" style="color:teal"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto mt-2  mt-lg-0" >
            <div class ="px-2">

            <li class="nav-item dropdown ">
                <span class="badge badge-default float-right px-2" id="notif_num">Loading...</span>
                <a class="nav-link dropdown-toggle bg-title" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="far fa-bell pb-2" style="color:teal"></i>
                </a>

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
