

<div class="container-fluid">

  <div class = "card" style="margin-top: 5px" >
    <div class = "card-header">
    <div class="container" style="">
      <div class="row">

        <div class="col-6">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="radioselect-row" id="pre-war" checked>
            <label class="custom-control-label" for="pre-war">Pre War</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="radioselect-row" id="post-war" value="post">
            <label class="custom-control-label" for="post-war">Post War</label>
          </div>
        </div>

        <div class="col-6">

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="radioselect" id="Birthday" value="birthday" checked>
            <label class="custom-control-label" for="Birthday">Birthday</label>
          </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" name="radioselect" id="Death" value="death">
              <label class="custom-control-label" for="Death">Death</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" name="radioselect" id="Marriage" value="marriage" onclick="show('formmerage');">
              <label class="custom-control-label" for="Marriage">Marriage</label>
            </div>
          </div>

        </div>
        </div>

    </div>
  </div>

<div class="row">

<div class="col-6 " >
  <!-- birthday form -->
  <div id ="genform-birthday" class="container genform" style="margin-top: 10px; ">

    <div class="card mb-3" style="background-color:#FFEAD6">
      <div class="card-body" >
        <div class="text-center px-5" style="color: #191818" id="certif">
            WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On
                <div class="row" style="margin-top:-15px;">
                      <div class="md-form px-4 col-6">
                        <select name="Page No." class="custom-select" id ="page_no">
                          <option selected>Page No.</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div>
                      <div class="md-form px-4 col-6">
                        <select name="Book No." class="custom-select" id = "book_no">
                          <option selected>Book No.</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div>
                </div>
              </div>
            </div>
          </div>

<div class="card mb-3" >
<div class="card-body" >

    <div class="row px-5" style ="float:none;margin: 10px auto" id="search-form">
      <div class="col-9 px-0 py-2">
        <input type="text" name="formgenbday[first_name]" id="search" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
      </div>
      <div class="col-3">
      <button id="search" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
      </div>

    </div>


        <div class="md-form ">
          <input type="number" name="formgenbday[first_name]" id="lcr_regno" class="form-control">
          <label for="form2">LCR Registry Number</label>
        </div>

        <div class="dates">
          <div class="md-form">
            <input type="date" name="formgenbday[bday_date]" id="date_reg" class="form-control">
            <label >Date of Registration</label>
          </div>
        </div>

        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="name_child" class="form-control">
          <label for="form2">Name of Child</label>
        </div>

        <div class="md-form">
            <select name="sex" class="custom-select">
              <option selected>Sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
        </div>

      <div class="dates">
        <div class="md-form">
          <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
          <label >Date of Birth</label>
        </div>
      </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2" >Place of Birth</label>
    </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Name of Mother</label>
    </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Nationality of Mother</label>
    </div>
      <div class="md-form ">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Name of Father</label>
      </div>
      <div class="md-form ">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Nationality of Father</label>
      </div>


    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
        <label >Date of Marriage of Parents</label>
    </div>
</div>
<div class="md-form ">
  <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
  <label for="form2">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
  <textarea id="form7" class="md-textarea form-control" rows="2"></textarea>
  <label for="form7">Remarks</label>
</div>

</div>
</div>

</div>


<!-- death form -->

<div id ="genform-death" class="container genform " style="margin-top: 10px">

  <div class="card mb-3" style="background-color:#FFEAD6">
    <div class="card-body" >
    <div class="text-center px-5" style=" display:none; color: #191818" id="certif2">
      WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On
          <div class="row" style="margin-top:-15px;">
                <div class="md-form px-4 col-6">
                  <select name="Page No." class="custom-select">
                    <option selected>Page No.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
                <div class="md-form px-4 col-6">
                  <select name="Book No." class="custom-select">
                    <option selected>Book No.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
          </div>
        </div>
      </div>
    </div>

