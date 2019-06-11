<div class="container d-flex">
	<div class="container-fluid p-4">
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="birthday" checked>
			<label class="form-check-label" for="Birthday">Birthday</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="death">
			<label class="form-check-label" for="Death">Death</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="marriage">
			<label class="form-check-label" for="Marriage">Marriage</label>
		</div>
	</div>
</div>

<div class="container ">
	<table id="tb_mainlcr" class="table table-striped table-bordered" cellspacing="0" width="100%">

	  <thead>
	    <tr>
	      <th class="th-sm">ID
	      </th>
	      <th class="th-sm">Reference No.
	      </th>
	      <th class="th-sm" class="whatType">Date of Birth
	      </th>
	      <th class="th-sm">Name
	      </th>
	      <th class="th-sm">Action
	      </th>
	    </tr>
	  </thead>
	  <tbody>

	  </tbody>
	  <tfoot>
	    <tr>
				<th class="th-sm">ID
	      </th>
	      <th class="th-sm">Reference No.
	      </th>
	      <th class="th-sm" class="whatType">Date of Birth
	      </th>
	      <th class="th-sm">Name
	      </th>
	      <th class="th-sm">Action
	      </th>
	    </tr>
	  </tfoot>
	</table>
</div>

<div class="container-fluid p-4">
	<div class="row">
		<div class="col-3">
			<div class="md-form">
				<input type="text" id="refno" class="form-control">
				<label for="refno">Reference No</label>
			</div>
		</div>
		<div class="col-3">
			<div class="md-form">
				<input type="text" id="name" class="form-control">
				<label for="name">Name</label>
			</div>
		</div>
		<div class="col-3">
			<div class="dates">
				<div class="md-form">
				<input type="date" id="usr1" class="form-control">
					<label for="usr1">Date</label>
			</div>
	</div>	</div>

		<div class=" col-3 text-center p-4">
			<button class="btn btn-lg btn-outline-default m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2"><i class="fas fa-search"></i> preview</button>
		</div>
	</div>



	<div class="container-fluid">
<div class="row">
				<div class="col-6">

									<div class="">
										<div class="md-form">
											<input type="number" id="orno" class="form-control">
											<label for="orno">OR No.</label>
										</div>
									</div>
									<div class="">
										<div class="md-form">
											<input type="number" id="payor" class="form-control">
											<label for="payor">Payor</label>
										</div>
									</div>

					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="default" value="option1" checked>
						<label class="form-check-label" for="default">Default</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="specific" value="option2">
						<label class="form-check-label" for="specific">Specific</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="range" value="option3">
						<label class="form-check-label" for="range">Range</label>
					</div>

						<div class="col">
							<div class="md-form">
								<input type="text" id="pageno" class="form-control">
								<label for="pageno">Page No.</label>
							</div>
						</div>
						<div class="col">
							<div class="md-form">
								<input type="number" id="nocopy" class="form-control">
								<label for="nocopy">No Copies.</label>
							</div>
						</div>
					</div>

	<div class="col-6">
		<div class="">
			<div class="md-form">
				<input type="number" id="totalpay" class="form-control">
				<label for="totalpay">TOTAL PAYMENT.</label>
			</div>
			<div class="">
				<div class="md-form">
					<input type="number" id="cashten" class="form-control">
					<label for="cashten">Cash Tendered.</label>
				</div>
				<div class="">
					<div class="md-form">
						<input type="number" id="totalam" class="form-control">
						<label for="totalam">Total Amount Recieved</label>
					</div>
					<div class="">
						<div class="md-form">
							<input type="number" id="changed" class="form-control">
							<label for="changed">Changed</label>
						</div>
						<div class="text-center">
						<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Submit</button>
						<button class="btn btn-lg btn-outline-warning m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Clear All</button>
</div>



	</div>



			</div>
		</div>
	</div>
