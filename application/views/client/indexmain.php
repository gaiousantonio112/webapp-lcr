<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>San Pablo City LCR</title>

	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="/assets/fontawesome-5.9.0/css/all.min.css">
	<link rel="stylesheet" href="/assets/css/simple-sidebar.css">
	<link rel="stylesheet" href="/assets/MBD/css/mdb.min.css">
	<link rel="stylesheet" href="/assets/MBD/css/style.css">

	<style>
		body,
		html {
			height: 100%;
			margin: 0;
			font: 400 15px/1.8 "Lato", sans-serif;
			color: #777;
		}

		.bgimg-1,
		.bgimg-2,
		.bgimg-3 {
			position: relative;
			opacity: 0.65;
			background-attachment: fixed;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

		}

		.bgimg-1 {
			background-image: url("/assets/img/lake.jpg");
			min-height: 100%;
		}

		.bgimg-2 {
			background-image: url("/assets/img/spc.jpg");
			min-height: 400px;
		}

		.bgimg-3 {
			background-image: url("/assets/img/church.jpg");
			min-height: 400px;
		}

		.caption {
			position: absolute;
			left: 0;
			font-weight: 700;
			font-size: 30px;
			text-transform: uppercase;
			top: 30%;
			width: 100%;
			text-align: center;
			color: rgb(240, 240, 240);
			font-family: 'Open Sans Condensed', sans-serif;

			text-shadow:
				3px 3px 0 #000,
				-1px -1px 0 #000,
				1px -1px 0 #000,
				-1px 1px 0 #000,
				1px 1px 0 #000;
		}

		/*
      .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
      } */

		h3 {
			letter-spacing: 5px;
			text-transform: uppercase;
			font: 20px "Lato", sans-serif;
			color: #111;
		}

		/* Turn off parallax scrolling for tablets and phones */
		@media only screen and (max-device-width: 1024px) {

			.bgimg-1,
			.bgimg-2,
			.bgimg-3 {
				background-attachment: scroll;
			}
		}

	</style>
</head>
<!--Navbar-->
<nav class=" navbar navbar-expand-lg navbar-dark primary-color">

	<!-- Navbar brand -->
	<div class="">
		<img class="p-1" style="height:55px;" src="/assets/img/spclogo.png">
		<span class="ml-2 text-white">San Pablo City</span>
	</div>

	<!-- Collapse button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
		aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">
					Request Now
					<span class="sr-only">(current)</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="https://www.landbank.com/">
					Pay Online</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					FAQ</a>
			</li>
		</ul>
	</div>
	<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
<!-- NOTE : This head ?  -->
</head>

