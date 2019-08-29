
<script type="text/javascript">
  var userid = '<?php print($this->session->userdata('user_id')); ?>';
</script>

<script src="/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="/assets/popper/popper.min.js" ></script>
<script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/MBD/js/mdb.min.js" ></script>
<script src="/assets/MBD/js/addons/datatables.min.js "></script>
<script src="/assets/MBD/js/addons/datatables-select.min.js "></script>

<script src="/assets/js/dashboard/jquery.bootstrap-growl.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/global.js'); ?>">
</script>
<script type="text/javascript" src="<?php print('/assets/client/js/'.$file_name) ?>">

</script>
<script src="<?php print(base_url());?>/assets/js/client/clientform.js" charset="utf-8"></script>

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
