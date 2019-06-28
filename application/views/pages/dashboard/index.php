<div class="container-fluid  pt-4 px-5">
<div class="container  text-right">


<h3 class="font-weight-bold"><b><img src="<?php echo base_url() .'/assets/svg/dashboard(ecris).svg' ?>" height="45px" alt=""> Dashboard</h3>
</div>

</b>
</div>

<div class="container  p-3">

<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card  py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Service Provided</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800" id="service_provided" >Loading...</div>
            </div>
            <div class="col-auto">
            <img src="<?php echo base_url() .'/assets/svg/service provided(ecris).svg' ?>" height="35px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card  py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-centr">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Earnings</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800" id="total_earnings" >Loading...</div>
            </div>
            <div class="col-auto pt-2">
  <img src="<?php echo base_url() .'/assets/svg/earnings (ecris).svg' ?>" height="35px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card  py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="task_text_percent" >Loading...</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar"  id="task_bar_percent" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <img src="<?php echo base_url() .'/assets/svg/task(ecris).svg' ?>" height="35px" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card  py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800" id="pending_request" >Loading...</div>
                    </div>
                    <div class="col-auto">
                      <img src="<?php echo base_url() .'/assets/svg/pending request(ecris).svg' ?>" height="35px" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <div class="container card col-10">
        <canvas id="lineChart"></canvas>
        </div>
  </div>


<div class="p-5"></div>