<body>

	<div class="bgimg-1">
		<div class="caption">
			<h1 class="font-weight-bolder">San Pablo City Online Civil Registry</h1>


			<h4>Scroll Down</h4>
			<br>
			<p><i class="fas fa-arrow-alt-circle-down fa-2x animated bounce infinite"></i></p>
		</div>
	</div>

	<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
		<h3 style="text-align:center;">GET YOUR CERTIFICATE NOW</h3>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
			dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
			ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
			nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
			anim id est laborum.</p>
		<div class="row">
			<div class="fadeIn col-lg-4 col-md-4 pt-3">



				<!-- Card -->
				<div class="card light-green lighten-3 wow fadeInUp">

					<!-- Card image -->
					<div class="view overlay">

						<img class="card-img-top p-5" height="320px" src="/assets/img/birth-cert.png"

							alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body  text-center">

						<!-- Title -->
						<h4 class="card-title">Birth Certificate</h4>
						<!-- Text -->

						<!-- Button -->
						<a href="#" id="bday_request" class="btn light-green lighten-5 btn-block" data-toggle="modal"
							data-target="#birthday">Request Now</a>

					</div>

				</div>



			</div>

			<div class="col-lg-4 col-md-4 pt-3">



				<!-- Card -->
				<div class="card light-blue lighten-3 wow fadeInUp">

					<!-- Card image -->
					<div class="view overlay">

						<img class="card-img-top p-5" height="320px" src="/assets/img/death-cert.png"

							alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body text-center">

						<!-- Title -->
						<h4 class="card-title">Death Certificate</h4>
						<!-- Text -->

						<!-- Button -->
						<a href="#" class="btn light-blue lighten-5 btn-block" data-toggle="modal"
							data-target="#death">Request
							Now</a>

					</div>

				</div>



			</div>

			<div class="col-lg-4 col-md-4 pt-3">



				<!-- Card -->
				<div class="card pink lighten-3 wow fadeInUp">

					<!-- Card image -->
					<div class="view overlay">

						<img class="card-img-top p-5" height="320px" src="/assets/img/marriage-cert.png"

							alt="Card image cap">
						<a href="#!">
							<div class="mask rgba-white-slight"></div>
						</a>
					</div>

					<!-- Card content -->
					<div class="card-body text-center">

						<!-- Title -->
						<h4 class="card-title">Marriage Certificate</h4>
						<!-- Text -->

						<!-- Button -->
						<a href="#" class="btn pink lighten-5 btn-block" data-toggle="modal" data-target="#marr">Request
							Now</a>

					</div>

				</div>



			</div>



		</div>

	</div>

	<div class="bgimg-2">
		<!-- <div class="caption">
      <span class="border" style="background-color:#282E34;font-size:25px;color: #f7f7f7;">

        Birth Certificate

      </span>
      </div> -->
	</div>

	<div style="position:relative;" class="wow fadeIn">
		<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
			<h4>About Us</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex
				ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
				mollit
				anim id est laborum.</p>
		</div>
	</div>

	<div class="bgimg-3">
		<!-- <div class="caption">
          <span class="border" style="background-color:#282E34;font-size:25px;color: #f7f7f7;">

             Death Certificate

            </span>
      </div> -->
	</div>
	<div style="position:relative;" class="wow fadeIn">
		<div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
			<h4>Frequently Asked Questions</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
				dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
				ex
				ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				fugiat
				nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
				mollit
				anim id est laborum.</p>
		</div>
	</div>

	<div class="bgimg-1">
		<!-- <div class="caption">
          <span class="border" style="background-color:#282E34;font-size:25px;color: #f7f7f7;">

              Marriage Certificate

             </span>
      </div> -->
	</div>

	<div style="position:relative; border-block-color: teal;" class="wow fadeIn">

		<footer class="page-footer font-small blue pt-2"></footer>
		<div class="container pt-3">
			<div class="row">
				<div class="col-lg-2 col-md-2 text-center">
					<img src="/assets/img/rep.png" height="120px" class="p-3" alt=""><br>
					<img src="/assets/img/transpa.png" class="p-2" alt="">

				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0">
					<ul class="list-unstyled small">
						<li>
							<p class="font-weight-bold">REPUBLIC OF THE PHILIPPINES</p>
						</li>
						<li>
							<p>All content is in the public domain unless otherwise stated.</p>
						</li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-3 mb-md-0 mb-3">
					<ul class="list-unstyled small">
						<li>
							<p class="font-weight-bold">ABOUT GOVPH</p>
						</li>
						<li>
							<p>Learn more about the Philippine government, its structure, how government works and the
								people behind it.</p>
						</li>
						<li>
							<a href="http://www.gov.ph/">GOV.PH</a>
						</li>
						<li>
							<a href="http://www.gov.ph/data/">Open Data Portal</a>
						</li>
						<li>
							<a href="http://www.officialgazette.gov.ph/">Official Gazette</a>
						</li>
					</ul>
				</div>
				<div class="col-md-2 mb-md-0 mb-3">
					<ul class="list-unstyled small">
						<li>
							<p class="font-weight-bold">GOVERNMENT LINKS</p>
						</li>
						<li>
							<a href="http://president.gov.ph/">Office of the President</a>
						</li>
						<li>
							<a href="http://ovp.gov.ph/">Office of the Vice President</a>
						</li>
						<li>
							<a href="http://www.senate.gov.ph/">Senate of the Philippines</a>
						</li>
						<li>
							<a href="http://www.congress.gov.ph/">House of Representatives</a>
						</li>
						<li>
							<a href="http://sc.judiciary.gov.ph/">Supreme Court</a>
						</li>
						<li>
							<a href="http://ca.judiciary.gov.ph/">Court of Appeals</a>
						</li>
						<li>
							<a href="http://sb.judiciary.gov.ph/">Sandiganbayan</a>
						</li>
					</ul>
				</div>



			</div>
			<hr>
			<div class="row pb-2">
				<div class="col-lg-4 col-sm-12">

				</div>
				<div class="col-lg-4 col-sm-12 text-center">
					<div class="row">
						<img src="/assets/img/spclogo.png" height="50px" class="pr-3" alt="">
						<p class="pt-2">© 2019 San Pablo City Government</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12">

				</div>
			</div>
		</div>




	</div>

	</div>


</body>




