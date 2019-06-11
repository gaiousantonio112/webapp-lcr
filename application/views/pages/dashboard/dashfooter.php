
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
