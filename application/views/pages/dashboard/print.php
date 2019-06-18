
<div class="container-fluid pt-4">
<h3><b><i class="fas fa-print"></i> Print</h3>
</b>
</div>

<div class="container pt-4">

  <table id="printable" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">id
      </th>
      <th class="th-sm">ref_num
      </th>
      <th class="th-sm">or_num
      </th>
      <th class="th-sm">name
      </th>
      <th class="th-sm">type date
      </th>
      <th class="th-sm">date
      </th>
      <th class="th-sm">page
      </th>
      <th class="th-sm">no_copy
      </th>
      <th class="th-sm">action
      </th>

    </tr>
  </thead>
  <tbody>

  </tbody>
  <tfoot>
    <tr>
      <th>id
      </th>
      <th>ref_num
      </th>
      <th>or_num
      </th>
      <th>name
      </th>
      <th>type date
      </th>
      <th>date
      </th>
      <th>page
      </th>
      <th>no_copy
      </th>
      <th>action
      </th>

    </tr>
  </tfoot>
</table>

</div>
<div class="container">




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

  <iframe width="100%" height="65%" src="<?php echo base_url('pages/viewpdf') ?>#toolbar=0&zoom=60%"></iframe>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#done" >Print</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>



<div class="container">
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
</div></div>
