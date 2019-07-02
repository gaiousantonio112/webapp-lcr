

<div class="container-fluid">

<div class="row">

  <div class="container ">


</div>
<div class="col-6">

  <div class="text-center pt-4">

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" name="radioselect" id="Birthday" value="Birth" onclick="show('formbirth');" checked>
        <label class="custom-control-label" for="Birthday">Birthday</label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" name="radioselect" id="Death" value="Death" onclick="show('formdeath');">
        <label class="custom-control-label" for="Death">Death</label>
      </div>

      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input" name="radioselect" id="Marriage" value="Marriage" onclick="show('formmerage');">
        <label class="custom-control-label" for="Marriage">Marriage</label>
      </div>


  </div>
  <div class="text-center px-5">
    WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On Page 1 of Book Number 1
  </div>




  <div id ="genformbirthday" class="container px-5 py-2">

        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
          <label for="form2">LCR Registry Number</label>
        </div>
        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
          <label for="form2">Date of Registration</label>
        </div>
        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
          <label for="form2">Name of Child</label>
        </div>
        <div class="md-form ">
          <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
          <label for="form2">Sex</label>
        </div>
        <div class="dates">
          <div class="md-form">
          <input type="date" name="formgenbday[bday_date]" id="usr1" class="form-control">
            <label >Date of Birth</label>
        </div>
    </div>
    <div class="md-form ">
      <input type="text" name="formgenbday[first_name]" id="form2" class="form-control">
      <label for="form2">Place of Birth</label>
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
  <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
  <label for="form7">Remarks</label>
</div>
      </div>
</div>
<div class="col-6 pt-5">
  <div class="">
    <embed type="application/pdf"  src="<?php echo base_url() . '/assets/pdf/samplereg.pdf#scrollbar=0&page=2&view=FitBV' ?>"width="100%" height="100%">


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
    </div>

      <div class="container col-6 text-left">
        <button type="button" class="btn btn-outline-success" name="button"><</button>
      <button type="button" class="btn btn-outline-success" name="button">></button>


      </div>

  </div>

  </div>
<!--
  <div class="container">
<button type="button" class="btn btn-outline-succes" name="button">Print</button>
  </div> -->
</div>

</div>
</div>
