

<div class="container-fluid  teal lighten-5" >

  <div class = "card" style="margin-top: 5px" >
    <div class = "card-header">
    <div class="container" style="">

      <div class="row">

        <div class="col-6">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="radioselectwar" id="pre-war" value="prewar" checked>
            <label class="custom-control-label" for="pre-war">Pre War</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" name="radioselectwar" id="post-war" value="postwar">
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
                        <select name="birth_page_no No." class="custom-select" id ="birth_page_no">
                          <option selected>Page No.</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      </div>
                      <div class="md-form px-4 col-6">
                        <select name="birth_book_no" class="custom-select" id = "birth_book_no">
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

    <div class="row px-5" style ="float:none;margin: 10px auto" id="search-birthday">
      <div class="col-9 px-0 py-2">
        <input type="text" name="birth_refnum" id="birth_refnum" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
      </div>
      <div class="col-3">
      <button id="birth_search" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
      </div>

    </div>


        <div class="md-form ">
          <input type="number" name="formgenbday[lcr_regno]" id="lcr_regno" class="form-control">
          <label for="lcr_regno">LCR Registry Number</label>
        </div>

        <div class="dates">
          <div class="md-form">
            <input type="date" name="formgenbday[date_reg]" id="date_reg" class="form-control">
            <label for="date_reg">Date of Registration</label>
          </div>
        </div>

        <div class="md-form ">
          <input type="text" name="formgenbday[name_child]" id="name_child" class="form-control">
          <label for="name_child">Name of Child</label>
        </div>

        <div class="md-form">
            <select name="sex" class="custom-select" id="sex">
              <option selected>Sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
        </div>

      <div class="dates">
        <div class="md-form">
          <input type="date" name="formgenbday[bday_date]" id="birthdate" class="form-control">
          <label for="birthdate">Date of Birth</label>
        </div>
      </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[birthplace]" id="birthplace" class="form-control">
      <label for="birthplace" >Place of Birth</label>
    </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[mothername]" id="mothername" class="form-control">
      <label for="mothername">Name of Mother</label>
    </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[mothernationality]" id="mothernationality" class="form-control">
      <label for="mothernationality">Nationality of Mother</label>
    </div>
      <div class="md-form ">
        <input type="text" name="formgenbday[fathername]" id="fathername" class="form-control">
        <label for="fathername">Name of Father</label>
      </div>
      <div class="md-form ">
        <input type="text" name="formgenbday[fathernationality]" id="fathernationality" class="form-control">
        <label for="fathernationality">Nationality of Father</label>
      </div>


    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenbday[marriagedate]" id="marriagedate" class="form-control">
        <label for="marriagedate">Date of Marriage of Parents</label>
    </div>
</div>
<div class="md-form ">
  <input type="text" name="formgenbday[bdayissued]" id="bdayissued" class="form-control">
  <label for="issued">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
  <textarea class="md-textarea form-control" rows="2" id="birth_remarks"></textarea>
  <label for="birth_remarks">Remarks</label>
</div>

</div>
</div>

</div>
<!-- death form -->

<div id ="genform-death" class="container genform " style="margin-top: 10px">

  <div class="card mb-3" style="background-color:#FFEAD6">
    <div class="card-body" >
    <div class="text-center px-5" style="color: #191818" id="certif2">
      WE CERTIFY that, among others, the following facts of death appear in our Register of Death On
          <div class="row" style="margin-top:-15px;">
                <div class="md-form px-4 col-6">
                  <select name="death_pageno" class="custom-select" id="death_pageno">
                    <option selected>Page No.</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
                <div class="md-form px-4 col-6">
                  <select name="death_bookno" class="custom-select" id="death_bookno">
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
  <div class="row px-5" style ="float:none;margin: 10px auto" id="search-death" >
    <div class="col-9 px-0 py-2">
      <input type="text" name="formgendeath[reference_num]" id="death_refnum" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
    </div>
    <div class="col-3">
    <button id="death_search" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
    </div>
  </div>


      <div class="md-form ">
        <input type="text" name="formgendeath[Name]" id="name" class="form-control">
        <label for="name">Name</label>
      </div>
      <div class="dates">
        <div class="md-form">
          <input type="date" name="formgendeath[death_date_reg]" id="death_date_reg" class="form-control">
          <label for="death_date_reg">Date of Registration</label>
        </div>
      </div>
      <div class="md-form ">
        <input type="text" name="formgendeath[name_deceased]" id="namedeceased" class="form-control">
        <label for="namedeceased">Name of Deceased</label>
      </div>

      <div class="md-form">
          <select name="sex" class="custom-select" id="">
            <option selected>Sex</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
      </div>

      <div class="md-form">
        <input type="number" name="formgendeath[age]" id="deathage" class="form-control">
        <label for="deathage">Age</label>
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
        <input type="text" name="formgendeath[nationality]" id="death_nationality" class="form-control">
        <label for="death_nationality">Nationality</label>
      </div>
      <div class="dates">
        <div class="md-form">
        <input type="date" name="formgenbday[bday_date]" id="death_date" class="form-control">
          <label for="death_date">Date of Death</label>
      </div>
  </div>
  <div class="md-form ">
    <input type="text" name="formgendeath[place_death]" id="place_death" class="form-control">
    <label for="place_death" >Place of Death</label>
  </div>

    <div class="md-form ">
      <textarea class="md-textarea form-control" rows="3" id="cause_death"></textarea>
      <label for="cause_death">Cause of Death</label>
    </div>


<div class="md-form ">
<input type="text" name="formgendeath[issued]" id="death_issued" class="form-control">
<label for="death_issued">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
<textarea id="death_remarks" class="md-textarea form-control" rows="2"></textarea>
<label for="death_remarks">Remarks</label>
</div>
</div>

