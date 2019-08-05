
<script type="text/javascript">
  var userid = '<?php print($this->session->userdata('user_id')); ?>';
</script>

<script src="<?php print(base_url()); ?>/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/popper/popper.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/mdb.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables-select.min.js "></script>

<script src="<?php echo base_url(); ?>/assets/js/global.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/login/login.js"></script>
<script src="<?php print(base_url());?>/assets/js/dashboard/jquery.bootstrap-growl.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/global.js'); ?>">
</script>

<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/main.js'); ?>"></script>

<script>

			$(function() {
        $('.yearpick #year').datepicker({
          format: "yyyy",
      viewMode: "years",
      minViewMode: "years",
      autoclose: true
        });

			$('.dates #empdate_birthday').datepicker({
				'format': 'yyyy-mm-dd',
				'autoclose': true
			});
  });

  </script>
