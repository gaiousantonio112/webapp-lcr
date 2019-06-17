<style>
html {
  scroll-behavior: smooth;
}
</style>
<div class="container d-flex" >
	<div class="container-fluid pt-4">
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="birthday" onclick="show('searchbirth')" checked>
			<label class="form-check-label" for="Birthday">Birthday</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="death" onclick="show('searchdeath')">
			<label class="form-check-label" for="Death">Death</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="lcr_type" value="marriage"  onclick="show('searchmerage')">
			<label class="form-check-label" for="Marriage">Marriage</label>
		</div>
	</div>
<div class="container-fluid row">
    <div class="col-4 yearpick">
      <div class="md-form">
      <input type="text" id="year" class="form-control" required>
        <label for="date">Start *</label>
  </div>
</div>
<div class="col-1">
<label class="text-center pt-5">-</label>
</div>
  <div class="col-4 yearpick">
    <div class="md-form">
    <input type="text" id="year" class="form-control" required>
      <label for="date">End *</label>
  </div>
</div>
</div>
</div>

<div class="container " >
	<table id="tb_mainlcr" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">

	  <thead>
	    <tr>
	      <th class="th-sm">ID
	      </th>
	      <th class="th-sm">Reference No.
	      </th>
	      <th class="th-sm" id="whatType">Date of Birth
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
	      <th class="th-sm" id="whatType2">Date of Birth
	      </th>
	      <th class="th-sm">Name
	      </th>
	      <th class="th-sm">Action
	      </th>
	    </tr>
	  </tfoot>
	</table>
</div>

<div class="container p-4" >
	<div class="row">
		<div class="col-3">
			<div class="md-form">
				<input type="text" id="refno" class="form-control" value="---" disabled>
				<label for="refno">Reference No</label>
			</div>
		</div>

		<div class="col-4" >
			<div class="md-form" >
				<input type="text" id="name" class="form-control" value="---" disabled>
				<label id="name_husband" for="name">Name</label>
			</div>
		</div>
		<div class="col-2">
			<div class="dates">
				<div class="md-form">
				<input type="date" id="date" class="form-control" disabled>
					<label for="usr1">Date</label>
			</div>
	</div>	</div>

		<div class=" col-3 text-center p-4">
			<button class="btn btn-lg btn-outline-default m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2" data-toggle="modal" data-target="#viewdocu"><i class="fas fa-search"></i> preview</button>
		</div>
	</div>	</div>


<div class="container" id="birthdeath">
  	<div class="row">
  <div class="col-3" >
    <div class="md-form" hidden>
      <input type="text" class="form-control" value="---">

    </div>
  </div>
   <div class="col-4">
      <div class="md-form" >
        <input type="text" id="name2" class="form-control" value="---" disabled>
        <label id="name_wife" for="name2">Name2</label>
      </div>
    </div>
</div>
</div>


	<div class="container  " >
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

	<div class="col-6 pb-5">
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
						<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2" data-toggle="modal" data-target="#reciept">Submit</button>
						<button class="btn btn-lg btn-outline-warning m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2">Clear All</button>
</div>
</div>



			</div>
		</div>
	</div>
	<div class="pt-5 pb-5">

	</div>

	<div class="modal fade" id="viewdocu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">

		<!-- Change class .modal-sm to change the size of the modal -->
		<div class="modal-dialog modal-lg" role="document">


			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">PDF</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

          <embed src="../../../../assets/pdf/pdftron-sdk.pdf#toolbar=0&zoom=50" type="application/pdf" width="100%" height="60%">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

				</div>
			</div>
		</div>
	</div>


  <div class="modal fade" id="reciept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-50" id="myModalLabel">PDF</h4>


          </button>
        </div>
        <div class="modal-body">
          <!-- <embed src="../../../../assets/pdf/rec.pdf#toolbar=0&zoom=70" type="application/pdf" width="100%" height="60%"> -->

    <iframe width="100%" height="65%" src="<?php echo base_url('pages/viewreciept') ?>#toolbar=0&zoom=60%"></iframe>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#done" >Print</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="done" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">


      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title w-100" id="myModalLabel">Alert!</h4>


          </button>
        </div>
        <div class="modal-body">
          <!-- <embed src="../../../../assets/pdf/rec.pdf#toolbar=0&zoom=70" type="application/pdf" width="100%" height="60%"> -->

  Done Printing?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Yes</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>

        </div>
      </div>
    </div>
  </div>
