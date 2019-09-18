<div class="container-fluid pt-4 px-5">

    <div class="z-depth-1 title-Div">
      <span><img class = "title-Divimg" src="<?php echo base_url() .'/assets/svg/usermanager2(ecris).svg' ?>" ></span>
      <h2 class="white-text float-right title-text">User Manager</h2>
    </div>

<form id="adduser">

<div class="container pt-4">

	<div class="card">
		<div class="card-header bg-white">
      <h4 class =""><img src="<?php echo base_url() .'/assets/svg/registeruser(ecris).svg' ?>" height="35px">Register User</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input required type="text" name="user[First]" id="First" class="form-control">
            <label for="First">First Name</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input required type="text" name="user[Middle]" id="Middle" class="form-control">
            <label for="Middle">Middle Name</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input required type="text" name="user[Last]" id="Last" class="form-control">
            <label for="Last">Last Name</label>
          </div>
        </div>
        <div class="col-lg-12 col-sm-12">
          <div class="md-form ">
            <input required type="text" name="user[Address]" id="Address" class="form-control">
            <label for="Address">Address</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input required type="text" name="user[Username]" id="Username" class="form-control">
            <label for="Username">Username</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="md-form ">
            <input required type="password" name="user[Password]" id="Password" class="form-control">
            <label for="Password">Password</label>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <lable for='typ'>TYPE</label>
          <select name="user[type]" class="custom-select" id="typ">
            <option selected value="User">User</option>
            <option value="Admin">Admin</option>
            <option value="Cashier">Cashier</option>
          </select>
        </div>
      </div>

    </div>
    <div class="card-footer">
    <div class="col-12 text-center">
      <!-- <button type="submit" class="btn btn-sm btn-success" name="button">Submit</button>
      <button type="reset" class="btn btn-sm btn-danger" name="button">Clear All</button> -->

      <button class="btn btn-lg btn-outline-primary m-0 px-3 py-2 z-depth-0" type="submit" id="">
        <img src="<?php echo base_url() . '/assets/svg/submmit button (ecris).svg' ?>" style="height: 15px;"> Submit</button>
      <button class="btn btn-lg btn-outline-danger m-0 px-3 py-2 z-depth-0" type="reset" id="">
        <img src="<?php echo base_url() . '/assets/svg/clear all button (ecris).svg' ?>" style="height: 15px;"> Clear All</button>
      </div>

    </div>
    </div>
  </div>
</div>
</form>

<div class ="container px-2">
<div class="card">
<div class="card-body">

  <table id="tbl_users" class="table table-responsive table-sm table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
      <tr>
        <th class="th-sm">ID
        </th>
        <th class="th-sm">Username
        </th>
        <th class="th-sm">Full Name
        </th>
        <th class="th-sm" >Address
        </th>
        <th class="th-sm" >Type
        </th>
        <th class="th-sm" width='25%'>Action
        </th>
      </tr>
    </thead>
    <tbody>

    </tbody>

  </table>

</div>
</div>
</div>




<form id="edituser">
  <div class="modal fade" id="editusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="md-form ">
                <input required placeholder=" " type="text" name="edit[id]" id="editid" class="form-control" hidden>
              <input required placeholder=" " type="text" name="edit[First]" id="editFirst" class="form-control">
              <label for="First">First Name</label>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="md-form ">
              <input required placeholder=" " type="text" name="edit[Middle]" id="editMiddle" class="form-control">
              <label for="Middle">Middle Name</label>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="md-form ">
              <input required placeholder=" " type="text" name="edit[Last]" id="editLast" class="form-control">
              <label for="Last">Last Name</label>
            </div>
          </div>
          <div class="col-lg-12 col-sm-12">
            <div class="md-form ">
              <input required placeholder=" " type="text" name="edit[Address]" id="editAddress" class="form-control">
              <label for="Address">Address</label>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="md-form ">
              <input required placeholder=" " type="text" name="edit[Username]" id="editUsername" class="form-control">
              <label for="Username">Username</label>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-sm-12">
            <div class="md-form ">
              <input required placeholder=" " type="password" name="edit[Password]" id="editPassword" class="form-control">
              <label for="Password">Password</label>
            </div>
          </div> -->
          <div class="col-lg-6 col-sm-12">
            <lable for='typ'>TYPE</label>
            <select name="edit[type]" class="custom-select" id="edittyp">
              <option selected value="User">User</option>
              <option value="Admin">Admin</option>
              <option value="Cashier">Cashier</option>
            </select>
          </div>
        </div>

        <div class="col-12">
          <div class="custom-control custom-checkbox">
         <input type="checkbox" class="custom-control-input" id="defaultUnchecked"  data-toggle="collapse" href="#hidepass" aria-expanded="false" aria-controls="hidepass">
          <label class="custom-control-label" for="defaultUnchecked">Change Password</label>
        </div>

        <div class="collapse" id="hidepass">
          <div class="mt-3">
            <div class="md-form ">
              <input  placeholder="" type="password" name="edit[password]" id="editPassword" class="form-control">
              <label for="editPassword">Password</label>
            </div>      </div>
        </div>

        </div>



      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-success ">Save changes</button>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</form>




<!-- Modal -->
<div class="modal fade" id="deleteusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<form id="deleteuser">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Delete</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="text" name="del[id]" id="delid" hidden>

					Are you Sure?
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning">Delete</button>
					<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>

				</div>
			</div>
		</div>
	</form>
</div>
