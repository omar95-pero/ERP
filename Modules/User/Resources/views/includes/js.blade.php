<!-- Jquery js-->
<script src="{{ asset('') }}assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="{{ asset('') }}assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="{{ asset('') }}assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!--Othercharts js-->
<script src="{{ asset('') }}assets/plugins/othercharts/jquery.sparkline.min.js"></script>

<!-- Circle-progress js-->
<script src="{{ asset('') }}assets/plugins/circle-progress/circle-progress.min.js"></script>

<!--Sidemenu js-->
<script src="{{ asset('') }}assets/plugins/sidemenu/sidemenu.js"></script>

<!-- P-scroll js-->
<script src="{{ asset('') }}assets/plugins/p-scrollbar/p-scrollbar.js"></script>
<script src="{{ asset('') }}assets/plugins/p-scrollbar/p-scroll1.js"></script>

<!--Sidebar js-->
<script src="{{ asset('') }}assets/plugins/sidebar/sidebar.js"></script>

<!-- Select2 js -->
<script src="{{ asset('') }}assets/plugins/select2/select2.full.min.js"></script>

<!-- Custom js-->
<script src="{{ asset('') }}assets/js/custom.js"></script>

<!-- sweetalert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- dropify-->
<script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<!-- date-picker -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
<script src="{{ asset('') }}assets/plugins/date-picker/jquery-ui.js"></script>


{{-- success message after update --}}
<script>
    $(document).ready(function() {
        if (localStorage.getItem("success")) {
            Swal.fire({
                icon: 'success',
                title: localStorage.getItem("success"),
                showConfirmButton: false,
                timer: 1500
            });

            localStorage.clear();
        }


    });
    $(function() {
        $(".fc-datepicker").datepicker({
            dateFormat: 'yy-mm-dd'
        });
    });
    $('.dropify').dropify({
        messages:
            {
                'default':
                    'Click To Drop a File Or Image Here ',
            }
    });
</script>

{{-- delete button --}}
<script>
    $('.deleteBtn').on('click', function() {
        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            confirmButtonText: 'Save',
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).closest('form').submit();
                Swal.fire('Saved!', '', 'success')
            }
        })
    });
</script>

{{-- success message after create --}}
<script>
    let success = "{{ $success ?? false }}";
    if (success) {
        Swal.fire({
            icon: 'success',
            title: success,
            showConfirmButton: false,
            timer: 1500
        });
    }
</script>


<script>
    $(document).ready(function() {
        $('.datatable').DataTable({
            paging: true,
            scrollY: 550,
            ordering: true,
        });
    });
</script>

<script>
    $(document).ready(function() {
        // today
        $('.todayDate').datepicker().datepicker('setDate', 'today');
    });
</script>

@yield('js')
