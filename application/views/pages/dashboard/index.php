
<div class="container-fluid container pt-2 px-5 z-index-1 ">

	<div class=" container text-right pt-3" >
					<div class="teal lighten-1 z-depth-1 " style="height:52px;border-radius:3px">
						<span><img src="<?php echo base_url() .'/assets/svg/dashboard2(samp).svg' ?>" height="40px" alt="" style="float:right" class="px-3 mt-2"></span>
						<p style="color:white; float:right; font-size: 30px;" class="pt-2">Dashboard</p>
					</div>
	</div>

	<div class="container py-5 pt-4">
		<div class="row">

			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
				<div class="card mt-4">
					<div class="card-body card-dashboard">
						<div class = "container ">
						<div class = "row">
						<div class = "col-5 p-0">
							<div class="card card-icon warning-color-dark">
										<img src="<?php echo base_url() .'/assets/svg/service provided2(samp).svg' ?>" height="45px" alt="">
							</div>
						</div>
							<div class = "col-7 ">
								<div class="text-count " id="service_provided">Loading...</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="text-dashboard ">
						Service Provided</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
				<div class="card mt-4">
					<div class="card-body card-dashboard">
						<div class = "container">
						<div class = "row">
						<div class = "col-5 p-0">
							<div class="card card-icon info-color-dark">
										<img src="<?php echo base_url() .'/assets/svg/earnings 2(samp).svg' ?>" height="45px" alt="">
							</div>
						</div>
							<div class = "col-7 ">
								<div class="text-count " id="total_earnings">Loading...</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="text-dashboard ">
					Total Earnings</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
				<div class="card mt-4">
					<div class="card-body card-dashboard">
						<div class = "container">
						<div class = "row">
						<div class = "col-5 p-0">
							<div class="card card-icon cyan">
										<img src="<?php echo base_url() .'/assets/svg/task2(samp).svg' ?>" height="45px" alt="">
							</div>
						</div>
							<div class = "col-7 ">
								<div class="text-count " id="task_text_percent">Loading...</div>
							</div>
						</div>
					</div>

					<div class="progress progress-sm " style="height:5px">
						<div class="progress-bar bg-info" role="progressbar" id="task_bar_percent" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<div class="text-dashboard mt-2">
					Tasks</div>
					</div>
				</div>
			</div>


			<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
				<div class="card mt-4">
					<div class="card-body card-dashboard">
						<div class = "container">
						<div class = "row">
						<div class = "col-5 p-0">
							<div class="card card-icon default-color">
										<img src="<?php echo base_url() .'/assets/svg/pending request2(samp).svg' ?>" height="45px" alt="">
							</div>
						</div>
							<div class = "col-7 ">
								<div class="text-count " id="pending_request">Loading...</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="text-dashboard ">
					Pending Requests</div>
					</div>
				</div>
			</div>

	</div>
</div>

<div class = "container">
	<div class = "row">

	<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 ">
		<div class="card mt-4">
			<div class="card-body card-dashboard">
				<div class = "container">
				<div class = "row">
				<div class = "col-5 p-0">
					<div class="card card-icon green">
								<img src="<?php echo base_url() .'/assets/svg/pending request2(samp).svg' ?>" height="45px" alt="">
					</div>
				</div>
					<div class = "col-7 ">
						<div class="text-count " id="pending_request">Loading...</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="text-dashboard ">
			Online Request</div>
			</div>
		</div>
	</div>

</div>
</div>


	<div class="container pb-5 mt-5">
		<div class ="">
			<!-- < for="exampleFormControlSelect1"> -->
			<h5  class="font-weight-bold text-spacing-5">Select Year</h5>
		</div>
		<div class="card mb-5">
			<div class="card-body">
				<div class="col-lg-4 col-sm-12 col-xs-12 text-left">
					<select class="form-control " id="year_select">
					</select>

				</div>
				<div class="row " id="status">
					<div class="col-12 text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> </div>
				</div>
				<div class="pt-2 col-12 " >
					<canvas id="lineChart" style="height:5px"></canvas>
				</div>
			</div>
			</div>
		</div>
	</div>
