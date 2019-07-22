
<div class="container-fluid py-2 grey lighten-4"  >

	<div class=" container text-right pt-3" >
					<div class="teal lighten-1 z-depth-1 " style="height:52px;border-radius:3px">
						<span><img src="<?php echo base_url() .'/assets/svg/dashboard2(samp).svg' ?>" height="40px" alt="" style="float:right" class="px-3 mt-2"></span>
						<p style="color:white; float:right; font-size: 30px;" class="pt-2">Dashboard</p>
					</div>
	</div>

			<!-- <hr class=""> -->
			<div class="container py-5">
				<div class="row">
					<div class="col-3 mb-2 text-center">
						<div class="card py-2">
							<div class="card-body">

									<div class="col auto">
										<div class="mb-2">
											<img src="<?php echo base_url() .'/assets/svg/service provided(ecris).svg' ?>" height="40px" alt="">
										</div>
										<hr class="">
										<div class="text-xs font-weight-bold blue-text text-uppercase mb-1 letter-spacing-5em">Service Provided</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800" id="service_provided">Loading...</div>
									</div>

							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-3 mb-2 text-center">
						<div class="card py-2 ">
							<div class="card-body">
								<div class="row">
									<div class="col auto">
										<div class="mb-2">
											<img src="<?php echo base_url() .'/assets/svg/earnings (ecris).svg' ?>" height="40px" alt="">
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
					<div class="col-3  mb-0 text-center">
						<div class="card pt-2 pb-0">
							<div class="card-body ">
								<div class="row">
									<div class="col auto">
										<div class="mb-2">
											<img src="<?php echo base_url() .'/assets/svg/task(ecris).svg' ?>" height="40px" alt="">
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

					<div class="col-3 mb-2 text-center">
						<div class="card py-2">
							<div class="card-body ">
								<div class="row">
									<div class="col auto">
										<div class="mb-2">
											<img src="<?php echo base_url() .'/assets/svg/pending request(ecris).svg' ?>" height="40px" alt="">
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

			<div class="container pt-0">
				<div class="card">
					<div class="card-body">
						<div class="col-4 text-left">
							<label for="exampleFormControlSelect1">Select Year</label>
							<select class="form-control" id="year_select">
							</select>
						</div>
						<div class=" pt-2 col-12" style="margin-top: -15">
							<canvas id="lineChart"></canvas>
						</div>
					</div>
				</div>
			</div>



<div class="p-5"></div>