<!-- footer -->
<footer>
	<script src="/assets/jquery/jquery-3.4.1.min.js"></script>
	<script src="/assets/popper/popper.min.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/assets/MBD/js/mdb.min.js"></script>
	<script src="/assets/MBD/js/addons/datatables.min.js "></script>
	<script src="/assets/MBD/js/addons/datatables-select.min.js "></script>

	<script src="/assets/js/global.js"></script>
	<script src="/assets/client/js/index.js"></script>

	<script>
		new WOW().init();

	</script>
</footer>

<!-- //////////////////////////////////////Death///////////////////////////////////////////// -->
<div class="modal fade" id="death" tabindex="-1" role="dialog" aria-labelledby="death" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header  bg-info text-white">
				<h5 class="modal-title" id="exampleModalLabel">Death Certificate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="Deathcert" action="">
					<div class="container">

						<b>Purpose of getting Death Certificate</b>
						<select name="death[purpose]" class="browser-default custom-select">
							<option value="3">Claims/Benifits/Loans</option>
						</select>

						<b class="">Name on the death certificate</b>

						<div class="row">
							<div class="col-lg-4">
								<div class="md-form ">
									<input type="text" name="death[fname]" id="death_fname" class="form-control">
									<label for="death_fname">First Name</label>
									<small>If you have a suffix, please put it here. <br>(i.e. Juan II)</small>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="md-form ">
									<input type="text" name="death[mname]" id="death_mname" class="form-control">
									<label for="death_mname">Middle Name</label>
									<small>Leave blank if not applicable</small>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="md-form ">
									<input type="text" name="death[lname]" id="death_lname" class="form-control">
									<label for="death_lname">Last Name</label>
								</div>
							</div>
						</div>

						<b>Details of Death</b>

						<div class="row">
							<div class="col-lg-12 md-form">
								<select name="death[sex]" class="custom-select" id="emp_gender">
									<option selected value=" ">Sex</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								</select>
							</div>

							<div class="col-lg-12 dates">
								<div class="md-form">
									<input type="date" name="death[datedeath]" id="deathdate" class="form-control">
									<label for="deathdate">Date of Death</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="death[countrydeath]" id="placeCountry"
										class="form-control">
									<label for="placeCountry">Country of Death</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="death[provincedeath]" id="placeProvince"
										class="form-control">
									<label for="placeProvince">Province of Death</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="death[citydeath]" id="placeCity" class="form-control">
									<label for="placeCity">City of Death</label>
								</div>
							</div>


						</div>
						<hr>
						<b> Who is requesting for this Death Certificate?
						</b>

						<div class="row">

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="death[request_fname]" id="death_fname"
										class="form-control">
									<label for="father_fname">First Name</label>
								</div>
							</div>


							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="death[request_mname]" id="death_mname"
										class="form-control">
									<label for="father_mname">Middle Initial</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="death[request_lname]" id="death_lname"
										class="form-control">
									<label for="father_lname">Last Name</label>
								</div>
							</div>
							<div class="col-lg-12 md-form p-0">
								<select name="death[requestor]" class="custom-select" id="emp_birthright">
									<option selected value=" ">Requestor</option>
									<option value="Legitimate">Owner of the certificate</option>
									<option value="Illegitimate">Spouse of the certificate Owner</option>
									<option value="Illegitimate">Mother of the certificate Owner</option>
									<option value="Illegitimate">Father of the certificate Owner</option>
									<option value="Illegitimate">Son of the certificate Owner</option>
									<option value="Illegitimate">Daughter of the certificate Owner</option>
									<option value="Illegitimate">Grandparent of the certificate Owner</option>
									<option value="Illegitimate">Grandchild of the certificate Owner</option>
									<option value="Illegitimate">None of the above</option>
								</select>
								<small>The Requesting Party must be of legal age</small>
							</div>

						</div>

						<div class="col-lg-12">
							<div class=" md-form ">
								<input type="text" name="death[request_email]" id="Email" class="form-control">
								<label for="Email">Email Address</label>
							</div>

						</div>

						<div class="col-12 text-center">
							<button type="submit" class="btn btn-success z-depth-0" name="button">Submit</button>
							<button type="reset" class="btn btn-danger z-depth-0" name="button">Clear All</button>
						</div>
				</form>

			</div>

			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>
</div>
</div>





















