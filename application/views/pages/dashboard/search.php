<style>
html {
  scroll-behavior: smooth;
}
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: visible;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.3);
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 1500ms infinite linear;
  -moz-animation: spinner 1500ms infinite linear;
  -ms-animation: spinner 1500ms infinite linear;
  -o-animation: spinner 1500ms infinite linear;
  animation: spinner 1500ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
  box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>

<div id="loadit">
  <div class="container-fluid pt-4 px-3 grey lighten-5">

    	<div class=" container text-right">
  <!-- <div class="loading">Loading&#8230;</div> -->

      <div class ="teal lighten-1 z-depth-1" style="height:52px">
          <span><img src="<?php echo base_url() .'/assets/svg/search and payment (eCRIS)2.svg' ?>" height="65px" alt="" style="float:right" class="px-1 py-1"></span>
          <p style = "color:white; float:right; padding-right: 15px;font-size: 30px;" class="pt-2" >Search and Payment</p>
      </div>

  </div>
  <div class="container d-flex" >
  	<div class="container-fluid pt-4">

  <div class = "card mb-3 ">
    <div class = "card-header white">
      <div class="container m-0" style="" >

      <div class="row">

    <div class="col-6 mt-3">
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
      </div>
    </div>

    <div class="col-6 m-0 py-0" style="">
      <div class="md-form custom-control-inline m-0">
      <input type="text" id="year" class="form-control" required>
        <label for="year">Start *</label>
      </div>

      <div class="md-form custom-control-inline mt-1 ">
        <label class="text-center ">-</label>
      </div>

      <div class="md-form custom-control-inline m-0">
        <input type="text" id="year" class="form-control" required>
        <label for="year">End *</label>
      </div>
    </div>

    </div>
</div>
</div>
</div>

<div class="card " >
    <div class="card-body">
      <div class="row">
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

          </div>
        </div>
      </div>

  <div class="container py-4 px-0" id="inputpage" >

  	<div class="card  " >
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
</div>



	<div class="modal fade" id="viewdocu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">

		<!-- Change class .modal-sm to change the size of the modal -->
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
        <div class="modal-header p-2" style="background-color: tomato">
          <span><img src="<?php echo base_url() .'/assets/svg/live view2.svg' ?>" height="45px" alt="" style="float:right" class="px-2 py-1"></span>
          <h4 class="modal-title white-text w-100 font-weight-bold py-1" id="myModalLabel"> Live View</h4>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

				</div>
				<div class="modal-body p-0 m-0">
          <iframe width="100%" id="viewpdf"  height="65%" src="#funk" allowfullscreen></iframe>
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
        <div class="modal-body p-0 m-0">
          <!-- <embed src="../../../../assets/pdf/rec.pdf#toolbar=0&zoom=70" type="application/pdf" width="100%" height="60%"> -->
          <iframe width="100%" id="recieptframe" height="65%" src="#funk"></iframe>
          <!-- <iframe width="100%" id="recieptframe_white" height="65%" src="#funk" hidden></iframe> -->
        </div>
        <div class="modal-footer">
            <button id="print_btn" type="button" class="btn btn-primary btn-sm"  >Print</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>


        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="white_reciept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <!-- <embed src="../../../../assets/pdf/rec.pdf#toolbar=0&zoom=70" type="application/pdf" width="100%" height="60%"> -->
          <!-- <iframe width="100%" id="recieptframe" height="65%" src="#funk"></iframe> -->
          <iframe width="100%" id="recieptframe_white" height="65%" src="#funk" hidden></iframe>
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
      <div class="modal-header p-2" style="background-color: tomato">
        <span><img src=" <?php echo base_url().'/assets/svg/updatefinal.svg  '?>" height="45px" alt="" style="float:right" class="px-2 py-1"></span>
        <h4 class="modal-title white-text w-100 font-weight-bold py-1" id="myModalLabel">Update</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


