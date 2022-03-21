@extends('user::layouts.master')
@section('styles')
    <style>
        .dropify-wrapper {
            /*position: absolute;*/
            height: 112px !important;
            width: 98% !important;

        }
    </style>

@endsection
@section('content')
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


    <!--/app header-->

    <!--Page header-->
    <div class="page-header d-xl-flex d-block">
        <div class="page-leftheader">
            <h4 class="page-title">Attendance</h4>
        </div>
        <div class="page-rightheader ms-md-auto">
            <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                <div class="btn-list">
                    <a href="hr-attmark.html" class="btn btn-primary me-3">Mark Attendance</a>
                    <button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
                    <button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
                    <button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
                </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="hrattview-buttons">
        <a href="#" class="active ms-5">Attendance Overview</a>
        <a href="hr-attuser.html" class="">Attendance By User</a>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Employee Name:</label>
                                <select class="form-control custom-select select2" data-placeholder="Select Employee">
                                    <option label="Select Employee"></option>
                                    <option value="1">Faith Harris</option>
                                    <option value="2">Austin Bell</option>
                                    <option value="3">Maria Bower</option>
                                    <option value="4">Peter Hill</option>
                                    <option value="5">Victoria Lyman</option>
                                    <option value="6">Adam Quinn</option>
                                    <option value="7">Melanie Coleman</option>
                                    <option value="8">Max Wilson</option>
                                    <option value="9">Amelia Russell</option>
                                    <option value="10">Justin Metcalfe</option>
                                    <option value="11">Ryan Young</option>
                                    <option value="12">Jennifer Hardacre</option>
                                    <option value="13">Justin Parr</option>
                                    <option value="14">Julia Hodges</option>
                                    <option value="15">Michael Sutherland</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Month:</label>
                                <select class="form-control custom-select select2" data-placeholder="Select Month">
                                    <option label="Select Month"></option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group">
                                <label class="form-label">Year:</label>
                                <select class="form-control custom-select select2" data-placeholder="Select Year">
                                    <option label="Select Year"></option>
                                    <option value="1">2024</option>
                                    <option value="2">2023</option>
                                    <option value="3">2022</option>
                                    <option value="4">2021</option>
                                    <option value="5">2020</option>
                                    <option value="6">2019</option>
                                    <option value="7">2018</option>
                                    <option value="8">2017</option>
                                    <option value="9">2016</option>
                                    <option value="10">2015</option>
                                    <option value="11">2014</option>
                                    <option value="12">2013</option>
                                    <option value="13">2012</option>
                                    <option value="14">2011</option>
                                    <option value="15">2019</option>
                                    <option value="16">2010</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="form-group mt-5">
                                <a href="#" class="btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex mb-6 mt-5">
                        <div class="me-3">
                            <label class="form-label">Note:</label>
                        </div>
                        <div>
                            <span class="badge badge-success-light me-2"><i class="feather feather-check-circle text-success"></i> ---> Present</span>
                            <span class="badge badge-danger-light me-2"><i class="feather feather-x-circle text-danger"></i> ---> Absent</span>
                            <span class="badge badge-warning-light me-2"><i class="fa fa-star text-warning"></i> ---> Holiday</span>
                            <span class="badge badge-orange-light me-2"><i class="fa fa-adjust text-orange"></i>  ---> Half Day</span>
                        </div>
                    </div>
                    <div class="table-responsive hr-attlist">
                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-attendance">
                            <thead>
                            <tr class=" border-bottom">
                                <th class="border-bottom-0">Employee Name</th>
                                <th class="border-bottom-0 w-5">1</th>
                                <th class="border-bottom-0 w-5">2</th>
                                <th class="border-bottom-0 w-5">3</th>
                                <th class="border-bottom-0 w-5">4</th>
                                <th class="border-bottom-0 w-5">5</th>
                                <th class="border-bottom-0 w-5">6</th>
                                <th class="border-bottom-0 w-5">7</th>
                                <th class="border-bottom-0 w-5">8</th>
                                <th class="border-bottom-0 w-5">9</th>
                                <th class="border-bottom-0 w-5">10</th>
                                <th class="border-bottom-0 w-5">11</th>
                                <th class="border-bottom-0 w-5">12</th>
                                <th class="border-bottom-0 w-5">13</th>
                                <th class="border-bottom-0 w-5">14</th>
                                <th class="border-bottom-0 w-5">15</th>
                                <th class="border-bottom-0 w-5">16</th>
                                <th class="border-bottom-0 w-5">17</th>
                                <th class="border-bottom-0 w-5">18</th>
                                <th class="border-bottom-0 w-5">19</th>
                                <th class="border-bottom-0 w-5">20</th>
                                <th class="border-bottom-0 w-5">21</th>
                                <th class="border-bottom-0 w-5">22</th>
                                <th class="border-bottom-0 w-5">23</th>
                                <th class="border-bottom-0 w-5">24</th>
                                <th class="border-bottom-0 w-5">25</th>
                                <th class="border-bottom-0 w-5">26</th>
                                <th class="border-bottom-0 w-5">27</th>
                                <th class="border-bottom-0 w-5">28</th>
                                <th class="border-bottom-0 w-5">29</th>
                                <th class="border-bottom-0 w-5">30</th>
                                <th class="border-bottom-0 w-5">31</th>
                                <th class="border-bottom-0">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($empAttendances as $employee)
                            <tr class="table-bordered">
                                <td>
                                    <div class="d-flex">
                                        <span class="avatar avatar brround me-3" style="background-image: url('{{GetImg($employee->user->image,'users')}}')"></span>
                                        <div class="me-3 mt-0 mt-sm-2 d-block">
                                            <h6 class="mb-1 fs-14">{{$employee->user->name}}</h6>
                                        </div>
                                    </div>
                                </td>
                                @foreach($employee->user->attendances as $attendance)

                                <td>
                                    <div class="hr-listd">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#presentmodal" class="hr-listmodal"></a>
                                        <span class="feather feather-check-circle text-success "></span>
                                    </div>
                                </td>
                                @endforeach

{{--                                <td><span class="fa fa-star text-warning " data-bs-toggle="tooltip" data-bs-placement="top" title="Sunday"></span></td>--}}

{{--                                <td>--}}
{{--                                    <div class="hr-listd">--}}
{{--                                        <a href="#" data-bs-toggle="modal" data-bs-target="#halfpresentmodal" class="hr-listmodal"></a>--}}
{{--                                        <span class="fa fa-adjust text-orange "></span>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
{{--                                <td><span class="feather feather-x-circle text-danger "></span></td>--}}

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

    </div><!-- end app-content-->
    </div>
    </div>


@endsection
