<style>
html {
  scroll-behavior: smooth;
}
</style>

<div class="container-fluid pt-4 px-5">
  	<div class=" container text-right">
<h3 class="font-weight-bold"><b><img src="<?php echo base_url() .'/assets/svg/search and payment (eCRIS).svg' ?>" height="65px" alt=""> Search and Payment</h3>
</b>
</div>
<div class="container d-flex" >
	<div class="container-fluid pt-4">

    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input"id="Birthday" name="lcr_type" value="birthday" onclick="show('searchbirth')" checked >
      <label class="custom-control-label" for="Birthday">Birthday</label>
    </div>


    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="Death" name="lcr_type" value="death" onclick="show('searchdeath')">
      <label class="custom-control-label" for="Death">Death</label>
    </div>


    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" class="custom-control-input" id="Marriage" name="lcr_type" value="marriage"  onclick="show('searchmerage')">
      <label class="custom-control-label" for="Marriage">Marriage</label>
    </div>    </div>


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
	  <!-- <tfoot>
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
	  </tfoot> -->
	</table>
</div>

<div class="container p-4" id="inputpage" >

  	<div class="card  mb-3" >
  	  <div class="card-header bg-primary"></div>
  	  <div class="card-body">
	<div class="row">
		<div class="col-3">
			<div class="md-form">
				<input type="text" id="refno" class="form-control" value="---" readonly>
				<label for="refno">Reference No</label>
			</div>
		</div>

		<div class="col-4" >
			<div class="md-form" >
				<input type="text" id="name" class="form-control" value="---" readonly>
				<label id="name_husband" for="name">Name</label>
			</div>
		</div>
		<div class="col-2">
			<div class="dates">
				<div class="md-form">
				<input type="date" id="date" class="form-control" readonly>
					<label for="usr1">Date</label>
			</div>
	</div>	</div>

		<div class=" col-3 text-center p-4">
			<button id="previewBtn" class="btn btn-lg btn-outline-default m-0 px-3 py-2 z-depth-0 waves-effect" type="button" id="button-addon2" data-toggle="modal" data-target="#viewdocu"><img src="<?php echo base_url() . '/assets/svg/preview-button-ecris.svg' ?>" style="height: 20px;"alt=""> Preview</button>
		</div>
	</div>
</div>


<div class="container" id="birthdeath">
  	<div class="row">
        <div class="col-3" >
          <div class="md-form" hidden>
            <input type="text" class="form-control" value="---">

          </div>
        </div>
       <div class="col-4">
          <div class="md-form" >
            <input type="text" id="name2" class="form-control" value="---" readonly>
            <label id="name_wife" for="name2">Name2</label>
          </div>
        </div>
      </div>
</div>

<form id="printReciept">
	<div class="container">
      <div class="row">
				<div class="col-6">
									<div class="">
										<div class="md-form">
                      <input type="hidden" name="reciept[data_id]" id="data_id">
                      <input type="hidden" name="reciept[type]" id="type_receipt">
                      <input type="hidden" name="reciept[cs_encoder]" id="cs_encoder">
											<input type="number" id="orno" name="reciept[orno]" class="form-control">
											<label for="orno">OR No.</label>
										</div>
									</div>
									<div class="">
										<div class="md-form">
											<input type="text" id="payor" name="reciept[payor]" class="form-control">
											<label for="payor">Payor</label>
										</div>
									</div>


                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="Default" name="reciept[print_type]" id="default" onclick="show('default')" value="default" checked>
                    <label class="custom-control-label" for="Default">Default</label>
                  </div>


                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="Specific" name="reciept[print_type]" id="specific"  onclick="show('specific')" value="specific">
                    <label class="custom-control-label" for="Specific">Specific</label>
                  </div>


                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="Range" name="reciept[print_type]" id="range"  onclick="show('range')" value="range">
                    <label class="custom-control-label" for="Range">Range</label>
                  </div>

<!--
        					<div class="form-check form-check-inline">
        						<input class="form-check-input" type="radio" name="printOption" id="default" onclick="show('default')" value="default" checked>
        						<label class="form-check-label" for="default">Default</label>
        					</div>
        					<div class="form-check form-check-inline">
        						<input class="form-check-input" type="radio" name="printOption" id="specific"  onclick="show('specific')" value="specific">
        						<label class="form-check-label" for="specific">Specific</label>
        					</div>
        					<div class="form-check form-check-inline">
        						<input class="form-check-input" type="radio" name="printOption" id="range"  onclick="show('range')" value="range">
        						<label class="form-check-label" for="range">Range</label>
        					</div> -->
      						<div class="col">
      							<div class="md-form">
      								<input type="text" id="pageno" value = "1-2" name="reciept[pageno]" class="form-control" readonly>
      								<label for="pageno">Page No.</label>
      							</div>
      						</div>
      						<div class="col">
      							<div class="md-form">
      								<input type="number" id="nocopy" name="reciept[nocopy]" class="form-control" value="1">
      								<label for="nocopy">No Copies.</label>
      							</div>
      						</div>
					</div>

        	<div class="col-6 pb-5">
        		<div class="">
        			<div class="md-form">
        				<input type="number" id="totalpay" name="reciept[totalpay]" class="form-control" readonly value="50">
        				<label for="totalpay">TOTAL PAYMENT.</label>
        			</div>
        			<div class="">
        				<div class="md-form">
        					<input type="number" id="cashten" name="reciept[cashten]" class="form-control" >
        					<label for="cashten">Cash Tendered.</label>
        				</div>
        				<div class="">
        					<div class="md-form">
        						<input type="number" id="totalam" name="reciept[totalam]" class="form-control" readonly value="0">
        						<label for="totalam">Total Amount Recieved</label>
        					</div>
        					<div class="">
        						<div class="md-form">
        							<input type="number" id="changed" name="reciept[changed]" class="form-control" readonly value="0">
        							<label for="changed">Changed</label>
        						</div>
                  </div>
                        </div>        </div>        </div>        </div>        </div>
                  <div class="container col-12">
                    <div class="md-form">
                      <input type="text" id="remark" name="reciept[remark]" class="form-control" >
                      <label for="remark">Remarks</label>
                    </div>
                  </div>

        						<div class="text-center">
          						<button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect" type="submit" id="button-addon2" data-toggle="modal" data-target="#reciept" ><img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;"alt=""> Submit</button>
          						<button class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" type="reset" id="button-addon"><img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;"alt=""> Clear</button>
                    </div>
                  </div>
        			</div>
        		</div>
        	</div>
        </div>
      	<div class="pt-5 pb-5">
      	</div>
      </div>
    </div>
