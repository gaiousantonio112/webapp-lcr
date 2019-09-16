<div class="container-fluid p-4 px-5" width="500px" >

		<div class="z-depth-1 title-Div">
			<span><img class = "title-Divimg" src="<?php echo base_url() .'/assets/svg/print2(ecris).svg' ?>" ></span>
			<h2 class="white-text float-right title-text"> Print </h2>
		</div>

		<div class="card mt-3" >
			<div class="card-body">

						<table id="printable" class="table table-responsive table-sm table-striped table-bordered w-100" cellspacing="0" >
							<thead>
								<tr>
									<th class="th-sm">Reference Number
									</th>
									<th class="th-sm">OR No.
									</th>
									<th class="th-sm">Name
									</th>
									<th class="th-sm">Encoder Name
									</th>
									<th class="th-sm">Cert. Type
									</th>
									<th class="th-sm">Date Paid
									</th>
									<th class="th-sm">Page
									</th>
									<th class="th-sm">Copies
									</th>
									<th class="th-sm">Action
									</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>

			</div>
		</div>

		<div class="container">
		</div>
		<div class="modal fade" id="reciept_print_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header p-2" style="background-color: tomato">
						<h4 class="modal-title white-text w-100 font-weight-bold py-1">Alert</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- <embed src="../../../../assets/pdf/rec.pdf#toolbar=0&zoom=70" type="application/pdf" width="100%" height="60%"> -->
						<iframe width="100%" height="65%" id="print_pageFrame" src="#oratyr" hidden></iframe>
						Done Printing?
					</div>
					<div class="modal-footer">
						<form id="update_print">
							<input type="hidden" name="update[id]" id="lcr_history_iid" value="">
							<input type="hidden" name="update[st]" value="done">
							<input type="hidden" id="verify_by" name="update[printedby]" value="">
							<button type="submit" class="btn btn-warning btn-sm">Yes</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>




	
<!-- Modal -->
<div class="modal fade" id="cancelormodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel">Cancel Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <h6>Are you sure you want to cancel this request?</h6>
	 <h6 id="name"></h6>
	 <h6 id="ornum"></h6>
<form id="sibmitorcancel">

	 <div class="form-group">
  <label for="exampleFormControlTextarea2">Remarks</label>
  <textarea class="form-control rounded-0" id="remarks" name="orcancel[remarks]" rows="2" required></textarea>
  <div class="col-12 text-center">
  <input type="text" id="iddel"  name="orcancel[id]" hidden>
  <input type="text" id="orrealnum"  name="orcancel[or]" hidden>
  <button  type="submit"  class="btn-sm btn-info btn">Submit</button>
  <button  type="button"  data-dismiss="modal"  class="btn-sm btn-danger btn">Cancel</button>
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

