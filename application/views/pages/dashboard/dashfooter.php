
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

          </script>
<script>


    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
