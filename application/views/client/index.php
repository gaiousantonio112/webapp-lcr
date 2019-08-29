<div class="container-fluid px-5 pt-3">

    <div class="jumbotron mt-5">
  	   <div class="container-fluid " >
    	    <div class="row">
            <div class = "col-lg-12 text-center ">
                <h2>GET YOUR PSA CERTIFICATE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr class = " ">
            </div>

            <div class = "fx2 col-12 text-center img-center" align="center" >

                <a href="<?php echo base_url() . 'client/pages/birth_certificate'  ?>" >
          			<div class="col4 text-center item">
                  <img class = "transition img-responsive"src="<?php echo base_url() .'/assets/img/birth-cert.png' ?>">
                  <p class="">Birth Certificate</p>
                </div>
                </a>

                <a href="<?php echo base_url() . 'client/pages/marriage'  ?>" >
          			<div class="col4 text-center item ">
                    <img class = "transition img-responsive " src="<?php echo base_url() .'/assets/img/marriage-cert.png' ?>">
                    <p class="nav-text">Marriage Certificate</p>
                </div>
                </a>

                <a href="<?php echo base_url() . 'client/pages/death'  ?>" >
          			<div class="col4 text-center item ">
                    <img class = "transition img-responsive" src="<?php echo base_url() .'/assets/img/death-cert.png' ?>" >
                  <p>Death Certificate</p>
                </div>
                </a>

          </div>
		    </div>
      </div>

</div>

</div>
<div class = "">
  <div class = "">
<div class ="bg-white text-center p-2 z-depth-2">
<small class = "grey-text">  San Pablo City </small>
</div>
</div>
</div>



<form id="regForm" action="">
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
<h1>Register:</h1>

<!-- One "tab" for each step in the form: -->
<div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''"></p>
  <p><input placeholder="Last name..." oninput="this.className = ''"></p>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''"></p>
  <p><input placeholder="mm" oninput="this.className = ''"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>
<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''"></p>
  <p><input placeholder="Password..." oninput="this.className = ''"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->


</form>
