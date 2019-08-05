<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/clientform.css" >

<!-- multistep form -->


<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Social Profiles</li>
    <li>Personal Details</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />

       <div class="container-fluid " >
          <div class="row">
            <div class = "col-lg-12 text-center ">
                <h2>GET YOUR PSA CERTIFICATE</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <hr class = " ">
            </div>

            <div class = "fx2 col-12 text-center img-center" align="center" >

                <a href="<?php echo base_url() . 'pages/client/birth_certificate'  ?>" >
                <div class="col4 text-center item">
                  <img class = "transition img-responsive"src="<?php echo base_url() .'/assets/img/birth-cert.png' ?>">
                  <p class="">Birth Certificate</p>
                </div>
                </a>

                <a href="<?php echo base_url() . 'pages/client/marriage'  ?>" >
                <div class="col4 text-center item ">
                    <img class = "transition img-responsive " src="<?php echo base_url() .'/assets/img/marriage-cert.png' ?>">
                    <p class="nav-text">Marriage Certificate</p>
                </div>
                </a>

                <a href="<?php echo base_url() . 'pages/client/death'  ?>" >
                <div class="col4 text-center item ">
                    <img class = "transition img-responsive" src="<?php echo base_url() .'/assets/img/death-cert.png' ?>" >
                  <p>Death Certificate</p>
                </div>
                </a>

          </div>
        </div>
      </div>
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset>
</form>
