<div class="container-fluid pt-4 px-5 "  >

			<div class="z-depth-1 title-Div">
				<span><img class = "title-Divimg" src="<?php echo base_url() .'/assets/svg/add2(ecris).svg' ?>" ></span>
				<h2 class="white-text float-right title-text"> Add </h2>
			</div>

	<div class="container p-4" >
		<div class="card mb-0">
			<!-- <div class="card-header bg-primary ">
			</div> -->
			<div class="card-header py-4 px-5 bg-white">
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" name="radioselect" id="Birthday" value="Birth" onclick="show('birth');" checked>
				<label class="custom-control-label" for="Birthday">Birthday</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" name="radioselect" id="Death" value="Death" onclick="show('death');">
				<label class="custom-control-label" for="Death">Death</label>
			</div>
			<div class="custom-control custom-radio custom-control-inline">
				<input type="radio" class="custom-control-input" name="radioselect" id="Marriage" value="Marriage" onclick="show('merage');">
				<label class="custom-control-label" for="Marriage">Marriage</label>
			</div>
		</div>

			<div class="card-body ">
				<div class="container-fluid p-0">
					<div class="container">

						<!-- <hr class="my-4  py-3"> -->
						<form id="addBirthForm">
							<div class="" id="birth">
								<div class="container py-0 px-0">
									<div class="md-form">
										<input type="number" name="bday[refno]" id="form1" class="form-control ">
										<label for="form1">REFERENCE NUMBER</label>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="bday[first_name]" id="form2" class="form-control">
												<label for="form2">First Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="bday[middle_name]" id="form3" class="form-control">
												<label for="form3">Middle Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="bday[last_name]" id="Last" class="form-control">
												<label for="Last">Last Name</label>
											</div>
										</div>
										<div class="col-2">
											<div class="md-form ">
												<input type="number" name="bday[annex]" id="Annex" class="form-control">
												<label for="Annex">Annex</label>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="bday[encoder]" class="bday_encoder">
								<div class="container">
									<div class="">
										<div class="dates">
											<div class="md-form">
												<input type="date" name="bday[bday_date]" id="usr1" class="form-control">
												<label>Date of Birth</label>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="text-center py-3  card-footer submit-btn" id="btn-Birth">
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
				<button class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" type="reset" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;" alt=""> Clear</button>
				</div>
						</form>



						<!-- DEATH -->
						<form id="addDeathForm">
							<div class="" id="death">
								<div class="container">
									<div class="md-form">
										<input type="number" name="death[refno]" id="REFERENCE" class="form-control">
										<label for="REFERENCE">REFERENCE NUMBER</label>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="death[first_name]" id="First" class="form-control">
												<label for="First">First Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="death[middle_name]" id="Middle" class="form-control">
												<label for="Middle">Middle Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="death[last_name]" id="Last1" class="form-control">
												<label for="Last1">Last Name</label>
											</div>
										</div>
										<div class="col-2">
											<div class="md-form ">
												<input type="number" name="death[annex]" id="Ann2ex" class="form-control">
												<label for="Ann2ex">Annex</label>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="death[encoder]" class="bday_encoder">
								<div class="container">
									<div class="">
										<div class="dates">
											<div class="md-form">
												<input type="date" name="death[death_date]" id="usr1" class="form-control">
												<label>Date of Death</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="text-center py-3 card-footer submit-btn" id="btn-Death">
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
				<button class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" type="reset" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;" alt=""> Clear</button>
				</div>

						</form>

						<form id="addMarrForm">
							<div class="" id="merage">
								<div class="container">
									<div class="md-form">
										<input type="number" name="marr[refno]" id="NUMBER" class="form-control">
										<label for="NUMBER">REFERENCE NUMBER</label>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[First_name_h]" id="Husband" class="form-control">
												<label for="Husband">Firstname of Husband</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[Middle_name_h]" id="m" class="form-control">
												<label for="m">Middle Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[Last_name_h]" id="lname" class="form-control">
												<label for="lname">Last Name</label>
											</div>
										</div>
										<div class="col-2">
											<div class="md-form ">
												<input type="number" name="marr[annexh]" id="Annesx" class="form-control">
												<label for="Annesx">Annex</label>
											</div>
										</div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[First_name_w]" id="Wife" class="form-control">
												<label for="Wife">Firstname of Wife</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[Middle_name_w]" id="Middlew" class="form-control">
												<label for="Middlew">Middle Name</label>
											</div>
										</div>
										<div class="col-sm">
											<div class="md-form ">
												<input type="text" name="marr[Last_name_w]" id="Lastw" class="form-control">
												<label for="Lastw">Last Name</label>
											</div>
										</div>
										<div class="col-2">
											<div class="md-form ">
												<input type="number" name="marr[annexw]" id="Annexw" class="form-control">
												<label for="Annexw">Annex</label>
											</div>
										</div>
									</div>
								</div>
								<input type="hidden" name="marr[encoder]" class="bday_encoder">
								<div class="container">
									<div class="">
										<div class="dates">
											<div class="md-form">
												<input type="date" name="marr[date_of_marriage]" id="usr1" class="form-control">
												<label>Date of Marriage</label>
											</div>
										</div>
									</div>


								</div>

							</div>

					</div>

					
			<div class="text-center py-3 card-footer submit-btn" id="btn-Marriage" >
				<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
				<button class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" type="reset" id="button-addon2">
					<img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;" alt=""> Clear</button>

		</div>
					</form>
				</div>
			</div>




	


		</div>
			<div class="m-5"></div>
	</div>
</div>
