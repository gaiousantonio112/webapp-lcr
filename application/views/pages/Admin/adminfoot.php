
<script src="<?php print(base_url()); ?>/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/popper/popper.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/mdb.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables-select.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/datepicker/calendar/lib/bootstrap-datepicker.js"></script>
<script src="<?php print(base_url());?>/assets/js/dashboard/jquery.bootstrap-growl.min.js" charset="utf-8"></script>
<script type="text/javascript">
var userid = '<?php print($this->session->userdata('user_id')); ?>';


</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/global.js'); ?>">

</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/admin.js'); ?>"></script>
<script>

			$(function() {
        $('.yearpick #year').datepicker({
          format: "yyyy",
      viewMode: "years",
      minViewMode: "years",
      autoclose: true
        });

			$('.dates #usr1').datepicker({


				'format': 'yyyy-mm-dd',
				'autoclose': true
			});
		});




$(document).ready(function() {

}

</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/admin_charts.js'); ?>"></script>
