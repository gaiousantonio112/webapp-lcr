
<!-- <div class="container-fluid pt-4">

  <div class="splash">
  	<div class="center">

  			<div class="bookshelf">
  				<div class="shelf">
  					<div class="row-1">
  						<div class="loc">

  							<div> <div class="sample thumb1" sample="steve-jobs"></div> </div>
  							<div> <div class="sample thumb2" sample="html5"></div> </div>
  							<div> <div class="sample thumb3" sample="docs"></div> </div>

  						</div>
  					</div>

  					<div class="row-2">
  						<div class="loc">
  							<div> <div class="sample thumb4" sample="magazine1"></div> </div>
  							<div> <div class="sample thumb5" sample="magazine2"></div> </div>
  							<div> <div class="sample thumb6" sample="magazine3"></div> </div>
  						</div>
  					</div>
  				</div>



  <div class="samples">
  		<div class="bar">
  			<div class="share">
  				<i class="icon table-contents" title="Table of contents"></i>
  				<i class="icon zoom-in" title="Zoom in"></i>
  				<i class="icon share-facebook" title="Share on facebook"></i>
  				<i class="icon share-twitter" title="Share on Twitter"></i>
  				<i class="icon share-plus" title="Share on G+"></i>
  				<i class="icon share-pinterest" title="Share on Pinterest"></i>
  			</div>
  			<a class="icon quit"></a>
  		</div>
  		<div id="book-wrapper">
  			<div id="book-zoom">

  			</div>
  		</div>
  		<div id="slider-bar" class="turnjs-slider">
  			<div id="slider"></div>
  		</div>

  	</div>
  </div>

  </div>
  <div class="gradient"></div>
  </div> -->

