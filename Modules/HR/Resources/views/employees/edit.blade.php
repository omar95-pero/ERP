@extends('user::layouts.master')
@section('content')
    <div class="side-app">


        <!--app header-->
        <div class="app-header header">
            <div class="container-fluid">
                <div class="d-flex">
                    <a class="header-brand" href="index.html">
                        <img src="../../assets/images/brand/logo.png" class="header-brand-img desktop-lgo" alt="Dayonelogo">
                        <img src="../../assets/images/brand/logo-white.png" class="header-brand-img dark-logo" alt="Dayonelogo">
                        <img src="../../assets/images/brand/favicon.png" class="header-brand-img mobile-logo" alt="Dayonelogo">
                        <img src="../../assets/images/brand/favicon1.png" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
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
                                <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
                                <button class="btn btn-primary-color" >
                                    <i class="feather feather-search"></i>
                                </button>
                            </div>
                        </form>
                    </div><!-- SEARCH -->
                    <div class="d-flex order-lg-2 my-auto ms-auto">
                        <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                        </button>
                        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex ms-auto">
                                    <a class="nav-link my-auto icon p-0 nav-link-lg d-md-none navsearch" href="#" data-bs-toggle="search">
                                        <i class="feather feather-search search-icon header-icon"></i>
                                    </a>
                                    <div class="dropdown header-flags">
                                        <a class="nav-link icon" data-bs-toggle="dropdown">
                                            <img src="../../assets/images/flags/flag-png/united-kingdom.png" class="h-24" alt="img">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                            <a href="#" class="dropdown-item d-flex "> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../../assets/images/flags/flag-png/india.png" alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">India</span> </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../../assets/images/flags/flag-png/united-kingdom.png" alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">UK</span> </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span class="avatar me-3 align-self-center bg-transparent"><img src="../../assets/images/flags/flag-png/italy.png" alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">Italy</span> </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span class="avatar me-3 align-self-center bg-transparent"><img src="../../assets/images/flags/flag-png/united-states-of-america.png" class="h-24" alt="img"></span>
                                                <div class="d-flex"> <span class="my-auto">US</span> </div>
                                            </a>
                                            <a href="#" class="dropdown-item d-flex"> <span class="avatar  me-3 align-self-center bg-transparent"><img src="../../assets/images/flags/flag-png/spain.png" alt="img" class="h-24"></span>
                                                <div class="d-flex"> <span class="my-auto">Spain</span> </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dropdown header-fullscreen">
                                        <a class="nav-link icon full-screen-link">
                                            <i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
                                            <i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
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
                                                            <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/1.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Jack Wright</h6>
                                                                <p class="fs-13 mb-1">All the best your template awesome</p>
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
                                                            <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/2.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Lisa Rutherford</h6>
                                                                <p class="fs-13 mb-1">Hey! there I'm available</p>
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
                                                            <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/3.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Blake Walker</h6>
                                                                <p class="fs-13 mb-1">Just created a new blog post</p>
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
                                                            <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/4.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Fiona Morrison</h6>
                                                                <p class="fs-13 mb-1">Added new comment on your photo</p>
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
                                                            <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/6.jpg"></span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="ps-3">
                                                                <h6 class="mb-1">Stewart Bond</h6>
                                                                <p class="fs-13 mb-1">Your payment invoice is generated</p>
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
                                        <a class="nav-link icon" data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                                            <i class="feather feather-bell header-icon"></i>
                                            <span class="bg-dot"></span>
                                        </a>
                                    </div>
                                    <div class="dropdown profile-dropdown">
                                        <a href="#" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">
															<span>
																<img src="../../assets/images/users/16.jpg" alt="img" class="avatar avatar-md bradius">
															</span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                            <div class="p-3 text-center border-bottom">
                                                <a href="profile-1.html" class="text-center user pb-0 font-weight-bold">John Thomson</a>
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
                                            <a class="dropdown-item d-flex" href="#" data-bs-toggle="modal" data-bs-target="#changepasswordnmodal">
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
{{--        <div class="page-header d-xl-flex d-block">--}}
{{--            <div class="page-leftheader">--}}
{{--                <h4 class="page-title">Employee Profile</h4>--}}
{{--            </div>--}}
{{--            <div class="page-rightheader ms-md-auto">--}}
{{--                <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">--}}
{{--                    <div class="btn-list">--}}
{{--                        <a href="hr-addemployee.html" class="btn btn-primary me-3">Add New Employee</a>--}}
{{--                        <button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>--}}
{{--                        <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>--}}
{{--                        <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!--End Page header-->

        <!-- Row -->
        <div class="row">
{{--            <div class="col-xl-3 col-md-12 col-lg-12">--}}
{{--                <div class="card box-widget widget-user">--}}
{{--                    <div class="card-body text-center">--}}
{{--                        <div class="widget-user-image mx-auto text-center">--}}
{{--                            <img  class="avatar avatar-xxl brround rounded-circle" alt="img" src="../../assets/images/users/1.jpg">--}}
{{--                        </div>--}}
{{--                        <div class="pro-user mt-3">--}}
{{--                            <h5 class="pro-user-username text-dark mb-1 fs-16">Faith Harris</h5>--}}
{{--                            <h6 class="pro-user-desc text-muted fs-12">Web Designer</h6>--}}
{{--                        </div>--}}
{{--                        <div class="star-ratings start-ratings-main mb-0 clearfix">--}}
{{--                            <div class="stars stars-example-fontawesome star-sm">--}}
{{--                                <select id="example-fontawesome" name="rating">--}}
{{--                                    <option value="1">1</option>--}}
{{--                                    <option value="2">2</option>--}}
{{--                                    <option value="3">3</option>--}}
{{--                                    <option value="4" selected>4</option>--}}
{{--                                    <option value="5">5</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-footer p-0">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-4 text-center py-5 border-end">--}}
{{--                                <h5 class="fs-12 font-weight-semibold mb-3">January</h5>--}}
{{--                                <h5 class="mb-2">--}}
{{--                                    <span class="fs-18 text-success">22</span>--}}
{{--                                    <span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>--}}
{{--                                    <span class="fs-18 font-weight-semibold text-dark">31</span>--}}
{{--                                </h5>--}}
{{--                                <h5 class="fs-12 mb-0">Attendance</h5>--}}
{{--                            </div>--}}
{{--                            <div class="col-4  py-5 text-center border-end">--}}
{{--                                <h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>--}}
{{--                                <h5 class="mb-2">--}}
{{--                                    <span class="fs-18 text-orange">0</span>--}}
{{--                                    <span class="my-auto fs-9 font-weight-normal  ms-1 me-1">/</span>--}}
{{--                                    <span class="fs-18 font-weight-semibold text-dark">41</span>--}}
{{--                                </h5>--}}
{{--                                <h5 class="fs-12 mb-0">Leaves</h5>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 text-center py-5">--}}
{{--                                <h5 class="fs-12 font-weight-semibold mb-3">Year-2021</h5>--}}
{{--                                <h5 class="mb-2">--}}
{{--                                    <span class="fs-18 text-primary">0</span>--}}
{{--                                </h5>--}}
{{--                                <h5 class="fs-12 mb-0">Awards</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header  border-0">--}}
{{--                        <div class="card-title">Statistics-2021</div>--}}
{{--                    </div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="row mb-7">--}}
{{--                            <div class="col-4 text-center">--}}
{{--                                <div class="chart-circle chart-circle-sm" data-value="0.89" data-thickness="5" data-color="#3366ff">--}}
{{--                                    <div class="chart-circle-value text-primary">89</div>--}}
{{--                                </div>--}}
{{--                                <h6 class="fs-14 font-weight-semibold mt-3">Attendance</h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 text-center">--}}
{{--                                <div class="chart-circle chart-circle-sm" data-value="0.23" data-thickness="5" data-color="#fe7f00">--}}
{{--                                    <div class="chart-circle-value text-secondary">23</div>--}}
{{--                                </div>--}}
{{--                                <h6 class="fs-14 font-weight-semibold mt-3">Projects</h6>--}}
{{--                            </div>--}}
{{--                            <div class="col-4 text-center">--}}
{{--                                <div class="chart-circle chart-circle-sm" data-value="0.67" data-thickness="5" data-color="#0dcd94">--}}
{{--                                    <div class="chart-circle-value text-success">67%</div>--}}
{{--                                </div>--}}
{{--                                <h6 class="fs-14 font-weight-semibold mt-3">Performance</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-end justify-content-between mg-b-5">--}}
{{--                            <h6 class="">This Week</h6>--}}
{{--                            <h6 class="font-weight-bold mb-1">01</h6>--}}
{{--                        </div>--}}
{{--                        <div class="progress progress-sm mb-5">--}}
{{--                            <div class="progress-bar bg-danger w-10"></div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-end justify-content-between mg-b-5">--}}
{{--                            <h6 class="">This Month</h6>--}}
{{--                            <h6 class="font-weight-bold mb-1">05</h6>--}}
{{--                        </div>--}}
{{--                        <div class="progress progress-sm mb-5">--}}
{{--                            <div class="progress-bar bg-info w-30"></div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex align-items-end justify-content-between mg-b-5">--}}
{{--                            <h6 class="">This Year</h6>--}}
{{--                            <h6 class="font-weight-bold mb-1">22</h6>--}}
{{--                        </div>--}}
{{--                        <div class="progress progress-sm mb-5">--}}
{{--                            <div class="progress-bar bg-warning w-50"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-xl-12 col-md-12 col-lg-12">
                <div class="tab-menu-heading hremp-tabs p-0 ">
                    <div class="tabs-menu1">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">Personal Details</a></li>
                            <li><a href="#tab6"  data-bs-toggle="tab">Company Details</a></li>
                            <li><a href="#tab7" data-bs-toggle="tab">Bank Details</a></li>
                            <li><a href="#tab8" data-bs-toggle="tab">Upload Documents</a></li>
                        </ul>
                    </div>
                </div>


                <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                    @if ($errors->any())
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif


                    <form action="{{route('employees.update',$employee->user->id)}}" method="POST" enctype="multipart/form-data">
                            <div class="tab-content">
                                    @csrf
                                        @method('PUT')
                                   <!--Personal Details-->
                                    @include('hr::employees.partails.personal_details')
                                   <!--End Personal Details-->
                                   <!--Company Details-->
                                    @include('hr::employees.partails.company_details')
                                   <!--End Company Details-->
                                   <!--Bank Details-->
                                    @include('hr::employees.partails.bank_details')
                                   <!--End Bank Details-->
                                   <!--Upload Document Details-->
                                    @include('hr::employees.partails.upload_documents')
                                   <!--End Upload Document Details-->

                                    <div class="card-footer text-end">
                                        <input type="submit" class="btn btn-primary" value="Save">
                                        <a href="#" class="btn btn-danger">Cancel</a>
                                    </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- End Row-->

    </div>
@endsection
@section('scripts')
    @include('hr::employees.partails.js')

@endsection
