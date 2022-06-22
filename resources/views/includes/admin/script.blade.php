<!-- Bootstrap core JavaScript -->
  <script src="{{ url('Backend/vendor/jquery/jquery.slim.min.js')}}"></script>
  <script src="{{ url('Backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  <!-- Datatables -->
    <script src="{{url('Backend/vendor/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/Buttons-1.5.6/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/Buttons-1.5.6/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/JSZip-2.5.0/jszip.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/pdfmake-0.1.36/pdfmake.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/pdfmake-0.1.36/vfs_fonts.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/Buttons-1.5.6/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('Backend/vendor/DataTables/Buttons-1.5.6/js/buttons.print.min.js')}}"></script>
    <script>
      $(document).ready(function () {
        var table = $('#table').DataTable({
          lengthMenu: [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
          ]
        });

        table.buttons().container()
          .appendTo('#table_wrapper .col-md-5:eq(0)');
      });
    </script>