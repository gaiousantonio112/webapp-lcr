<style>

</style>
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

<div class="col-6 ">

<div class = "fields">

<div class="">
    <div class="row px-5" style ="float:none;margin: 10px auto" id="search-form">
      <div class="col-9 px-0 py-2">
        <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      </div>
      <div class="col-3">
      <button id="search" class="btn btn-primary">Search</button>
      </div>
    </div>
</div>
  <!-- birthday form -->
  <div id ="genform-birthday" class="container genform px-5 py-2" style="margin-top: 10px">

    <div class="text-center px-5" style="background-color:#edf3fc; padding: 15px">
          <p>WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On </p>
            <div class="row" style="margin: 0px auto;margin-left: 110px">
                <label>Page No.</label>
                <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px; height: 30px; padding-right: 5px">
                <label style ="padding-left: 10px">of Book No.</label>
                <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px;  height: 30px; padding-right: 5px">
            </div>
      </div>

        <div class="md-form ">
          <input type="number" name="formgenbday[first_name]" id="form2" class="form-control">
          <label for="form2">LCR Registry Number</label>
        </div>

        <div class="dates">
          <div class="md-form">
            <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
            <label >Date of Registration</label>
          </div>
        </div>

        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
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
<<<<<<< HEAD
  <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
  <label for="form7">Remarks</label>
=======
  <textarea id="form7" class="md-textarea form-control" rows="2"></textarea>
  <label for="form7">Remarks</label>
</div>
      </div>


<!-- death form -->

<div id ="genform-death" class="container genform px-5 py-2" style="margin-top: 10px">

  <div class="text-center px-5" style="background-color:#edf3fc; padding: 15px">
        <p>WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On </p>
          <div class="row" style="margin: 0px auto;margin-left: 110px">
              <label>Page No.</label>
              <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px; height: 30px; padding-right: 5px">
              <label style ="padding-left: 10px">of Book No.</label>
              <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px;  height: 30px; padding-right: 5px">
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
>>>>>>> 2a752fced3b20b3f49370bcf9188e858ef1bad44
</div>
</div>

<!-- marriage form -->
<div id ="genform-marriage" class="container genform px-5 py-2" style="margin-top: 10px">

  <div class="text-center px-5" style="background-color:#edf3fc; padding: 15px">
        <p>WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On </p>
          <div class="row" style="margin: 0px auto;margin-left: 110px">
              <label>Page No.</label>
              <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px; height: 30px; padding-right: 5px">
              <label style ="padding-left: 10px">of Book No.</label>
              <input type="number" name="page-no." id="form2" class="form-control" value="1" style= "width: 40px;  height: 30px; padding-right: 5px">
          </div>
    </div>

<div class="row" >
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Name</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Wife's Name</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6">
      <input type="number" name="formgenbday[first_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Age</label>
    </div>
    <div class="md-form col-6">
      <input type="number" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Wife's Age</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6" >
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Nationality</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Wife's Nationality</label>
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
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Mother</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Wife's Mother</label>
    </div>
</div>

<div class="row" style="margin-top:-30px">
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control" />
      <label for="form2">Husband's Father</label>
    </div>
    <div class="md-form col-6">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Wife's Father</label>
    </div>
</div>

    <div class="md-form ">
      <input type="number" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">LCR Registry Number</label>
    </div>

    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
        <label >Date of Registration</label>
      </div>
    </div>

    <div class="dates">
      <div class="md-form">
      <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
        <label >Date of Marriage</label>
      </div>
    </div>

<div class="md-form ">
  <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
  <label for="form2" >Place of Marriage</label>
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

<div class="col-6 pt-5">
  <div class="">
    <embed type="application/pdf"  src="<?php echo base_url() . '/assets/pdf/samplereg.pdf#scrollbar=0&page=2&view=FitBV' ?>"width="100%" height="100%">
  </div>

<div class="rows">
    <div class="container">
        <div class="row">

<<<<<<< HEAD
  </div>
  <div class="rows">
    <div class="container">
      <div class="  ">
  <div class="row">
    <div class="">
  <p>Book</p>
    </div>
    <div class="">
      <select name="cars" >
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  </select>
    </div>

    <div class=" ml-3">
  <p>Page</p>
    </div>
    <div class="">
      <select name="cars" >
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
  </select>
=======
<div class ="col-4" >
  <div class ="btn-group btn-group-justified" style ="margin-top:25px">
      <button type="button" class="btn btn-outline-success" name="button" /><</button>
      <button type="button" class="btn btn-outline-success" name="button">></button>
    </div>
</div>

<div class = "col-8" align="right">
  <div class="btn-group btn-group-justified">
    <div class="md-form">
      <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Book No.
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li>1</a></li>
            <li>2</a></li>
          </ul>
        </div>
>>>>>>> 2a752fced3b20b3f49370bcf9188e858ef1bad44
    </div>
  <div class="md-form">
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Page No.
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li>1</a></li>
          <li>2</a></li>
        </ul>
      </div>
  </div>
  </div>
</div>


      <div class="container col-6 text-left">
        <button type="button" class="btn btn-outline-success" name="button"><</button>
      <button type="button" class="btn btn-outline-success" name="button">></button>


      </div>

  </div>

  </div>
<<<<<<< HEAD
=======


>>>>>>> 2a752fced3b20b3f49370bcf9188e858ef1bad44
<!--
  <div class="container">
<button type="button" class="btn btn-outline-succes" name="button">Print</button>
  </div> -->
<<<<<<< HEAD
=======
</div>
>>>>>>> 2a752fced3b20b3f49370bcf9188e858ef1bad44
</div>


</div>
<div class="btn-group btn-group-justified" style="margin-bottom: 15px; float: right; margin-left: 60px">
  <button type="button" class="btn btn-primary" name="button" />View</button>
  <button type="button" class="btn btn-primary" name="button" />Print</button>
  <button type="button" class="btn btn-primary" name="button" />Clear All</button>
</div>


</div>
