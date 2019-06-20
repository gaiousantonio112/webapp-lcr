
<body class="bg-light">
    <div id="login" class="container pt-5">

      <div class="container  ">

        <div class="card py-5" >
            <div class="container text-center py-3 px-5">
          <div class="row">
              <div class="col-md-6 ">
                <img src="../../../../assets/img/spclogo.png" style=" height: 70%; min-height: 60%;" alt="">
              </div>

              <div class="col-md-6 py-5">
              <div class=" login">
                <!-- <h5 class="card-header bg-primary  white-text text-center py-4">
                       <strong>Login</strong>
                   </h5> -->

                   <form id="login_form" class="pt-3">
                       <div class="container col-9">
                       <div class="form-group ">
                         <div class="md-form ">
                               <input type="text"  id="username" name="login[username]" class="form-control" required>
                                   <label for="username">Username</label>
                                   </div>


                       </div>
                       <div class="form-group">
                         <div class="md-form">
                               <input type="text"  id="password" name="login[password]" class="form-control" required>
                                   <label for="password">Password</label>
                                   </div>

                       </div>  </div>
                       <div class="form-group">
                                 <input type="submit" name="submit" class="btn btn-outline-primary btn-lg" value="Login">
                       </div>

                   </form>
<a class="nav-link text-primary"  data-toggle="modal" data-target="#settings">Settings </a>
              </div>
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
