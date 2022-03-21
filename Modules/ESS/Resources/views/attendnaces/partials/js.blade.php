@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script>
        $(function() {
            // check if user clocked-in  or not
            $.ajax({
                url: "{{ route('check.clockin') }}",

                success: function(data) {
                    if (data === '1') {
                        $('.clicking-in').attr("disabled", "disabled");
                    }
                },

                error: function(data) {
                    console.log('error', data);

                },
            });

            // check if user clocked-out  or not
            let clockOutCheck = function() {
                $.ajax({
                    url: "{{ route('check.clockout') }}",

                    success: function(data) {
                        if (data === '1' || data.status == "not_logged_in_before") {
                            $('.clicking-out').attr("disabled", "disabled");
                        } else {
                            $('.clicking-out').prop("disabled", false);
                        }
                    },

                    error: function(data) {
                        console.log('error', data);

                    },
                });

            }

            clockOutCheck();



            // current time
            const currentTimeInteval = setInterval(currentTime, 1000);

            function currentTime() {
                const date = new Date();
                $('#clocktimer2').html(date.toLocaleTimeString());
                $('.clocktimer').html(date.toLocaleTimeString());
            }

            // clock-in
            $('#submitClockin').on('click', function() {
                let working_from = $("select[name='projects']").val();
                let notes = $("textarea[name='notes']").val(); // name='notes'

                console.log('working_from', working_from);
                console.log('asdas');
                $.ajax({
                    method: "POST",
                    url: "{{ route('user.clock-in') }}",
                    data: {
                        working_from: working_from,
                        notes: notes,
                    },

                    success: function(data) {
                        if (data.data.original !== undefined && data.data.original.status ==
                            "logged_before") {
                            $("#clickErorrs").html(data.data.original.data);
                        } else {
                            $('.clicking-in').attr("disabled", "disabled");

                            $('#clockinmodal').modal('hide');


                            clockOutCheck();
                            Swal.fire(
                                "@lang('app.Good job!')",
                                "@lang('app.You have logged in')",
                                'success'
                            );

                        }
                    },


                    error: function(err) {
                        console.log('clock in error', err);
                        console.log('clock in error', err.responseJSON.errors);
                        if (err.status ==
                            422) { // when status code is 422, it's a validation issue
                            $.each(err.responseJSON.errors, function(field, error) {
                                console.log('field', field);
                                console.log('error', error);
                                $('#clickErorrs').html('<span style="color: red;">' +
                                    error[
                                        0] + '</span>');

                            });
                        }
                    },

                });
            });


            // clock-out
            $('#submitClockout').on('click', function() {
                $.ajax({
                    method: "POST",
                    url: "{{ route('user.clockout') }}",

                    success: function(data) {

                        if (data.data.original != undefined && data.data.original.status ==
                            "logged_out_before") {
                            $("#clickoutErorrs").html(data.data.original.data);
                        } else if (data.data.original != undefined && data.data.original
                            .status ==
                            "not_logged_in_before") {
                            $("#clickoutErorrs").html(data.data.original.data);
                        } else {

                            $('.clicking-out').attr("disabled", "disabled");

                            $('#clockoutmodal').modal('hide');

                            Swal.fire(
                                "@lang('app.Good job!')",
                                "@lang('app.You have logged out')",
                                'success'
                            );

                        }

                    },

                    error: function(data) {
                        console.log('clockout error', data);

                    },
                });
            });

        });
    </script>
@endsection