<!-- //////////////////////////////////////birthday///////////////////////////////////////////// -->
<div class="modal fade" id="birthday" tabindex="-1" role="dialog" aria-labelledby="birthday" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-info text-white">
				<h5 class="modal-title " id="exampleModalLabel">Birth Certificate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="Birthcert" action="">
					<div class="container">

						<b>Purpose of getting Birth Certificate</b>
						<select name="birthday[purpose]" class="browser-default custom-select">
							<option selected>Passport/Travel</option>
							<option value="1">Employment</option>
							<option value="2">School Requirement</option>
							<option value="3">Claims/Benifits/Loans</option>

						</select>


						<div class="row">
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[fname]" id="emp_firstname" class="form-control">
									<label for="emp_firstname">First Name</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[mname]" id="emp_firstname" class="form-control">
									<label for="emp_midname">Middle Name</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[lname]" id="emp_firstname" class="form-control">
									<label for="emp_lastname">Last Name</label>
								</div>
							</div>
						</div>


						<b>Birth Details</b>
						<div class=" md-form">
							<select name="birthday[sex]" class="custom-select" id="emp_gender">
								<option selected value=" ">Sex</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<div class="row">
							<div class="col-lg-12 dates">
								<div class="md-form">
									<input type="date" name="birthday[datebirth]" id="empdate_birthday"
										class="form-control">
									<label for="empdate_birthday">Date of Birthday</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[palcebirth]" id="emp_bplaceCountry"
										class="form-control">
									<label for="emp_bplaceCountry">Birth Place Country</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[provincebirth]" id="emp_bplaceProvince"
										class="form-control">
									<label for="emp_bplaceProvince">Birth Place Province</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[citybirth]" id="emp_bplaceCity"
										class="form-control">
									<label for="emp_bplaceCity">Birth Place City</label>
								</div>
							</div>


							<div class="col-lg-12 md-form">
								<select name="birthday[whatkind]" class="custom-select" id="emp_birthright">
									<option selected value=" ">Birthright</option>
									<option value="Legitimate">Legitimate</option>
									<option value="Illegitimate">Illegitimate</option>
								</select>
							</div>
						</div>

						<b>Father's Name</b>
						<div class="row">
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[father_fname]" id="father_fname"
										class="form-control">
									<label for="father_fname">First Name</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[father_mname]" id="father_mname"
										class="form-control">
									<label for="father_mname">Middle Name</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[father_lname]" id="father_lname"
										class="form-control">
									<label for="father_lname">Last Name</label>
								</div>
							</div>
						</div>
						<b>Mother's Maiden Name</b>
						<div class="row">
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[mother_fname]" id="father_fname"
										class="form-control">
									<label for="father_fname">First Name</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[mother_mname]" id="father_mname"
										class="form-control">
									<label for="father_mname">Middle Name</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="birthday[mother_lname]" id="father_lname"
										class="form-control">
									<label for="father_lname">Last Name</label>
								</div>
							</div>

						</div>
						<hr>

						<b> Who is requesting for this Birth Certificate?
						</b>
						<div class="row">

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="birthday[requestor_fname]" id="bday_fname"
										class="form-control">
									<label for="father_fname">First Name</label>
								</div>
							</div>


							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="birthday[requestor_mname]" id="bday_mname"
										class="form-control">
									<label for="father_mname">Middle Initial</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="birthday[requestor_lname]" id="bday_lname"
										class="form-control">
									<label for="father_lname">Last Name</label>
								</div>
							</div>
							<div class="col-lg-12 md-form p-0">
								<select name="birthday[requestor]" class="custom-select" id="emp_birthright">
									<option selected value=" ">Requestor</option>
									<option value="Legitimate">Owner of the certificate</option>
									<option value="Illegitimate">Spouse of the certificate Owner</option>
									<option value="Illegitimate">Mother of the certificate Owner</option>
									<option value="Illegitimate">Father of the certificate Owner</option>
									<option value="Illegitimate">Son of the certificate Owner</option>
									<option value="Illegitimate">Daughter of the certificate Owner</option>
									<option value="Illegitimate">Grandparent of the certificate Owner</option>
									<option value="Illegitimate">Grandchild of the certificate Owner</option>
									<option value="Illegitimate">None of the above</option>
								</select>
								<small>The Requesting Party must be of legal age</small>
							</div>

						</div>

						<div class="col-lg-12">
							<div class=" md-form ">
								<input type="text" name="birthday[requestor_email]" id="Email" class="form-control">
								<label for="Email">Email Address</label>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-success z-depth-0" name="button">Submit</button>
								<button type="reset" class="btn btn-danger z-depth-0" name="button">Clear All</button>
							</div>

				</form>


			</div>
		</div>
		<!-- <div class="modal-footer">
		<button type="button" class="btn btn-primary">Save changes</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
	</div>
