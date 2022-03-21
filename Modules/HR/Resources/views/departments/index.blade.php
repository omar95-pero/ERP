@extends('user::layouts.master')

@section('content')

    <div class="side-app">


        <!--app header-->
        <div class="app-header header">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="{{ env('ASSET_URL') }}/assets/images/brand/logo.png" class="header-brand-img desktop-lgo"
                            alt="Dayonelogo">
                        <img src="{{ env('ASSET_URL') }}/assets/images/brand/logo-white.png"
                            class="header-brand-img dark-logo" alt="Dayonelogo">
                        <img src="{{ env('ASSET_URL') }}/assets/images/brand/favicon.png"
                            class="header-brand-img mobile-logo" alt="Dayonelogo">
                        <img src="{{ env('ASSET_URL') }}/assets/images/brand/favicon1.png"
                            class="header-brand-img darkmobile-logo" alt="Dayonelogo">
                    </a>
                    <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                        <a class="open-toggle" href="#">
                            <i class="feather feather-menu"></i>
                        </a>
                        <a class="close-toggle" href="#">
                            <i class="feather feather-x"></i>
                        </a>
                    </div>
                    <div class="mt-0">
                        <form class="form-inline">
                            <div class="search-element">
                                <form action="{{ route('departments.index') }}" method="get">
                                    <input type="search" class="form-control header-search" placeholder="Search…"
                                        aria-label="Search" tabindex="1" name="search" value="{{ request('search') }}">
                                    <button class="btn btn-primary-color" type="submit">
                                        <i class="feather feather-search"></i>
                                    </button>
                                </form>

                            </div>
                        </form>
                    </div><!-- SEARCH -->
                    <div class="d-flex order-lg-2 my-auto ms-auto">
                        <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                        </button>
                        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex ms-auto">
                                    <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#"
                                        data-bs-toggle="search">
                                        <i class="feather feather-search search-icon header-icon"></i>
                                    </a>
                                    <div class="dropdown header-flags">
                                        <a class="nav-link icon" data-bs-toggle="dropdown">
                                            <img src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/united-kingdom.png"
                                                class="h-24" alt="img">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                            <a href="#" class="dropdown-item d-flex "> <span
                                                    class="avatar  me-3 align-self-center bg-transparent"><img
                                                        src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/india.png"
                                                        alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">India</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span
                                                    class="avatar  me-3 align-self-center bg-transparent"><img
                                                        src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/united-kingdom.png"
                                                        alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">UK</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span
                                                    class="avatar me-3 align-self-center bg-transparent"><img
                                                        src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/italy.png"
                                                        alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">Italy</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span
                                                    class="avatar me-3 align-self-center bg-transparent"><img
                                                        src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/united-states-of-america.png"
                                                        class="h-24" alt="img"></span>
                                                <div class="d-flex"> <span class="my-auto">US</span>
                                                </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span
                                                    class="avatar  me-3 align-self-center bg-transparent"><img
                                                        src="{{ env('ASSET_URL') }}/assets/images/flags/flag-png/spain.png"
                                                        alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">Spain</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown header-fullscreen">
                                        <a class="nav-link icon full-screen-link">
                                            <i
                                                class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
                                            <i
                                                class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown header-message">
                                        <a class="nav-link icon" data-bs-toggle="dropdown">
                                            <i class="feather feather-mail header-icon"></i>
                                            <span class="badge badge-success side-badge">5</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                            <div class="header-dropdown-list message-menu" id="message-menu">
                                                <a class="dropdown-item border-bottom" href="chat.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <span
                                                                class="avatar avatar-md brround align-self-center cover-image"
                                                                data-image-src="{{ env('ASSET_URL') }}/assets/images/users/1.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Jack Wright</h6>
                                                                <p class="fs-13 mb-1">All the best your
                                                                    template
                                                                    awesome</p>
                                                                <div class="small text-muted">
                                                                    3 hours ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-bottom" href="chat.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <span
                                                                class="avatar avatar-md brround align-self-center cover-image"
                                                                data-image-src="{{ env('ASSET_URL') }}/assets/images/users/2.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Lisa Rutherford</h6>
                                                                <p class="fs-13 mb-1">Hey! there I'm
                                                                    available</p>
                                                                <div class="small text-muted">
                                                                    5 hour ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-bottom" href="chat.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <span
                                                                class="avatar avatar-md brround align-self-center cover-image"
                                                                data-image-src="{{ env('ASSET_URL') }}/assets/images/users/3.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Blake Walker</h6>
                                                                <p class="fs-13 mb-1">Just created a new
                                                                    blog post
                                                                </p>
                                                                <div class="small text-muted">
                                                                    45 mintues ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-bottom" href="chat.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <span
                                                                class="avatar avatar-md brround align-self-center cover-image"
                                                                data-image-src="{{ env('ASSET_URL') }}/assets/images/users/4.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Fiona Morrison</h6>
                                                                <p class="fs-13 mb-1">Added new comment on
                                                                    your
                                                                    photo</p>
                                                                <div class="small text-muted">
                                                                    2 days ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item border-bottom" href="chat.html">
                                                    <div class="d-flex align-items-center">
                                                        <div class="">
                                                            <span
                                                                class="avatar avatar-md brround align-self-center cover-image"
                                                                data-image-src="{{ env('ASSET_URL') }}/assets/images/users/6.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Stewart Bond</h6>
                                                                <p class="fs-13 mb-1">Your payment invoice
                                                                    is
                                                                    generated</p>
                                                                <div class="small text-muted">
                                                                    3 days ago
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class=" text-center p-2">
                                                <a href="chat.html" class="">See All Messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown header-notify">
                                        <a class="nav-link icon" data-bs-toggle="sidebar-right"
                                            data-bs-target=".sidebar-right">
                                            <i class="feather feather-bell header-icon"></i>
                                            <span class="bg-dot"></span>
                                        </a>
                                    </div>
                                    <div class="dropdown profile-dropdown">
                                        <a href="#" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">
                                            <span>
                                                <img src="{{ env('ASSET_URL') }}/assets/images/users/16.jpg" alt="img"
                                                    class="avatar avatar-md bradius">
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                            <div class="p-3 text-center border-bottom">
                                                <a href="profile-1.html"
                                                    class="text-center user pb-0 font-weight-bold">John
                                                    Thomson</a>
                                                <p class="text-center user-semi-title">App Developer</p>
                                            </div>
                                            <a class="dropdown-item d-flex" href="profile-1.html">
                                                <i class="feather feather-user me-3 fs-16 my-auto"></i>
                                                <div class="mt-1">Profile</div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="editprofile.html">
                                                <i class="feather feather-settings me-3 fs-16 my-auto"></i>
                                                <div class="mt-1">Settings</div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="chat.html">
                                                <i class="feather feather-mail me-3 fs-16 my-auto"></i>
                                                <div class="mt-1">Messages</div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="#" data-bs-toggle="modal"
                                                data-bs-target="#changepasswordnmodal">
                                                <i class="feather feather-edit-2 me-3 fs-16 my-auto"></i>
                                                <div class="mt-1">Change Password</div>
                                            </a>
                                            <a class="dropdown-item d-flex" href="login-1.html">
                                                <i class="feather feather-power me-3 fs-16 my-auto"></i>
                                                <div class="mt-1">Sign Out</div>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/app header-->

        <!--Page header-->
        <div class="page-header d-xl-flex d-block">
            <div class="page-leftheader">
                <h4 class="page-title">@lang('hr::hr.Department')</h4>
            </div>

            <div class="page-rightheader ms-md-auto">
                <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
                    <div class="btn-list">
                        <a href="#" class="btn btn-primary me-3" data-bs-toggle="modal"
                            data-bs-target="#adddepartmentmodal">@lang('hr::hr.Add Department')</a>
                        <button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail">
                            <i class="feather feather-mail"></i> </button>
                        <button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i
                                class="feather feather-phone-call"></i> </button>
                        <button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info">
                            <i class="feather feather-info"></i> </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header  border-0">
                        <h4 class="card-title">@lang('hr::hr.Department Summary')</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-vcenter text-nowrap table-bordered border-bottom datatable">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0 w-5">#</th>
                                        <th class="border-bottom-0">@lang('hr::hr.Department Name')</th>
                                        <th class="border-bottom-0">@lang('hr::hr.Actions')</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($departments as $index => $department)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $department->name }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-icon btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editdepartmentmodal" data-id="{{ $department->id }}"
                                                    data-name="{{ $department->name }}">
                                                    <i class="feather feather-edit" data-bs-toggle="tooltip"
                                                        data-original-title="Edit"></i>
                                                </a>

                                                <form action="{{ route('departments.destroy', $department->id) }}"
                                                    method="POST" style="display:inline-block;" id="deletForm">
                                                    @csrf
                                                    @method('DELETE')

                                                    <a class="btn btn-danger btn-icon btn-sm deleteBtn"
                                                        data-bs-toggle="tooltip" data-original-title="Delete">
                                                        <i class="feather feather-trash-2"></i>
                                                    </a>

                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row-->

    </div>


    <!--Add Department Modal -->
    <div class="modal fade" id="adddepartmentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@lang('hr::hr.Add Department')</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <form action="{{ route('departments.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">@lang('hr::hr.Add Department')</label>
                            <input type="text" class="form-control" placeholder="Department" value="" name="name">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Add Department Modal  -->

    <!--Edit Department Modal -->
    <div class="modal fade" id="editdepartmentmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Department</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="updateForm">
                    @csrf
                    @method('PUT')

                    <input type="hidden" name="department_id" value="" id="deptId">

                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Edit Department</label>
                            <input type="text" class="form-control" placeholder="Department" value="" name="name"
                                id="deptName">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="#" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End Edit Department Modal  -->


@endsection

@section('js')

    <script>
        let editModal = $('#editdepartmentmodal');

        editModal.on('shown.bs.modal', function(event) {
            let department_id = parseInt($(event.relatedTarget).data('id'));
            let department_name = $(event.relatedTarget).data('name');

            $(event.target).find("input[name='name']").val(department_name); // modal input
            $('#deptId').val(department_id);

        });


        // update form
        $("#updateForm").submit(function(event) {

            event.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let formData = {
                name: $("#deptName").val(),
                id: $('#deptId').val()
            };

            $.ajax({
                type: "POST",
                //
                url: "{{ url('admin/hr/departments/update-department') }}",
                data: formData,
                dataType: "json",
                encode: true,

                success: function(data) {
                    console.log('success update', data);
                    if (data.status == 'done') {
                        localStorage.setItem("success", "@lang('hr::hr.updated successfully')");
                        window.location.reload();
                    }
                },

                error: function(err) {
                    if (err.status == 422) { // when status code is 422, it's a validation issue
                        $.each(err.responseJSON.errors, function(field, error) {
                            let el = $(document).find('[name="' + field + '"]');
                            el.after($('<span style="color: red;">' + error[0] + '</span>'));
                        });
                    }
                },

            });

        });
    </script>
@endsection
