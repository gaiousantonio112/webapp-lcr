
<div class="container-fluid pt-4 px-5">
    	<div class=" container text-right">
<h3 class="font-weight-bold"><b><img src="<?php echo base_url() .'/assets/svg/Print (ecris).svg' ?>" height="55px" alt=""> Print</h3>
</b>
</div>

<div class="container pt-4">

  <table id="printable" class="table table-responsive table-sm table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <!-- <th class="th-sm">id
      </th> -->
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
<div class="container">




</div>



<div class="modal fade" id="reciept_print_page" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Alert!</h4>


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
            <button type="submit" class="btn btn-primary btn-sm">Yes</button>
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
        </form>
      </div>
    </div>
  </div>