</form>


	<div class="modal fade" id="viewdocu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">

		<!-- Change class .modal-sm to change the size of the modal -->
		<div class="modal-dialog modal-lg" role="document">


			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title w-100" id="myModalLabel">Live View</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
          <iframe width="100%" id="viewpdf" height="65%" src="#funk"></iframe>
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
          <iframe width="100%" id="recieptframe" height="65%" src="#funk"></iframe>
          <iframe width="100%" id="recieptframe_white" height="65%" src="#funk" hidden></iframe>
        </div>
        <div class="modal-footer">
            <button id="print_btn" type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#done"   >Print</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


        </div>
      </div>
    </div>
  </div>



  <div class="modal fade" id="done" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-sm" role="document">


      <form id="addHistoryForm">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Alert!</h4>
          </div>
          <div class="modal-body">
              Done Printing?
          </div>
          <div class="modal-footer">
              <input type="hidden" name="history[ref_num]" id="ref_num" >
              <input type="hidden" name="history[or_num]" id="or_num" >
              <input type="hidden" name="history[req_name]" id="req_name" >
              <input type="hidden" name="history[name]" id="name_history" >
              <input type="hidden" name="history[type]" id="type" >
              <input type="hidden" name="history[date]" id="dt_history" >
              <input type="hidden" name="history[page]" id="page" >
              <input type="hidden" name="history[no_copy]" id="no_copy" >
              <input type="hidden" name="history[verify_by]" id="verify_by" >



              <input type="hidden" name="history[remarks]" id="remarks" >
              <input type="hidden" name="history[print]" id="print" >
              <input type="hidden" name="history[cs_encoder]" id="cs_encoder1" >
              <input type="hidden" name="history[printed_by]" id="printed_by" >
              <input type="hidden" name="history[or_amount]" id="or_amount" >
              <input type="hidden" name="history[wife_name]" id="wife_name" >

              <button type="submit" class="btn btn-primary btn-sm">Yes</button>
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
          </div>
        </div>
      </form>
    </div>
  </div>








  <!-- Central Modal Small -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Update</h4>

      </div>
      <div class="modal-body">




<div id="birthdaymodal">
  <form id="updateBirthForm">

  		<div class="container">
  			<div class="md-form">
  				<input type="number" name="updatebday[refno]" id="form1" class="form-control ">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[first_name]" id="form2" class="form-control">
  						<label for="form2">First Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[middle_name]" id="form3" class="form-control">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[last_name]" id="Last" class="form-control">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="number" name="updatebday[annex]" id="Annex" class="form-control">
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatebday[encoder]" class="bday_encoder">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="date" name="updatebday[bday_date]" id="usr1" class="form-control">
  						<label >Date of Birth</label>
  				</div>
  		</div>



  		</div>
  	</div>
    <div class="modal-footer">

        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
  </form>
    </div>






<div id="deathmodal">

  <!-- DEATH -->
  <form id="updateDeathForm">

  		<div class="container">
  			<div class="md-form">
  				<input type="number" name="updatedeath[refno]" id="form1" class="form-control">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[first_name]" id="form2" class="form-control">
  						<label for="form2">First Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[middle_name]" id="form3" class="form-control">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[last_name]" id="Last" class="form-control">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="number" name="updatedeath[annex]" id="Annex" class="form-control">
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatedeath[encoder]" class="bday_encoder">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="date" name="updatedeath[death_date]" id="usr1" class="form-control">
  						<label >Date of Death</label>
  				</div>
  		</div>

  			</div>


  		</div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
      </form>
  	</div>





<div id="marriagemodal">


  <form id="updateMarrForm">

  		<div class="container">
  			<div class="md-form">
  				<input type="number" name="updatemarr[refno]" id="form1" class="form-control">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[First_name_h]" id="form2" class="form-control">
  						<label for="form2">Firstname of Husband</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Middle_name_h]" id="form3" class="form-control">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Last_name_h]" id="Last" class="form-control">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="number" name="updatemarr[annexh]" id="Annex" class="form-control">
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[First_name_w]" id="form2" class="form-control">
  						<label for="form2">Firstname of Wife</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Middle_name_w]" id="form3" class="form-control">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Last_name_w]" id="Last" class="form-control">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="number" name="updatemarr[annexw]" id="Annex" class="form-control">
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatemarr[encoder]" class="bday_encoder">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="date" name="updatemarr[date_of_marriage]" id="usr1" class="form-control">
  						<label >Date of Marriage</label>
  				</div>
  			</div>

  			</div>


  		</div>
      <div class="modal-footer">

        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>


  	</form>
  </div>
</div>  </div>  </div>
<!-- Central Modal Small -->