</div>
</div>
</div>






<!-- //////////////////////////////////////marriage///////////////////////////////////////////// -->


<!-- Modal -->
<div class="modal fade" id="marr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header bg-info text-white">
				<h5 class="modal-title" id="exampleModalLabel">Marriage Certificate</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="mmarrigecert">
					<div class="container">

						<b>Purpose of getting Marriage Certificate</b>
						<select name="marr[purpose]" class="browser-default custom-select">
							<option selected>Passport/Travel</option>
							<option value="1">Employment</option>
							<option value="2">School Requirement</option>
							<option value="3">Claims/Benifits/Loans</option>

						</select>


						<b>Name of Husband</b>
						<div class="row">
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[husband_fname]" id="husband_fname"
										class="form-control">
									<label for="husband_fname">First Name</label>
									<small>If you have a suffix, please put it here. (i.e. Juan II)</small>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[husband_mname]" id="husband_mname"
										class="form-control">
									<label for="husband_mname">Middle Name</label>
									<small>Leave blank if not applicable</small>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[husband_lname]" id="husband_lname"
										class="form-control">
									<label for="husband_lname">Last Name</label>
								</div>
							</div>
						</div>

						<b>Maiden Name of Wife</b>

						<div class="row">
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[wife_fname]" id="wife_fname" class="form-control">
									<label for="wife_fname">First Name</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[wife_mname]" id="wife_mname" class="form-control">
									<label for="wife_mname">Middle Name</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[wife_lname]" id="wife_lname" class="form-control">
									<label for="wife_lname">Last Name</label>
								</div>
							</div>
						</div>

						<b class="mb-3">Marriage Details</b>
						<div class="row">

							<div class="col-lg-12 dates">
								<div class="md-form">
									<input type="date" name="marr[datbirthday]" id="empdate_birthday"
										class="form-control">
									<label for="empdate_birthday">Date of Marriage</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[marriagepalce]" id="emp_bplaceCountry"
										class="form-control">
									<label for="emp_bplaceCountry">Marriage Place Country</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[marrprovince]" id="emp_bplaceProvince"
										class="form-control">
									<label for="emp_bplaceProvince">Marriage Place Province</label>
								</div>
							</div>
							<div class="col-lg-4">
								<div class=" md-form ">
									<input type="text" name="marr[marrcity]" id="emp_bplaceCity" class="form-control">
									<label for="emp_bplaceCity">Marriage Place City</label>
								</div>
							</div>

						</div>







						<hr>

						<b> Who is requesting for this Marriage Certificate?
						</b>
						<div class="row">

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="marr[requestor_fname]" id="marris_fname"
										class="form-control">
									<label for="father_fname">First Name</label>
								</div>
							</div>


							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="marr[requestor_mname]" id="marris_mname"
										class="form-control">
									<label for="father_mname">Middle Initial</label>
								</div>
							</div>

							<div class="col-lg-4">
								<div class=" md-form p-0">
									<input type="text" name="marr[requestor_lname]" id="marris_lname"
										class="form-control">
									<label for="father_lname">Last Name</label>
								</div>
							</div>
							<div class="col-lg-12 md-form p-0">
								<select name="marr[requestor]" class="custom-select" id="emp_birthright">
									<option selected value=" ">Requestor</option>
									<option value="Legitimate">Owner of the certificate</option>
									<option value="Illegitimate">Spouse of the certificate Owner</option>
									<option value="Illegitimate">Mother of the certificate Owner</option>
									<option value="Illegitimate">Father of the certificate Owner</option>
									<option value="Illegitimate">Son of the certificate Owner</option>
									<option value="Illegitimate">Daughter of the certificate Owner</option>
									<option value="Illegitimate">Grandparent of the certificate Owner</option>
									<option value="Illegitimate">Grandchild of the certificate Owner</option>
									<option value="Illegitimate">None of the above</option>
								</select>
								<small>The Requesting Party must be of legal age</small>
							</div>

						</div>

						<div class="col-lg-12">
							<div class=" md-form ">
								<input type="text" name="marr[requestor_email]" id="Email" class="form-control">
								<label for="Email">Email Address</label>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-success z-depth-0" name="button">Submit</button>
								<button type="reset" class="btn btn-danger z-depth-0" name="button">Clear All</button>
							</div>
						</div>

				</form>









			</div>

			<!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
		</div>
	</div>
</div>

</html>
