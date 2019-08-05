
<div class = "container-fluid  p-5">

  <form id="employment">
    <div id="employment" class="container-fluid p-5">

      <h5 class="font-weight-bold">Birth Certificate Application Form</h5>
        <div class = "card p-3 mb-3">
        <div class = "card-body">
<h6 class ="mb-3">Name on the Birth Certificate (Maiden Name for married women)</h6>
<hr>
<div class ="containter">
<div class ="row">
          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_firstname" id="emp_firstname" class="form-control">
            <label for="emp_firstname">First Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_firstname" id="emp_firstname" class="form-control">
            <label for="emp_midname">Middle Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_firstname" id="emp_firstname" class="form-control">
            <label for="emp_lastname">Last Name</label>
          </div>
        </div >
      </div >
    </div >
</div >

<div class = "card p-3 mb-3">
<div class = "card-body">
<h6>Birth Details</h6>
<hr>
<div class ="containter">
<div class ="row">
        <div class="col-lg-12 md-form">
        <select name="emp_gender" class="custom-select" id="emp_gender">
        <option selected value=" ">Sex</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        </div>

          <div class="col-lg-12 dates">
            <div class="md-form">
              <input type="date" name="empdate_birthday" id="empdate_birthday" class="form-control">
              <label for="empdate_birthday">Date of Birthday</label>
            </div>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_bplaceCountry" id="emp_bplaceCountry" class="form-control">
            <label for="emp_bplaceCountry">Birth Place Country</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_bplaceProvince" id="emp_bplaceProvince" class="form-control">
            <label for="emp_bplaceProvince">Birth Place Province</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="emp_birtplaceCity" id="emp_bplaceCity" class="form-control">
            <label for="emp_bplaceCity">Birth Place City</label>
          </div>


          <div class="col-lg-12 md-form">
            <select name="emp_birthright" class="custom-select" id="emp_birthright">
              <option selected value=" ">Birthright</option>
              <option value="Legitimate">Legitimate</option>
              <option value="Illegitimate">Illegitimate</option>
            </select>
          </div>
</div>
</div>

</div>
</div>


<div class = "card p-3 mb-3">
<div class = "card-body">
  <h6>Father's Name</h6>
  <hr>
  <div class ="containter">
  <div class ="row">
          <div class="col-lg-4 md-form ">
            <input type="text" name="father_fname" id="father_fname" class="form-control">
            <label for="father_fname">First Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="father_mname" id="father_mname" class="form-control">
            <label for="father_mname">Middle Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="father_lname" id="father_lname" class="form-control">
            <label for="father_lname">Last Name</label>
          </div>
        </div>
    </div>
  </div>
</div>


    <div class = "card p-3 mb-3">
    <div class = "card-body">
<h6>Mother's Maiden Name</h6>
<hr>
<div class ="containter">
<div class ="row">
          <div class="col-lg-4 md-form ">
            <input type="text" name="father_fname" id="father_fname" class="form-control">
            <label for="father_fname">First Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="father_mname" id="father_mname" class="form-control">
            <label for="father_mname">Middle Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="father_lname" id="father_lname" class="form-control">
            <label for="father_lname">Last Name</label>
          </div>
        </div>
        </div>
      </div>
    </div>

        <div class = "card  mb-3">
        <div class = "card-body">
          <div class="row">
            <div class="col-12 text-center">
                <button  type="button" class="btn btn-success z-depth-0" name="button" data-toggle="modal" data-target="#emp_continue" >Continue</button>
              <button type="reset" class="btn btn-danger z-depth-0" name="button">Clear All</button>
            </div>
          </div>
          </div>
  </form>

  </div>
  </div>
  </div>

  <div class="modal fade" id="emp_continue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="max-width:950px" role="document">
      <div class="modal-content">
        <div class="modal-header p-4" style="background-color: #3F729B">
          <h4 class="modal-title white-text w-70 font-weight-bold py-2">
        </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <div class="md-form mb-4">
          <div class="modal-footer m-0 P-0">
              <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
