<div class="container-fluid ">

<div class = "container-fluid mt-5 pt-5">
  <h5 class = "mb-3">Purpose of getting Birth Certificate</h5>
<div class = "row">

    <div class = "col-lg-4 ">
    <a href="" data-toggle="modal" data-target="#pass_travel" >
      <div class = "card  p-3 selection">
        <div class = "card-body ">
          <div class="md-form ">
            <p>PASSPORT/TRAVEL</p>
          </div>
        </div>
      </div>
    </a>
    </div>


<div class = "col-lg-4">
  <a href="<?php echo base_url() . 'pages/client/birthcert_form'  ?>" >
    <div class = "card p-3 selection">
      <div class = "card-body">
        <div class="md-form">
          <p>EMPLOYMENT</p>
        </div>
      </div>
    </div>
  </a>
  </div>

<div class = "col-lg-4">
    <a href="<?php echo base_url() . 'pages/client/birthcert_form'  ?>" >
      <div class = "card p-3 selection">
        <div class = "card-body">
        <div class="md-form">
          <p>SCHOOL REQUIREMENT</p>
        </div>
      </div>
    </div>
  </a>
</div>

</div>
</div>

  <div class = "container-fluid pt-3">
  <div class = "row">


    <div class = "col-lg-4">
      <div class = "card p-3 selection">
      <a href="<?php echo base_url() . 'pages/client/birthcert_form'  ?>" >
        <div class = "card-body">
          <div class="md-form">
            <p>CLAIMS/BENEFITS/LOANS</p>
        </div>
      </div>
    </div>
  </a>
</div>


      <div class = "col-lg-4">
        <div class = "card p-3 selection">
          <a href="" data-toggle="modal" data-target="#others">
          <div class = "card-body">
          <div class="md-form">
            <p >OTHERS</p>
          </div>
        </div>
      </div>
      </a>
    </div>


    <div class = "col-lg-4">
      <div class = "card p-3 selection">
        <a href="" data-toggle="modal" data-target="#negative_intact">
        <div class = "card-body">
        <div class="md-form">
          <p for="claims">NO RECORD</p>
        </div>
      </div>
    </div>
    </a>
  </div>


</div>
</div>

</div>
</div>

<div class="modal fade" id="pass_travel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-2" style="background-color: tomato">
        <h4 class="modal-title white-text w-100 ">Passport/Travel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="md-form ">
          <input type="text" name="pass_travel" id="pass_travel" class="form-control">
          <label for="pass_travel">Destination Country</label>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-primary m-0 px-3  z-depth-0 waves-effect float-right" type="submit" id="button-addon2">
        <img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="others" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-2" style="background-color: tomato">
        <h4 class="modal-title white-text w-100 ">Others</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="md-form ">
          <textarea type="text" name="reason" id="reason" class="md-textarea form-control"></textarea>
          <label for="reason">Please specify reason.</label>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-primary m-0 px-3  z-depth-0 waves-effect float-right" type="submit" id="button-addon2">
        <img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="negative_intact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-2" style="background-color: tomato">
        <h4 class="modal-title white-text w-100 ">No Record</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="md-form ">
          <textarea type="text" name="reason" id="reason" class="md-textarea form-control"></textarea>
          <label for="reason">Please specify reason.</label>
          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-sm btn-primary m-0 px-3  z-depth-0 waves-effect float-right" type="submit" id="button-addon2">
          <img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;" alt=""> Submit</button>
      </div>
    </div>
  </div>
</div>

</div>
