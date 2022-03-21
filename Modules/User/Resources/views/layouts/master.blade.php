<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Kafi Dashboard</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('') }}assets/images/brand/favicon.ico" type="image/x-icon" />

    <!--datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    @include('user::includes.css')
    @yield('styles')
</head>

<body class="app sidebar-mini">
    @php
        if (session()->has('success')) {
            $success = session()->get('success');
        } else {
            $success = false;
        }
    @endphp
    <!---Global-loader-->
    <div id="global-loader">
        <img src="{{ asset('') }}assets/images/svgs/loader.svg" alt="loader">
    </div>

    <div class="page">
        <div class="page-main">

            <!--aside open-->
            @include('user::includes.aside')
            <!--aside closed-->

            <div class="app-content main-content">
                <div class="side-app">
                    @include('user::includes.header')
                    <!-- Row-->
                    @yield('content')
                    <!-- End Row-->
                </div>
            </div><!-- end app-content-->
        </div>

        <!--Footer-->
        @include('user::includes.footer')
        <!-- End Footer-->

        <!--Change password Modal -->
        <div class="modal fade" id="changepasswordnmodal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">New Password</label>
                            <input type="password" class="form-control" placeholder="password" value="">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" placeholder="password" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
                        <a href="#" class="btn btn-primary">Confirm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Change password Modal  -->

    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><span class="feather feather-chevrons-up"></span></a>
    @include('user::includes.js')
    @include('user::includes.swal')
    @yield('scripts')

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>


</body>

</html>
