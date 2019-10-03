
<script src="<?php print(base_url()); ?>/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/popper/popper.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/mdb.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables-select.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/datepicker/calendar/lib/bootstrap-datepicker.js"></script>
<script src="<?php print(base_url());?>/assets/js/dashboard/jquery.bootstrap-growl.min.js" charset="utf-8"></script>
<script src="<?php print(base_url());?>/assets/js/dashboard/book.js"></script>


<script type="text/javascript">
var userid = '<?php print($this->session->userdata('user_id')); ?>';

// $('#dtBasicExample').dataTable( {
//   "initComplete": function( settings, json ) {
//    $('.loading').fadeOut('slow');
//   }
// } );

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

$('.dates #date_reg, #birthdate, #marriagedate,#death_date_reg').datepicker({
	'format': 'yyyy-mm-dd',
	'autoclose': true
});

$('.dates #death_date,#death_date_reg,#date_marriage').datepicker({
	'format': 'yyyy-mm-dd',
	'autoclose': true
});

$('.dates #updatebday_bday_dt,#updatedeath_death_date,#updatemarr_date_of_marriage').datepicker({
	'format': 'yyyy-mm-dd',
	'autoclose': true
});

});


$(document).ready(function () {


// $('#dtBasicExample').DataTable();
// $('#tb_mainlcr').DataTable( {
//   "initComplete": function(settings, json) {
//     alert( 'DataTables has finished its initialisation.' );
//   }
// } );
$('.dataTables_length').addClass('bs-select');
});
//
// if(PDFObject.supportsPDFs){
// console.log("Yay, this browser supports inline PDFs.");
// } else {
// console.log("Boo, inline PDFs are not supported by this browser");
// }
</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/global.js'); ?>">

</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/main.js'); ?>"></script>
<!-- //orpage //dean -->
<script src="<?php print(base_url());?>/assets/js/dashboard/orpage.js"></script>


<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/admin_charts.js'); ?>"></script>