<div class="card">
    <div class="card-header white">
        <div class="container" style="">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="radioselectwar" id="pre-war" value="prewar" checked>
                        <label class="custom-control-label" for="pre-war">Pre War</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="radioselectwar" id="post-war" value="postwar">
                        <label class="custom-control-label" for="post-war">Post War</label>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="radio_crt_type" id="Birthday" value="birthday" checked>
                        <label class="custom-control-label" for="Birthday">Birthday</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="radio_crt_type" id="Death" value="death">
                        <label class="custom-control-label" for="Death">Death</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="radio_crt_type" id="Marriage" value="marriage" onclick="show('formmerage');">
                        <label class="custom-control-label" for="Marriage">Marriage</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

    <!-- birthday form -->

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <form id="birthdayform">
            <div id="genform-birthday" class="container genform mt-3" >
                <div class="card mb-3 info-color">
                    <div class="card-body">
                        <div class="text-center px-5 white-text font-weight-lighter"  id="certif">
                            WE CERTIFY that, among others, the following facts of birth appear in our Register of Births On
                            <div class="row" style="margin-top:-15px;">
                                <div class="md-form px-4 col-6">
                                    <select name="formgenbday[Pageno]" class="custom-select" id="birth_page_no">
                                        <option selected value=" ">Page No.</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <div class="md-form px-4 col-6">
                                    <select name="formgenbday[Bookno]" class="custom-select" id="birth_book_no">
                                        <option selected value=" ">Book No.</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 ">
                    <div class="card-body">
                        <div class="row px-4"   id="search-birthday">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 py-2 ">
                                <input type="text" name="formgenbday[bdayrefnum]" id="birth_refnum" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <button id="birth_search_btn" type="button" onclick="clickPostwar('birth')" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
                            </div>
                        </div>
                        <div class="md-form ">
                            <input  type="text" name="formgenbday[lcr_regno]" id="lcr_regno" class="form-control">
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
                            <select name="formgenbday[sex]" class="custom-select" id="sex">
                                <option selected value=" ">Sex</option>
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
                            <label for="birthplace">Place of Birth</label>
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
                            <input type="text" name="formgenbday[placemarrparents]" id="placemarrparents" class="form-control">
                            <label for="placemarrparents">Place of Marriage of Parents</label>
                        </div>
                        <div class="md-form ">
                            <input type="text" name="formgenbday[issued]" id="bdayissued" class="form-control">
                            <label for="bdayissued">THIS CERTIFICATION is issued to upon his/her request</label>
                        </div>
                        <div class="md-form mb-0 pb-0">
                            <textarea class="md-textarea form-control" rows="2" name="formgenbday[remarks]" id="birth_remarks"></textarea>
                            <label for="birth_remarks">Remarks</label>
                        </div>
                        <div class="md-form mb-0 pb-0">
                            <input required type="text" class="form-control" name="formgenbday[payor]" id="payor"></input>
                            <label for="payor">Payor Name</label>
                        </div>
                        <div class="md-form mb-0 pb-0">
                            <input readonly placeholder=" " required type="text" class="form-control" name="formgenbday[or]" id="ornobday"></input>
                            <label for="payorbirth">O.R Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center pb-5">
                        <input hidden type="text" name="formgenbday[amount]" value="50">
                    <input hidden type="text" name="formgenbday[type]" value ="Birthday Certificate">
                            <button type="submit" class="btn btn-info" name="button"  id="birthday-btn">Preview</button>
                                <button type="button" onclick="bdaygenreciept()"  class="btn btn-success" name="button"  >Submit</button>
                            <button type="reset" class="btn btn-danger" name="button">Clear All</button>
                        </div>
                    </div>
                    </form>
                </div>

            <div class="m-5"></div>
    </div>
    <!-- end of birtday form -->


    <!-- death form -->
    <div id="genform-death" class="container genform " style="margin-top: 10px">
        <form id="deathform">
            <div class="card mb-3 info-color">
                <div class="card-body">
                    <div class="text-center px-5 white-text font-weight-lighter" id="certif2">
                        WE CERTIFY that, among others, the following facts of death appear in our Register of Death On
                        <div class="row" style="margin-top:-15px;">
                            <div class="md-form px-4 col-6">
                                <select name="formgendeath[pageno]" class="custom-select" id="death_pageno">
                                    <option selected value=" ">Page No.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="md-form px-4 col-6">
                                <select name="formgendeath[bookno]" class="custom-select" id="death_bookno">
                                    <option selected value=" ">Book No.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  mb-3">
                <div class="card-body">
                    <div class="row px-5" style="float:none;margin: 10px auto" id="search-death">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 py-2 ">
                            <input type="text" name="formgendeath[reference_num]" id="death_refnum" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <button id="death_search_btn" type="button" onclick="clickPostwar('death')" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
                        </div>
                    </div>
                                     <div class="md-form ">
                            <input type="text" name="formgendeath[lcr_regno]" id="lcr_regno" class="form-control">
                            <label for="lcr_regno">LCR Registry Number</label>
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
                        <select name="formgendeath[sex]" class="custom-select" id="">
                            <option selected value=" ">Sex</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="md-form">
                        <input type="number" name="formgendeath[age]" id="deathage" class="form-control">
                        <label for="deathage">Age</label>
                    </div>
                    <div class="md-form">
                        <select name="formgendeath[civilstats]" class="custom-select">
                            <option selected value=" ">Civil Status</option>
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
                            <input type="date" name="formgendeath[death_day]" id="death_date" class="form-control">
                            <label for="death_date">Date of Death</label>
                        </div>
                    </div>
                    <div class="md-form ">
                        <input type="text" name="formgendeath[place_death]" id="place_death" class="form-control">
                        <label for="place_death">Place of Death</label>
                    </div>
                    <div class="md-form ">
                        <textarea name="formgendeath[cause_death]" class="md-textarea form-control" rows="3" id="cause_death"></textarea>
                        <label for="cause_death">Cause of Death</label>
                    </div>
                    <div class="md-form ">
                        <input type="text" name="formgendeath[issued]" id="death_issued" class="form-control">
                        <label for="death_issued">THIS CERTIFICATION is issued to upon his/her request</label>
                    </div>
                    <div class="md-form mb-0 pb-0">
                        <textarea id="death_remarks" name="formgendeath[remarks]" class="md-textarea form-control" rows="2"></textarea>
                        <label for="death_remarks">Remarks</label>
                    </div>
                    <div class="md-form mb-0 pb-0">
                            <input required type="text" class="form-control" name="formgendeath[payor]" id="payordeath"></input>
                            <label for="payordeath">Payor Name</label>
                        </div>
                        <div class="md-form mb-0 pb-0">
                        <input readonly placeholder=" " required type="text" class="form-control" name="formgendeath[or]" id="ornodeath"></input>
                          <label for="payorbirth">O.R Number</label>
                        </div>
                </div>
                <div class="row">
                <div class="col-12 text-center pb-5">
                        <input hidden type="text" name="formgendeath[amount]" value="50">
                    <input hidden type="text" name="formgendeath[type]" value ="Death Certificate">
                            <button type="submit" class="btn btn-info" name="button" id="birthday-btn">Preview</button>
                                <button type="button" onclick="deathgenreciept()"  class="btn btn-success" name="button" >Submit</button>
                            <button type="reset" class="btn btn-danger" name="button">Clear All</button>
                        </div>
                </div>
            </div>
                <div class="m-5"></div>
        </form>
    </div>
    <!-- end of death form -->


    <!-- marriage form -->
    <form id="marrform">
        <div id="genform-marriage" class="container genform" style="margin-top: 10px">
            <div class="card mb-3 info-color">
                <div class="card-body">
                    <div class="text-center px-5 white-text font-weight-lighter" id="certif3">
                        WE CERTIFY that, among others, the following facts of marriage appear in our Register of Marriage On
                        <div class="row" style="margin-top:-15px;">
                            <div class="md-form px-4 col-6">
                                <select name="marrform[pageno]" class="custom-select">
                                    <option selected value=" ">Page No.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                            <div class="md-form px-4 col-6">
                                <select name="marrform[bookno]" class="custom-select">
                                    <option selected value=" ">Book No.</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row px-5" style="float:none;margin: 10px auto" id="search-marriage">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 py-2 ">
                            <input type="text" name="marrform[refno]" id="marrform_refno" class="form-control" placeholder="Enter Reference Number..." style="box-shadow:0px 2px #CDD5D9">
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            <button id="marriage_search_btn" type="button" onclick="clickPostwar('marriage')" class="btn btn-primary" style="box-shadow:0px 5px #CDD5D9">Search</button>
                        </div>
                    </div>
                    <div class="md-form ">
                            <input type="text" name="formgendeath[lcr_regno]" id="lcr_regno" class="form-control">
                            <label for="lcr_regno">LCR Registry Number</label>
                        </div>
                    <div class="row px-3">
                        <div class="md-form col-6 ">
                            <input type="text" name="marrform[husband_name]" id="husband_name" class="form-control" />
                            <label for="husband_name">Husband's Name</label>
                        </div>
                        <div class="md-form col-6 ">
                            <input type="text" name="marrform[wife_name]" id="wife_name" class="form-control">
                            <label for="wife_name">Wife's Name</label>
                        </div>
                    </div>
                    <div class="row px-3" style="margin-top:-30px" >
                        <div class="md-form col-6 ">
                            <input type="number" name="marrform[hus_age]" id="form2" class="form-control" />
                            <label for="form2">Husband's Age</label>
                        </div>
                        <div class="md-form col-6">
                            <input type="number" name="marrform[wife_age]" id="form2" class="form-control">
                            <label for="form2">Wife's Age</label>
                        </div>
                    </div>
                    <div class="row px-3" style="margin-top:-30px">
                        <div class="md-form col-6">
                            <input type="text" name="marrform[Husband_Nationality]" id="husband_nationality" class="form-control" />
                            <label for="husband_nationality">Husband's Nationality</label>
                        </div>
                        <div class="md-form col-6">
                            <input type="text" name="marrform[Wife_Nationality]" id="wife_nationality" class="form-control">
                            <label for="wife_nationality">Wife's Nationality</label>
                        </div>
                    </div>
                    <div class="row " style="margin-top:-30px">
                        <div class="md-form col-6">
                            <select name="marrform[hus_civil_status]" class="custom-select">
                                <option selected value=" ">Husband's Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>
                        <div class="md-form col-6">
                            <select name="marrform[wife_civil_status]" class="custom-select">
                                <option selected value=" ">Wife's Civil Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Divorced">Divorced</option>
                            </select>
                        </div>
                    </div>
                    <div class="row px-3" style="margin-top:-30px">
                        <div class="md-form col-6">
                            <input type="text" name="marrform[husband_mother]" id="husband_mother" class="form-control" />
                            <label for="husband_mother">Husband's Mother</label>
                        </div>
                        <div class="md-form col-6">
                            <input type="text" name="marrform[wife_mother]" id="wife_mother" class="form-control">
                            <label for="wife_mother">Wife's Mother</label>
                        </div>
                    </div>
                    <div class="row px-3" style="margin-top:-30px">
                        <div class="md-form col-6">
                            <input type="text" name="marrform[husband_father]" id="husband_father" class="form-control" />
                            <label for="husband_father">Husband's Father</label>
                        </div>
                        <div class="md-form col-6">
                            <input type="text" name="marrform[wife_father]" id="wife_father" class="form-control">
                            <label for="wife_father">Wife's Father</label>
                        </div>
                    </div>
                    <div class="md-form ">
                        <input type="text" name="marrform[lcr_registry_num]" id="lcr_registry_num" class="form-control">
                        <label for="lcr_registry_num">LCR Registry Number</label>
                    </div>
                    <div class="dates">
                        <div class="md-form">
                            <input type="date" name="marrform[date_reg]" id="date_reg" class="form-control">
                            <label for="date_reg">Date of Registration</label>
                        </div>
                    </div>
                    <div class="dates">
                        <div class="md-form">
                            <input type="date" name="marrform[date_marriage]" id="date_marriage" class="form-control">
                            <label>Date of Marriage</label>
                        </div>
                    </div>
                    <div class="md-form ">
                        <input type="text" name="marrform[place_marriage]" id="place_marriage" class="form-control">
                        <label for="place_marriage">Place of Marriage</label>
                    </div>
                    <div class="md-form ">
                        <input type="text" name="marrform[issued]" id="marriage_issued" class="form-control">
                        <label for="marriage_issued">THIS CERTIFICATION is issued to upon his/her request</label>
                    </div>
                    <div class="md-form pb-0 mb-0">
                        <textarea id="marriage_remarks" name="marrform[Remarks]" class="md-textarea form-control" rows="2"></textarea>
                        <label for="marriage_remarks">Remarks</label>
                    </div>
                    <div class="md-form mb-0 pb-0">
                            <input required type="text" class="form-control" name="marrform[payor]" id="payormarr"></input>
                            <label for="payormarr">Payor Name</label>
                        </div>
                        <div class="md-form mb-0 pb-0">
                            <input readonly placeholder=" " required type="text" class="form-control" name="marrform[or]" id="ormarr"></input>
                            <label for="payorbirth">O.R Number</label>
                        </div>

                <div class="row">
                <div class="col-12 text-center pb-5">
                        <input hidden type="text" name="marrform[amount]" value="50">
                    <input hidden type="text" name="marrform[type]" value ="Marriage Certificate">
                            <button type="submit" class="btn btn-info" name="button"  id="birthday-btn">Preview</button>
                                <button type="button" onclick="marrgenreciept()"  class="btn btn-success" name="button"  >Submit</button>
                            <button type="reset" class="btn btn-danger" name="button">Clear All</button>
                        </div>
                </div>
                </div>
            </div>


        </div>
    </form>
    <div class="m-5"></div>