<div class="modal-body">
<div id="birthdaymodal">
  <form id="updateBirthForm">

  		<div class="container">
  			<div class="md-form">
          <input type="hidden" name="updatebday[id]" id="updatebday_id" value="">
  				<input type="text" name="updatebday[refno]" id="updatebday_refno" class="form-control" value="---">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[first_name]" id="updatebday_first_name" class="form-control" value="---">
  						<label for="form2">First Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[middle_name]" id="updatebday_middle_name" class="form-control" value="---">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatebday[last_name]" id="updatebday_last_name" class="form-control" value="---">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="text" name="updatebday[annex]" id="updatebday_annex" class="form-control" >
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatebday[encoder]" id="updatebday_encoder" class="bday_encoder"  value="---">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="text" name="updatebday[bday_date]" id="updatebday_bday_dt" class="form-control" value="---">
  						<label >Date of Birth</label>
  				</div>
  		</div>
  		</div>
  	</div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
    </div>
  </form>
</div>

<div id="deathmodal">
  <form id="updateDeathForm">
  		<div class="container">
  			<div class="md-form">
          <input type="hidden" name="updatedeath[id]" id="updatedeath_id" value="">
  				<input type="text" name="updatedeath[refno]" id="updatedeath_refno" class="form-control" value="---">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[first_name]" id="updatedeath_first_name" class="form-control" value="---">
  						<label for="form2">First Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[middle_name]" id="updatedeath_middle_name" class="form-control" value="---">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[last_name]" id="updatedeath_last_name" class="form-control" value="---">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="text" name="updatedeath[annex]" id="updatedeath_annex" class="form-control" >
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatedeath[encoder]" id="updatedeath_encoder" class="bday_encoder" value="---">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="text" name="updatedeath[death_date]" id="updatedeath_death_date" class="form-control" value="---">
  						<label >Date of Death</label>
  				</div>
  		</div>

  			</div>


  		</div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
      </form>
  	</div>

<div id="marriagemodal">
  <form id="updateMarrForm">
  		<div class="container">
  			<div class="md-form">
          <input type="hidden" name="updatemarr[id]" id="updatemarr_id" value="">
  				<input type="text" name="updatemarr[refno]" id="updatemarr_refno" class="form-control" value="---">
  				<label for="form1">REFERENCE NUMBER</label>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[First_name_h]" id="updatemarr_First_name_h" class="form-control" value="---">
  						<label for="form2">Firstname of Husband</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Middle_name_h]" id="updatemarr_Middle_name_h" class="form-control" value="---">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Last_name_h]" id="updatemarr_Last_name_h" class="form-control" value="---">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[annexh]" id="updatemarr_annexh" class="form-control">
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="container">
  			<div class="row">
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[First_name_w]" id="updatemarr_First_name_w" class="form-control" value="---">
  						<label for="form2">Firstname of Wife</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Middle_name_w]" id="updatemarr_Middle_name_w" class="form-control" value="---">
  						<label for="form3">Middle Name</label>
  					</div>
  				</div>
  				<div class="col-sm">
  					<div class="md-form ">
  						<input type="text" name="updatemarr[Last_name_w]" id="updatemarr_Last_name_w" class="form-control" value="---">
  						<label for="Last">Last Name</label>
  					</div>
  				</div>
  				<div class="col-2">
  					<div class="md-form ">
  						<input type="number" name="updatemarr[annexw]" id="updatemarr_annexw" class="form-control" >
  						<label for="Annex">Annex</label>
  					</div>
  				</div>
  			</div>
  		</div>
  		<input type="hidden" name="updatemarr[encoder]" id="updatemarr_encoder" class="bday_encoder" value="---">
  		<div class="container">
  			<div class="">
  				<div class="dates">
  					<div class="md-form">
  					<input type="text" name="updatemarr[date_of_marriage]" id="updatemarr_date_of_marriage" class="form-control" value="---">
  						<label >Date of Marriage</label>
  				</div>
  			</div>
  			</div>
  		</div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
  	</form>
  </div>
</div>
</div>
</div>
</div>
<!-- Central Modal Small -->
