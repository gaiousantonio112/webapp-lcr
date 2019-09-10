<div class="container-fluid pt-4 px-5">

	<div class="z-depth-1 title-Div">
		<span><img class="title-Divimg" src="<?php echo base_url() .'/assets/svg/usermanager2(ecris).svg' ?>"></span>
		<h2 class="white-text float-right title-text">Cashier Page</h2>
	</div>


	<div class="container pt-4">
		<div class="card">
			<div class="card-body">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">

							<button class="btn btn-lg btn-info">
								GENERATE CASH DAILY CASH REPORT
							</button>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>


	<div class="container pt-4 pb-5">
		<div class="card">
			<div class="card-body">
				<div class="container">
					<div class="row">





						<div class="col-lg-8 text-center">
							<table id="ortable"
								class="table  table-sm table-striped table-bordered" cellspacing="0"
								width="100%">
								<thead>
									<tr>
										<th class="th-sm">ID
										</th>
										<th class="th-sm">OR FROM
										</th>
										<th class="th-sm">OR TO
										</th>
										<th class="th-sm">OWNER
										</th>
										<th class="th-sm">DATE ADDED
										</th>
										
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>


				
							<div class="col-lg-4">
							<form id="saveor">
								<div class="card">
									<div class="card-header bg-primary TEXT-WHITE">
										OFFICIAL RECEIPT
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-12">
												<div class="md-form">
													<input type="number" min="0" required name="saveor[from]" id="FROM"
														class="form-control">
													<label for="FROM">OR FROM</label>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="md-form">
													<input type="number" min="0" required name="saveor[to]" id="TO"
														class="form-control">
													<label for="TO">OR TO</label>
												</div>
											</div>
											<input type="text" id="cashid" name="or[user]" value= "<?php echo $this->session->userdata('user_id') ?>" hidden>
										
											<div class="col-12 text-center">
												<button class="btn btn-sm btn-success">
													Save
													
												</button>

												<button type="reset" class="btn btn-sm btn-danger">
													Clear All
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