</div>
<!-- end of marr -->



<div class=" pt-2 col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="sticky-top" style="position: sticky; z-index:2; top:0; position: -webkit-sticky;">

           <iframe src="<?php echo base_url() ?>/pages/book" class=" prewar_view z-depth-1 mb-4 " id="prewar_image" width="90%" height="30%" style="margin-top:10px"></iframe>
           <!-- <iframe src="<?php echo base_url() ?>/pages/book" class=" prewar_view z-depth-1 mb-4 " id="prewar_image" width="100%" height="35%" style="margin-top: 80px"></iframe> -->
            <iframe  src="<?php echo base_url() . 'pages/viewlcrform'?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100" class="postwar_view z-depth-1 mb-5 " id="postwar_image" width="100%" height="80%" style="margin-top: 80px"></iframe>
    </div>


    <div class="rows ">

        <!-- Birthday Modal -->
        <div class="modal fade" id="modalBirthday" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="max-width:950px" role="document">
                <div class="modal-content p-0 m-0">
                    <div class="modal-header pb-0 p-2" style="background-color: tomato">
                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">
                    </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>
                    <div class="md-form mb-4 ">
                        <iframe width="100%" height="490px" id="iframe_preview_formgen"  ></iframe>

                        <div class="modal-footer m-0 P-0">
                       <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Death Modal-->
        <!-- <div class="modal fade" id="modalDeath" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg w-auto h-auto" style="max-width:950px" role="document">
                <div class="modal-content">
                    <div class="modal-header p-2" style="background-color: tomato">
                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview Death</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="md-form mb-4">
                        <iframe width="100%" id="" height="75%" src="<?php echo base_url() . 'pages/viewdeathlcrform'?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100"></iframe>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Marriage Modal -->
        <!-- <div class="modal fade" id="modalMarriage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg w-auto h-auto" style="max-width:950px" role="document">
                <div class="modal-content">
                    <div class="modal-header p-2" style="background-color: tomato">
                        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Preview Marriage</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="md-form mb-4">
                        <iframe width="100%" height="75%" src="<?php echo base_url() . 'pages/viewmarriagelcrform'?>#toolbar=0&navpanes=0&scrollbar=0&view=fitH,100"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-inline text-center" style="">
        </div>
    </div>
