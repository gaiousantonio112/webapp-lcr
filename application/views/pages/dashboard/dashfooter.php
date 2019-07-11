
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

	$(".genform").hide();
	$(".previewbtn").hide();
	$(".prewar_view").hide();
	$(".postwar_view").hide();
	$("#birthday_prewar").show();
	$("#genform-birthday").show();
  $("#birthday-btn").show();
	$("#search-birthday").hide();
	$("#search-death").hide();
	$("#search-marriage").hide();



$("input[name$='radioselect']").click(function() {
	 			  var test = $(this).val();
					$(".genform").hide();
					$(".previewbtn").hide();
					$("#"+test+"-btn").show();
					$("#genform-"+test).show();

});

$("#prewar_image").show();
 $("#post-war").click(function() {
		 $("#search-birthday").show();
		 $("#search-death").show();
		 $("#search-marriage").show();
		 			$("#prewar_image").hide();
		 			$("#postwar_image").show();
			// $("input[name$='radioselect']").click(function() {
			// if ($('input[name=radioselectwar]:checked').val() == "postwar"){
			// 	$(".postwar_view").hide();
			// 	$(".prewar_view").hide();
			// 	$("#postwar_image").show();
			// 	}
			// 	});

 });


 $("#pre-war").click(function() {
	 	$("#search-birthday").hide();
		$("#search-death").hide();
		 $("#search-marriage").hide();
		 $("#postwar_image").hide();
		 $("#prewar_image").show();


			// if ($('input[name=radioselect]:checked').val() == "birthday"){
			// 		$(".prewar_view").hide();
			// 		$("#birthday_prewar").show();
			// }
			// else if ($('input[name=radioselect]:checked').val() == "death"){
			// 		$(".prewar_view").hide();
			// 		$("#death_prewar").show();
			// }
			// else{
			// 		$(".prewar_view").hide();
			// 		$("#marriage_prewar").show();
			// }

 });


	$('#Birthday').click(function(){
			$('#certif').slideDown();
			$('#certif3').fadeOut();
			$('#certif2').fadeOut();
	});

	$('#Death').click(function(){
			$('#certif2').slideDown();
			$('#certif3').fadeOut();
			$('#certif').fadeOut();

	});

	$('#Marriage').click(function(){
			$('#certif3').slideDown();
			$('#certif2').fadeOut();
			$('#certif').fadeOut();
	});

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
