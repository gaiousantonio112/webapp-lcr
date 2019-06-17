
<script src="<?php print(base_url()); ?>/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/popper/popper.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/mdb.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables-select.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/datepicker/calendar/lib/bootstrap-datepicker.js"></script>

<script type="text/javascript">

var userid = '<?php print($this->session->userdata('user_id')); ?>';

$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});

if(PDFObject.supportsPDFs){
console.log("Yay, this browser supports inline PDFs.");
} else {
console.log("Boo, inline PDFs are not supported by this browser");
}
</script>
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

			$('.dates #usr1').datepicker({


				'format': 'yyyy-mm-dd',
				'autoclose': true
			});




		});





			</script>
<script>




$(document).ready(function() {

  $('#birthdeath').hide();
   $('#birth').show();
        $('#death').hide();
             $('#merage').hide();
});
function show(page){
   $('#'+page).show();

if(page == 'birth'){
$('#death').hide();
     $('#merage').hide();

}
if(page == 'death'){
   $('#birth').hide();
     $('#merage').hide();
}if(page == 'merage'){

$('#birth').hide();
     $('#death').hide();
}



if(page == 'searchbirth'){

  $('#birthdeath').hide();
}
if(page == 'searchdeath'){

  $('#birthdeath').hide();
}
if(page == 'searchmerage'){

  $('#birthdeath').show();
}



}

</script>
