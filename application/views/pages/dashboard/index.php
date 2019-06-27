<div class="container-fluid  pt-4 px-5">
<div class="container  text-right">


<h3 ><b><i class="fas fa-columns"></i> Dashboard</h3>
</div>

</b>
</div>
<button type="button" class="btn btn-secondary" onclick="notif()">
  Toast
</button>

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
              <i class="fas fa-calendar fa-2x text-light"></i>
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
              <i class="fas fa-dollar-sign fa-2x text-light"></i>
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
              <i class="fas fa-clipboard-list fa-2x text-light py"></i>
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
                      <i class="fas fa-comments fa-2x text-light"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container card col-10">
        <canvas id="lineChart"></canvas>
        </div>
<div class="container p-2">
<div class="d-flex flex-row">

  <div class="container card col-6">
<canvas id="myChart"  style="max-width: 500px;"></canvas>
</div>

  <div class="container card col-5">
<canvas id="pieChart"></canvas>
</div>
</div>
</div>




<div class="p-5"></div>
