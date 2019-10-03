
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

	$(".submit-btn").hide();
	$('#btn-Birth').show();
	$('#btn-Death').hide();
	$('#btn-Marriage').hide();

$("input[name$='radio_crt_type']").click(function() {
	 			  var test = $(this).val();
          console.log(test);
					$(".genform").hide();
					$(".previewbtn").hide();
					$("#"+test+"-btn").show();
          $("#genform-"+test).show();

          console.log();
});


$("input[name$='radioselect']").click(function() {
	 			  var test = $(this).val();
					$(".submit-btn").hide();
					$("#btn-"+test).show();
});

$("#prewar_image").show();
 $("#post-war").click(function() {
		 $("#search-birthday").show();
		 $("#search-death").show();
		 $("#search-marriage").show();
		 			$("#prewar_image").hide();
		 			$("#postwar_image").show();

 });

 $("#pre-war").click(function() {
	 	$("#search-birthday").hide();
		$("#search-death").hide();
		 $("#search-marriage").hide();
			 $("#postwar_image").hide();
			 $("#prewar_image").show();
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
