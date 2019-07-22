<div class="container-fluid p-4 px-5  grey lighten-4" >
	<div class=" container text-right " >
		<div class="teal lighten-1 z-depth-1" style="height:52px; border-radius:3px">
			<span><img src="<?php echo base_url() .'/assets/svg/print2(samp).svg' ?>" height="50px" alt="" style="float:right" class="px-2 pt-2"></span>
			<p style="color:white; float:right; padding-right: 15px;font-size: 30px;" class="pt-2">Print</p>
		</div>
	</div>
	<div class="container p-4 " >
		<div class="card" >
			<div class="card-body">
				<div class="row">
					<div class="container">
						<table id="printable" class="table table-responsive table-sm table-striped table-bordered" cellspacing="0" width="100%">
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
							<button type="submit" class="btn btn-warning btn-sm">Yes</button>
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">No</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