</div>
</div>
<!-- marriage form -->
<div id ="genform-marriage" class="container genform" style="margin-top: 10px">

  <div class="card mb-3" style="background-color:#FFEAD6">
    <div class="card-body" >
    <div class="text-center px-5" style="color: #191818" id="certif3">
        WE CERTIFY that, among others, the following facts of marriage appear in our Register of Marraige On
            <div class="row" style="margin-top:-15px;">
                  <div class="md-form px-4 col-6">
                    <select name="death_pageno" class="custom-select">
                      <option selected>Page No.</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                    </select>
                  </div>
                  <div class="md-form px-4 col-6">
                    <select name="death_bookno" class="custom-select">
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
    <div class="row px-5" style ="float:none;margin: 10px auto" id="search-marriage"  >
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
<input type="text" name="formgenmar[issued]" id="marriage_issued" class="form-control">
<label for="marriage_issued">THIS CERTIFICATION is issued to upon his/her request</label>
</div>
<div class="md-form">
<textarea id="marriage_remarks" class="md-textarea form-control" rows="2"></textarea>
<label for="marriage_remarks">Remarks</label>
</div>
  </div>

</div>
</div>
</div>


<div class="col-6 pt-5">
  <div class="">

<div class = "" id="" >
  <iframe width="100%" class="postwar_view z-depth-1" id="postwar_image" height="75%" src="<?php echo base_url(). 'pages/viewlcrform' ?>#toolbar=0&navpanes=0&scrollbar=0"></iframe>
</div>
<div class ="" id = "" >
<<<<<<< HEAD
  <iframe src="<?php echo base_url() ?>/pages/book"  class="prewar_view z-depth-1"   id="prewar_image" width="100%" height="100%"></iframe>
=======
  <iframe src="<?php echo base_url() ?>/pages/book"  class="postwar_view"   id="postwar_image" width="100%" height="80%"></iframe>
>>>>>>> 2c1f9f68e7b1fafad16ce6423a35d6ca683067a2

    </div>
</div>

<div class="rows">

<div class = "card m-4">
<div class ="card-body">
<div class="container">
    <div class="row" >

        <div class = "col-3">
            <div class="md-form ">
              <input type="number" name="page_no" id="page_no." class="form-control">
              <label for="page_no.">Page No.</label>
            </div>
        </div>
        <div class = "col-3">
          <div class="md-form ">
            <input type="number" name="page_no" id="book_no" class="form-control">
            <label for="book_no">Book No.</label>
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
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect previewbtn" data-toggle="modal" data-target="#modalBirthday" id ="birthday-btn" >
          <img src="<?php echo base_url() . '/assets/svg/preview-button-ecris.svg' ?>" style="height: 15px;"alt="">
        Preview</a>
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect previewbtn" data-toggle="modal" data-target="#modalDeath"  id ="death-btn" style="display:none">
          <img src="<?php echo base_url() . '/assets/svg/preview-button-ecris.svg' ?>" style="height: 15px;"alt="">
        Preview</a>
        <a href="" class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0 waves-effect  previewbtn" data-toggle="modal" data-target="#modalMarriage"  id ="marriage-btn" style="display:none">
          <img src="<?php echo base_url() . '/assets/svg/preview-button-ecris.svg' ?>" style="height: 15px;"alt="">
        Preview</a>

        <!-- <button type="button" class="btn btn-lg btn-outline-success m-0 px-3 py-2 z-depth-0 waves-effect" name="button" />
        <img src="<?php echo base_url() . '/assets/svg/Print (ecris).svg' ?>" style="height: 15px;"alt="">
        Print</button> -->
        <button type="button" class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0 waves-effect" name="button" />
        <img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;"alt="">
        Clear All</button>
      </div>
    </div>
</div>
</div>
</div>

<!-- Birthday Modal -->
<div class="modal fade"  id="modalBirthday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" style="max-width:950px" role="document">
    <div class="modal-content">
        <div class="modal-header p-2" style="background-color: tomato">
              <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
              </button>
            </div>

<<<<<<< HEAD
        <div class="md-form mb-4" >
          <iframe width="100%" id="" height="75%" src="<?php echo base_url(). 'pages/viewlcrform' ?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100"></iframe>
=======
        <div class="md-form m-0" >
          <iframe width="100%" id="" height="75%" src="<?php echo base_url(). 'pages/viewlcrform' ?>#toolbar=0&navpanes=0&scrollbar=0"></iframe>
>>>>>>> 2c1f9f68e7b1fafad16ce6423a35d6ca683067a2
        </div>

        <div class="modal-footer m-0 P-0">
      <button type="button" class="btn btn-sm btn-success" name="button">Save</button>
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal" >Close</button>

        </div>
    </div>

  </div>
</div>

<!-- Death Modal-->
<div class="modal fade" id="modalDeath" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-lg w-auto h-auto" style="max-width:950px" role="document">
    <div class="modal-content">
        <div class="modal-header p-2" style="background-color: tomato">
            <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview Death</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="md-form mb-4">
          <iframe width="100%" id="" height="75%" src="<?php echo base_url() . 'pages/viewdeathlcrform'?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100" ></iframe>
        </div>
    </div>
  </div>
</div>
<!-- Marriage Modal -->
<div class="modal fade" id="modalMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg w-auto h-auto" style="max-width:950px" role="document">
    <div class="modal-content">
        <div class="modal-header p-2" style="background-color: tomato">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview Marriage</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="md-form mb-4">
          <iframe width="100%"  height="75%" src="<?php echo base_url() . 'pages/viewmarriagelcrform'?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100" ></iframe>
        </div>
    </div>
  </div>
</div>
      <div class="d-inline text-center" style="" >
      </div>


</div>
</div>
