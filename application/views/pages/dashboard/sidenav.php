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


.bg-ecris{
background-color: #17242D;
}
.navbar{
 border-bottom: 5px solid #163F54;

}
.list-group a:hover{
	background-color: #163F54;
}
.list-group a{

	border-top: 1px solid black ;
		border-bottom: 1px solid black ;
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
    <div class="bg-ecris border-right" id="sidebar-wrapper">
      <div class="sidebar-heading py-3"><img src="<?php base_url()?>/assets/img/ecrislogo.svg" alt=""></div>
			<div class="text-white text-center">
				Name: Eduardo Dalisay

			</div>
			<div class="text-white text-center">
				<script>
				var currentTime = new Date(),
			      hours = currentTime.getHours(),
			      minutes = currentTime.getMinutes();

				if (minutes < 10) {
				 minutes = "0" + minutes;
			  }

				var suffix = "AM";
				if (hours >= 12) {
			    suffix = "PM";
			    hours = hours - 12;
				}
				if (hours == 0) {
				 hours = 12;
				}

				document.write(hours + ":" + minutes + " " + suffix + " ")

	var currentDate = new Date(),
			day = currentDate.getDate(),
			month = currentDate.getMonth() + 1,
			year = currentDate.getFullYear();
	document.write(day + "/" + month + "/" + year)


</script>
			</div>
      <div class="list-group list-group-flush pt-2">
        <a href="<?php echo base_url() . 'pages/dash/index'  ?>" class="font-weight-bold boder text-center list-group-item list-group-item-action bg-ecris text-white "><img src="<?php echo base_url() .'/assets/svg/dashboard(ecris).svg' ?>" height="25px" class="float-left" alt="">Dashboard</a>
        <a href="<?php echo base_url() . 'pages/dash/search'  ?>" class="font-weight-bold  text-center list-group-item list-group-item-action bg-ecris text-white"><img src="<?php echo base_url() .'/assets/svg/search and payment (eCRIS).svg' ?>" height="25px" class="float-left" alt=""></i> Search and Payment</a>
        <a href="<?php echo base_url() . 'pages/dash/add'  ?>" class="font-weight-bold  text-center list-group-item list-group-item-action bg-ecris text-white"><img src="<?php echo base_url() .'/assets/svg/add (ecris).svg' ?>" height="25px" class="float-left" alt=""> Add</a>
        <a href="<?php echo base_url() . 'pages/dash/print'  ?>" class="font-weight-bold  text-center list-group-item list-group-item-action bg-ecris text-white"><img src="<?php echo base_url() .'/assets/svg/Print (ecris).svg' ?>" height="25px" class="float-left" alt=""> Print</a>
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

      <nav class="navbar navbar-expand-lg navbar-light bg-ecris ">
        <a class="btn btn-flat " id="menu-toggle"><i class="fas fa-bars "></i></a>
        <h4 class="text-white font-weight-bold pt-2">ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</h4>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
