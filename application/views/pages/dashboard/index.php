
<body class="grey lighten-4">
<div class="container-fluid pt-2 px-5 z-index-1"  >

	<div class=" container text-right pt-3" >
					<div class="teal lighten-1 z-depth-1 " style="height:52px;border-radius:3px">
						<span><img src="<?php echo base_url() .'/assets/svg/dashboard2(samp).svg' ?>" height="40px" alt="" style="float:right" class="px-3 mt-2"></span>
						<p style="color:white; float:right; font-size: 30px;" class="pt-2">Dashboard</p>
					</div>
	</div>

			<!-- <hr class=""> -->
			<div class="container py-5">
				<div class="row">
					<div class="col-lg-3 col-sm-12 pt-3 text-center">
						<div class="card py-2">
							<div class="card-body">
									<div class="col auto">
										<div class="">
											<img src="<?php echo base_url() .'/assets/svg/service provided(samp).svg' ?>" height="50px" alt="">
										</div>
										<hr class="">
										<div class="text-xs font-weight-bold blue-text text-uppercase mb-1 letter-spacing-5em">Service Provided</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800" id="service_provided">Loading...</div>
									</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-lg-3 col-sm-12 pt-3 mb-2 text-center">
						<div class="card py-2 ">
							<div class="card-body">
								<div class="row">
									<div class="col auto">
										<div class="">
											<img src="<?php echo base_url() .'/assets/svg/earnings (samp).svg' ?>" height="50px" alt="">
										</div>
										<hr class="">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Earnings</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_earnings">Loading...</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-lg-3 col-sm-12 pt-3   mb-0 text-center">
						<div class="card pt-2 pb-0">
							<div class="card-body ">
								<div class="row">
									<div class="col auto">
										<div class="">
											<img src="<?php echo base_url() .'/assets/svg/task(samp).svg' ?>" height="50px" alt="">
										</div>
										<hr class="">
										<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800" id="task_text_percent">Loading...</div>

										<div class="progress progress-sm " style="height:8px">
											<div class="progress-bar bg-info" role="progressbar" id="task_bar_percent" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-12 pt-3  mb-2 text-center">
						<div class="card py-2">
							<div class="card-body ">
								<div class="row">
									<div class="col auto">
										<div class="	">
											<img src="<?php echo base_url() .'/assets/svg/pending request(samp).svg' ?>" height="50px" alt="">
										</div>
										<hr class="">
										<div class="col mr-2">
											<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
											<div class="h5 mb-0 font-weight-bold text-gray-800" id="pending_request">Loading...</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>


			<div class="container mb-5">
				<div class ="">
					<!-- < for="exampleFormControlSelect1"> -->
					<h5  class="font-weight-bold text-spacing-5">Select Year</h5>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="col-4 text-left">
							<select class="form-control" id="year_select">
							</select>

						</div>
						<div class="row" id="status">
							<div class="col-12 text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> </div>
						</div>
						<div class="pt-2 col-12" >
							<canvas id="lineChart" style="height:5px"></canvas>
						</div>
					</div>
					</div>
				</div>

			</div>
