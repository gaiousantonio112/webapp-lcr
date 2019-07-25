

<div class="container pt-5">
  	<div class=" container text-right pt-3" >
  					<div class="teal lighten-1 z-depth-1 " style="height:52px;border-radius:3px">
  						<span><img src="<?php echo base_url() .'/assets/svg/dashboard2(samp).svg' ?>" height="40px" alt="" style="float:right" class="px-3 mt-2"></span>
  						<p style="color:white; float:right; font-size: 30px;" class="pt-2">User Manager</p>
  					</div>
  	</div>
</div>

<div class="container pt-4">
	<div class="card">
		<div class="card-header bg-primary">
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[First]" id="First" class="form-control">
            <label for="First">First Name</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[Middle]" id="Middle" class="form-control">
            <label for="Middle">Middle Name</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[Last]" id="Last" class="form-control">
            <label for="Last">Last Name</label>
          </div>
        </div>
        <div class="col-lg-12 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[Address]" id="Address" class="form-control">
            <label for="Address">Address</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[Username]" id="Username" class="form-control">
            <label for="Username">Username</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input type="text" name="user[Password]" id="Password" class="form-control">
            <label for="Password">Password</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <lable for='typ'>TYPE</label>
          <select name="user[type]" class="custom-select" id="typ">
            <option selected value="User">User</option>
            <option value="Admin">Admin</option>
          </select>
        </div>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-sm btn-success" name="button">Submit</button>
      </div>

    </div>
  </div>
</div>

<div class="container pt-3">
<div class="card">
<div class="card-body">

  <table id="tbl_users" class="table table-sm table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
      <tr>
        <th class="th-sm">ID
        </th>
        <th class="th-sm">Username
        </th>
        <th class="th-sm">Full Name
        </th>
        <th class="th-sm" id="whatType">Address
        </th>
        <th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>

    </tbody>

  </table>



</div>
</div>
</div>