<div class="card  mb-3">
<div class="card-body" >
  <div class="row px-5" style ="float:none;margin: 10px auto" id="search-form2" >
    <div class="col-9 px-0 py-2">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
    </div>
    <div class="col-3">
    <button id="search" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
    </div>
  </div>


      <div class="md-form ">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Name</label>
      </div>
      <div class="dates">
        <div class="md-form">
          <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
          <label >Date of Registration</label>
        </div>
      </div>
      <div class="md-form ">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Name of Deceased</label>
      </div>

      <div class="md-form">
          <select name="sex" class="custom-select">
            <option selected>Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
      </div>

      <div class="md-form">
        <input type="number" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Age</label>
      </div>

      <div class="md-form">
          <select name="civil-status" class="custom-select">
            <option selected>Civil Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Divorced">Divorced</option>
          </select>
      </div>

      <div class="md-form ">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
        <label for="form2">Nationality</label>
      </div>
      <div class="dates">
        <div class="md-form">
        <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
          <label >Date of Death</label>
      </div>
  </div>
  <div class="md-form ">
    <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
    <label for="form2" >Place of Death</label>
  </div>

    <div class="md-form ">
      <textarea id="form2" class="md-textarea form-control" rows="3"></textarea>
      <label for="form2">Cause of Death</label>
    </div>


<div class="md-form ">
<input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
<label for="form2">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
<textarea id="form7" class="md-textarea form-control" rows="2"></textarea>
<label for="form7">Remarks</label>
</div>
</div>

</div>
</div>
<!-- marriage form -->
<div id ="genform-marriage" class="container genform" style="margin-top: 10px">

  <div class="card mb-3" style="background-color:#FFEAD6">
    <div class="card-body" >
    <div class="text-center px-5" style="display:none ;color: #191818" id="certif3">
        WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On
            <div class="row" style="margin-top:-15px;">
                  <div class="md-form px-4 col-6">
                    <select name="Page No." class="custom-select">
                      <option selected>Page No.</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
                  <div class="md-form px-4 col-6">
                    <select name="Book No." class="custom-select">
                      <option selected>Book No.</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
            </div>
          </div>
        </div>
      </div>

<div class="card mb-3" >
<div class="card-body" >
    <div class="row px-5" style ="float:none;margin: 10px auto" id="search-form3" >
      <div class="col-9 px-0 py-2">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
      </div>
      <div class="col-3">
      <button id="search" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
      </div>
    </div>

<div class="row" >
    <div class="md-form col-6">
      <input type="text" name="formgenmar[husband_name]" id="husband_name" class="form-control" />
      <label for="husband_name">Husband's Name</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenmar[wife_name]" id="wife_name" class="form-control">
      <label for="wife_name">Wife's Name</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6">
      <input type="number" name="formgenmar[wife_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Age</label>
    </div>
    <div class="md-form col-6">
      <input type="number" name="formgenmar[wife_name]" id="form2" class="form-control">
      <label for="form2">Wife's Age</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6" >
      <input type="text" name="formgenmar[Husband_Nationality]" id="husband_nationality" class="form-control" />
      <label for="husband_nationality">Husband's Nationality</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenmar[Wife_Nationality]" id="wife_nationality" class="form-control">
      <label for="wife_nationality">Wife's Nationality</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">


    <div class="md-form col-6" >
        <select name="husband-civil-status" class="custom-select">
          <option selected>Husband's Civil Status</option>
          <option value="Single">Single</option>
          <option value="Married">Married</option>
          <option value="Widowed">Widowed</option>
          <option value="Divorced">Divorced</option>
        </select>
    </div>

    <div class="md-form col-6">
      <select name="wife-civil-status" class="custom-select">
        <option selected>Wife's Civil Status</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Widowed">Widowed</option>
        <option value="Divorced">Divorced</option>
      </select>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6">
      <input type="text" name="formgenmar[husband_mother]" id="husband_mother" class="form-control" />
      <label for="husband_mother">Husband's Mother</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenmar[wife_mother]" id="wife_mother" class="form-control">
      <label for="wife_mother">Wife's Mother</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6">
      <input type="text" name="formgenmar[husband_father]" id="husband_father" class="form-control" />
      <label for="husband_father">Husband's Father</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenmar[wife_father]" id="wife_father" class="form-control">
      <label for="wife_father">Wife's Father</label>
    </div>
