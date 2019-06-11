
<<<<<<< HEAD
<script src="../../../../assets/jquery/jquery-3.4.1.min.js"></script>
<script src="../../../../assets/popper/popper.min.js" ></script>
<script src="../../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../../../assets/MBD/js/mdb.min.js" ></script>
<script src="../../../../assets/MBD/js/addons/datatables.min.js "></script>
<script src="../../../../assets/MBD/js/addons/datatables-select.min.js "></script>
  <script type="text/javascript">


  $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  });

  $(document).ready(function() {
     $('#birth').hide();
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


}

          </script>
=======
<script src="<?php print(base_url()); ?>/assets/jquery/jquery-3.4.1.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/popper/popper.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/mdb.min.js" ></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables.min.js "></script>
<script src="<?php print(base_url()); ?>/assets/MBD/js/addons/datatables-select.min.js "></script>
<script type="text/javascript">
  var userid = '<?php print($this->session->userdata('user_id')); ?>';
</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/global.js'); ?>">

</script>
<script type="text/javascript" src="<?php print(base_url().'/assets/js/dashboard/main.js'); ?>"></script>
>>>>>>> 1ae0fafc4213e31c5472f426b6a490b57db5227f
