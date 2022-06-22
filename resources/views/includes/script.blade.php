<script src="{{url('Frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
<script src="{{url('Frontend/libraries/Bootstrap/js/bootstrap.js')}}"></script>
<script src="{{url('Frontend/libraries/retina/retina.min.js')}}"></script>
<script src="{{url('Frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
             zoomWidth: 500,
            title: false,
            tint: '#333',
            xoffset: 15,
        });
    });
</script>
<script>
    config = {
        enableTime: true,
        dateFormat: "Y-m-d h:i:s",
        time_24hr: true,
        minTime: "08:00:00",
        maxTime: "15:00:00",
        "disable": [
                function (date) {
                    // return true to disable
                    return (date.getDay() === 0 || date.getDay() === 6);

                }
            ],
            "locale": {
                
                "firstDayOfWeek": 1 // start week on Monday
            },
        minDate: "today",
        maxDate: new Date().fp_incr(62),
        
        }
        flatpickr("input[type=datetime", config);
    </script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
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