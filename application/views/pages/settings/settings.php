<body class="bg-dark">
    <div id="settings" >

        <div class="login container">
            <div id="login-row" class=" row justify-content-center align-items-center">
                <div id="login-column" class="  card pt-4 col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Settings</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Server Ip:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Database Username:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Database Password:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Database Name:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Database2 Name:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-center">
                              <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                  <input type="submit" name="submit" class="btn btn-info btn-lg" value="Submit">
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">

                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                  <a href="<?php print(base_url().'/'); ?>" class="btn btn-danger btn-lg">
                                    Back
                                  </a>
                                </div>
                              </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
</body>
