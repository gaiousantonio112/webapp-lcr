
<body class="bg-white">
    <div id="login" class="container pt-4">

      <div class="container  pt-3">
<div class="row">
<div class="col-6 ">
    <img src="../../../../assets/img/spclogo.png"  alt="">
</div>
<div  class="vl">
</div>
<div class="col-5 text-center ml-5">
  <form id="login_form" class="">
  <img src="<?php base_url()?>/assets/img/ecrislogo.svg" style="width: 330px;" alt="">
      <div class="container col-9">
        <div class="row">
          <div class=" col-3">
            <img src="<?php echo base_url() . '/assets/svg/USERLOGO.svg'?>" style="height: 100px;" alt="">
          </div>
<div class="p-0 col-9">
<div class="md-form ">
      <input type="text"  id="username" name="login[username]" class="form-control" required>
          <label for="username">Username</label>
          </div>
</div>
<div class="col-3">
  <img src="<?php echo base_url() . '/assets/svg/PWLOGO.svg'?>"  style="height: 100px; " alt="">
</div>
      <div class=" p-0 col-9">
        <div class="md-form">
              <input type="password"  id="password" name="login[password]" class="form-control" required>
                  <label for="password">Password</label>
                  </div>
        </div>
      </div>  </div>
      <div class="form-group">
                <input type="submit" name="submit" class="btn btn-outline-primary btn-lg" value="Login">
      </div>
  <a class="nav-link text-primary  "  data-toggle="modal" data-target="#settings">Settings </a>
  </form>
</div>

</div>




        <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-md" role="document">


        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Settings</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="container text-center  col-6">

        <form id="login-form" class="form" action="" method="post">

            <div class="form-group  ">
              <div class="md-form ">
                    <input type="text"  id="serverip" name="" class="form-control" required>
                        <label for="serverip">Server IP</label>
                        </div>

                      <div class="md-form ">
                            <input type="text"  id="Username" name="" class="form-control" required>
                                <label for="Username">Database Username</label>
                                </div>

                              <div class="md-form ">
                                    <input type="text"  id="Password" name="" class="form-control" required>
                                        <label for="Password">Database Password</label>
                                        </div>

                                      <div class="md-form ">
                                            <input type="text"  id="Database" name="" class="form-control" required>
                                                <label for="Database">Database Name</label>
                                                </div>

                                              <div class="md-form ">
                                                    <input type="text"  id="Database2" name="" class="form-control" required>
                                                        <label for="Database2">Database2 Name</label>
                                                        </div>
                                          </div>




        </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm">Save changes</button>

        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
