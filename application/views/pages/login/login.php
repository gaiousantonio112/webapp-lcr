<link rel="stylesheet" href="../../../../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../../../../assets/fontawesome-5.9.0/css/all.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/mdb.min.css">
<link rel="stylesheet" href="../../../../assets/MBD/css/style.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/login/front.css" >

<style media="screen">
  .vl{
    border-left: 3px solid #494949;
    height: 500px;
  }
  .spc{
    width: 100%;
height: auto;
  }


#main {
  position: relative;
z-index: 0;

}
#drop {
position: absolute;
z-index: 1;

}
</style>


<body class="bg-white">
    <div id="login" class="container pt-4">

<div class="container  pt-3">
<div class="row">

<div class="col-sm-12 col-lg-6 p-5 ">
    <img class="spc fadeIn first" src="../../../../assets/img/spclogo.png" alt="">
</div>
<div class="vl">
</div>
<div class="col-sm-12 col-lg-5 p-5 mt-4">
  <h3 class="display-3 fadeIn first text-left black-text" style='font-size: 63px'>ELECTRONIC CIVIL REGISTRY INFORMATION SYSTEM</h3>
</div>

<div id="drop" class="wrapper fadeInDown mt-5" >

  <div id="formContent">
    <form id="login_form" class="">
      <div class= "px-5 py-2 blue-gradient">
        <div class="col-auto">
        <img src="<?php base_url()?>/assets/img/ecrislogo.svg" style="width:130px; " alt="" >

        <p class="light text-white" style="font-weight: lighter; font-family: Roboto;font-size:17px">Electronic Civil Registry Information System</p>
      </div>
      </div>
      <div class="container col-10 mb-2 py-0 ">
        <div class="container col-12">
          <div class="row mt-3">

            <div class="col-3">
              <img src="<?php echo base_url() . '/assets/svg/USERLOGO.svg'?>" style="height: 50px;" alt="" class="mt-4">
            </div>
          <div class="p-0 col-9">
            <div class="md-form ">
              <input type="text"  id="username" name="login[username]" class="form-control px-1" required>
              <label for="username" class="px-1">Username</label>
            </div>
          </div>
            <div class=" col-3">
              <img src="<?php echo base_url() . '/assets/svg/PWLOGO.svg'?>"  style="height: 50px; " alt="" class="mt-4">
            </div>

          <div class="p-0 col-9">
            <div class="md-form">
                <input type="password"  id="password" name="login[password]" class="form-control px-1" required>
                <label for="password" class="px-1">Password</label>
            </div>
          </div>

            </div>

      <div class="form-group">
          <input type="submit" name="submit" class="btn btn-rounded white z-depth-1 blue-text" style="width: 200px; border-radius: 40px; border: 1px solid " value=" Login">
      </div>



      </div>
    </div>
    <div class="modal-footer py-0 pt-1">
      <a class="nav-link text-primary" data-toggle="modal" data-target="#settings">Settings </a>
      </form>
    </div>
  </div>
</div>


  <div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-md" role="document" style="width:450px">

        <div class="modal-content">
        <div class="modal-header p-2" style="background-color: tomato">

        <h4 class="modal-title white-text w-100 font-weight-bold py-2 px-2" id="myModalLabel">Settings</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="container text-center  col-9">

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



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
<!-- Central Modal Small -->
