
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

// $('#dtBasicExample').dataTable( {
//   "initComplete": function( settings, json ) {
//    $('.loading').fadeOut('slow');
//   }
// } );

$(document).ready(function () {
// $('#dtBasicExample').DataTable();
// $('#tb_mainlcr').DataTable( {
//   "initComplete": function(settings, json) {
//     alert( 'DataTables has finished its initialisation.' );
//   }
// } );
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
	    $('#birthdaymodal').show();
			$('#deathmodal').hide();
			$('#marriagemodal').hide();

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
	   $('#birthdaymodal').show();
		 	   $('#deathmodal').hide();
	 	   $('#marriagemodal').hide();
}
if(page == 'searchdeath'){

  $('#birthdeath').hide();
	   $('#birthdaymodal').hide();
		 	   $('#deathmodal').show();
				  	   $('#marriagemodal').hide();

}
if(page == 'searchmerage'){

  $('#birthdeath').show();
		   $('#birthdaymodal').hide();
			 		 	   $('#deathmodal').hide();
			 	   $('#marriagemodal').show();

}
if(page == 'default'){
document.getElementById('pageno').value='1-2' ;
document.getElementById('pageno').disabled = true;
}
if(page == 'specific'){
	document.getElementById('pageno').disabled = false;
document.getElementById('pageno').value='1' ;

}
if(page == 'range'){
	document.getElementById('pageno').disabled = false;
document.getElementById('pageno').value='1-2' ;

}



}

</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/admin_charts.js'); ?>"></script>