</div>

    <div class="md-form ">
      <input type="number" name="formgenmar[lcr_registry_num]" id="lcr_registry_num" class="form-control">
      <label for="lcr_registry_num">LCR Registry Number</label>
    </div>

    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenmar[date_reg]" id="date_reg" class="form-control">
        <label for="date_reg">Date of Registration</label>
      </div>
    </div>

    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenmar[date_marriage]" id="date_marriage" class="form-control">
        <label >Date of Marriage</label>
      </div>
    </div>

<div class="md-form ">
  <input type="text" name="formgenmar[place_marriage]" id="place_marriage" class="form-control">
  <label for="place_marriage" >Place of Marriage</label>
</div>

<div class="md-form ">
<input type="text" name="formgenmar[issued]" id="issued" class="form-control">
<label for="issued">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
<textarea id="form7" class="md-textarea form-control" rows="2"></textarea>
<label for="form7">Remarks</label>
</div>
  </div>

</div>
</div>
</div>


<div class="col-6 pt-5">
  <div class="">
    <embed type="application/pdf"  src="<?php echo base_url() . '/assets/pdf/samplereg.pdf#scrollbar=0&page=2&view=FitBV' ?>"width="100%" height="100%">
  </div>

<div class="rows">

<div class = "card m-4">
<div class ="card-body">
<div class="container">
    <div class="row" >

        <div class = "col-3">
            <div class="md-form ">
              <input type="number" name="formgenbday[first_name]" id="Page_no." class="form-control">
              <label for="Page_no.">Page No.</label>
            </div>
        </div>
        <div class = "col-3">
          <div class="md-form ">
            <input type="number" name="formgenbday[first_name]" id="form2" class="form-control">
            <label for="Page_no.">Book No.</label>
          </div>
        </div>

        <div class="col-6 px-0">
            <div class ="text-center py-3 px-0" >
              <button type="button" class="btn btn-outline-primary" name="button" /><
              </button>
              <button type="button" class="btn btn-outline-primary" name="button">>
              </button>
            </div>
        </div>
      </div>

<hr class="my-4">
<div class="container" >
    <div class="row text-center">

      <div class="" style="margin-bottom: 15px;margin: 0 auto" >
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect previewbtn" data-toggle="modal" data-target="#modalBirthday" id ="birthday-btn" >Preview</a>
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect previewbtn" data-toggle="modal" data-target="#modalDeath"  id ="death-btn" style="display:none">Preview</a>
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect  previewbtn" data-toggle="modal" data-target="#modalMarriage"  id ="marriage-btn" style="display:none">Preview</a>

        <button type="button" class="btn btn-lg btn-outline-success m-0 px-3 py-2 z-depth-0 waves-effect" name="button" />
        <img src="<?php echo base_url() . '/assets/svg/Print (ecris).svg' ?>" style="height: 15px;"alt="">
        Print</button>
        <button type="button" class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" name="button" />
        <img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;"alt="">
        Clear All</button>
      </div>
    </div>
</div>
</div>
</div>

<!-- Birthday Modal -->
<div class="modal fade " id="modalBirthday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background-color: tomato">
              <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview Birthday</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

        <div class="md-form mb-4">
          <iframe width="100%" id="" height="75%" src="<?php echo base_url() . 'pages/viewlcrform'  ?>" ></iframe>
        </div>

    </div>
  </div>
</div>



<!-- Death Modal-->
<div class="modal fade" id="modalDeath" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header" style="background-color: tomato">
            <h4 class="modal-title white-text w-100 font-weight-bold">Preview Death</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="md-form mb-4">
          <iframe width="100%" id="" height="75%" src="<?php echo base_url() . 'pages/viewmarriagelcrform'  ?>" ></iframe>
        </div>
    </div>
  </div>
</div>
<!-- Marriage Modal -->
<div class="modal fade" id="modalMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header " style="background-color: tomato">
        <h4 class="modal-title white-text w-100 font-weight-bold">Preview Marriage</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="md-form mb-4">
          <iframe width="100%" id="" height="75%" src="<?php echo base_url() . 'pages/viewmarriagelcrform'  ?>" ></iframe>
        </div>
    </div>
  </div>
</div>
      <div class="d-inline text-center" style="" >
      </div>


</div>
</div>
