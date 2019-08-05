
<div class = "container-fluid  pt-5">

  <form id="employment">
    <div id="employment" class="container-fluid p-5">

      <h5 class="font-weight-bold">Marriage Certificate Application Form</h5>
        <div class = "card p-3 mb-3">
        <div class = "card-body">
          <h6 class ="mb-3">Marriage Details</h6>
          <hr>
          <div class ="container-fluid">
          <div class ="row">

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

          </div>
        </div >
      </div >
    </div >


<div class = "card p-3 mb-3">
<div class = "card-body">
  <h6>Name of Husband</h6>
  <hr>
  <div class ="containter">
  <div class ="row">
          <div class="col-lg-4 md-form ">
            <input type="text" name="husband_fname" id="husband_fname" class="form-control">
            <label for="husband_fname">First Name</label>
            <small>If you have a suffix, please put it here. (i.e. Juan II)</small>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="husband_mname" id="husband_mname" class="form-control">
            <label for="husband_mname">Middle Name</label>
            <small>Leave blank if not applicable</small>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="husband_lname" id="husband_lname" class="form-control">
            <label for="husband_lname">Last Name</label>
          </div>
        </div>
    </div>
  </div>
</div>
    <div class = "card p-3 mb-3">
    <div class = "card-body">
<h6>Maiden Name of Wife</h6><hr>
<div class ="containter">
<div class ="row">
          <div class="col-lg-4 md-form ">
            <input type="text" name="wife_fname" id="wife_fname" class="form-control">
            <label for="wife_fname">First Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="wife_mname" id="wife_mname" class="form-control">
            <label for="wife_mname">Middle Name</label>
          </div>

          <div class="col-lg-4 md-form ">
            <input type="text" name="wife_lname" id="wife_lname" class="form-control">
            <label for="wife_lname">Last Name</label>
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
        <div class="modal-header " style="background-color: #3F729B">
          <h4 class="modal-title white-text w-70">
            Who is requesting for this Marriage Certificate?
        </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
          </button>
        </div>
        <div class = "modal-body">
          <div class ="container">
          <div class ="row">
            <div class ="md-form mt-0">
                    <div class="col-lg-12 md-form p-0">
                      <input type="text" name="father_fname" id="father_fname" class="form-control">
                      <label for="father_fname">First Name</label>
                      </div>
                    <div class="col-lg-12 md-form p-0">
                      <input type="text" name="father_mname" id="father_mname" class="form-control">
                      <label for="father_mname">Middle Name</label>
                      </div>
                    <div class="col-lg-12 md-form p-0">
                      <input type="text" name="father_lname" id="father_lname" class="form-control">
                      <label for="father_lname">Last Name</label>
                      </div>
                    <div class="col-lg-12 md-form p-0">
                      <select name="emp_birthright" class="custom-select" id="emp_birthright">
                        <option selected value=" ">Requestor</option>
                        <option value="Legitimate">Owner of the certificate</option>
                        <option value="Illegitimate">Spouse of the certificate Owner</option>
                        <option value="Illegitimate">Mother of the certificate Owner</option>
                        <option value="Illegitimate">Father of the certificate Owner</option>
                        <option value="Illegitimate">Son of the certificate Owner</option>
                        <option value="Illegitimate">Daughter of the certificate Owner</option>
                        <option value="Illegitimate">Grandparent of the certificate Owner</option>
                        <option value="Illegitimate">Grandchild of the certificate Owner</option>
                        <option value="Illegitimate">None of the above</option>
                      </select>
                      <small>The Requesting Party must be of legal age</small>
                    </div>
                    </div>
                  </div>
                </div>
                <hr>
                  <div class="modal-footer m-0 pt-2 pb-0">
                      <button type="button" type="submit" class="btn btn-sm btn-success" data-dismiss="modal">Submit</button>
                      <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                  </div>
        </div>
      </div>
    </div>
  </div>