</div>
</div>
</div> -->


<div class="modal fade" id="recipet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

<!-- Change class .modal-sm to change the size of the modal -->



<!-- Change class .modal-sm to change the size of the modal -->
<div class="modal-dialog modal-lg" role="document">


<div class="modal-content">
    <div class="modal-header" style="background-color: tomato">
        <h4 class="modal-title white-text w-50 font-weight-bold" id="myModalLabel">Reciept</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
        </button>

    </div>
    <div class="modal-body p-0 m-0">
    <iframe id="myframe" frameborder="0" width="100%" height="450px"></iframe>
    </div>
    <div class="modal-footer">

                <input type="hidden" name="class" id="classification">

            <button onclick = "printrecipt()" type="button" class="btn btn-primary btn-sm">Print</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
    </div>
</div>
</div>
</div>



<div class="modal fade" id="done" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">

<!-- Change class .modal-sm to change the size of the modal -->
<div class="modal-dialog modal-sm" role="document">


<!-- <form id="addHistoryForm"> -->

<form id="savedataofprint">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Alert!</h4>
        </div>
        <div class="modal-body">

                Done Printing?
                <input type="hidden" name="history[ref_num]" id="ref_num" >
                <input type="hidden" name="history[or_num]" id="or_num" >
                <input type="hidden" name="history[req_name]" id="req_name" >
                <input type="hidden" name="history[name]" id="name_history" >
                <input type="hidden" name="history[type]" id="type" >
                <input type="hidden" name="history[date]" id="dt_history" >
                <input type="hidden" name="history[page]" id="page" >
                <input type="hidden" name="history[no_copy]" id="no_copy" >
                <input type="hidden" name="history[verify_by]" id="verify_by" >

                <input type="hidden" name="history[remarks]" id="remarks" >
                <input type="hidden" name="history[print]" id="print" >
                <input type="hidden" name="history[cs_encoder]" id="cs_encoder1" >
                <input type="hidden" name="history[printed_by]" id="printed_by" >
                <input type="hidden" name="history[or_amount]" id="or_amount" >
                <input type="hidden" name="history[wife_name]" id="wife_names" >
                <input type="hidden" name="history[inputname]" id="pharse" >

                <iframe src="" id="print_rec_holder" hidden frameborder="0"></iframe>
        </div>
        <div class="modal-footer">


                <button type="submit" class="btn btn-primary btn-sm">Yes</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No</button>
        </div>
    </form>
    </div>

</div>

</div>
