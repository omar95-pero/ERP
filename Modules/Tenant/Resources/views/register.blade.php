<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta
        content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard."
        name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 4 dashboard, template admin bootstrap 4, simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 4 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard" />

    <!-- Title -->
    <title>Dayone - Multipurpose Admin & Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{ config('app.asset_url') }}/assets/images/brand/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link href="{{ config('app.asset_url') }}/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{ config('app.asset_url') }}/assets/css/style.css" rel="stylesheet" />
    <link href="{{ config('app.asset_url') }}/assets/css/boxed.css" rel="stylesheet" />
    <link href="{{ config('app.asset_url') }}/assets/css/dark.css" rel="stylesheet" />
    <link href="{{ config('app.asset_url') }}/assets/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ config('app.asset_url') }}/assets/css/animated.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ config('app.asset_url') }}/assets/css/icons.css" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ config('app.asset_url') }}/assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ config('app.asset_url') }}/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

</head>

<body class="">

    <div class="page relative error-page3">
        <div class="row no-gutters">
            <div class="col-md-6 h-100vh">
                <div class="cover-image h-100vh"
                    data-image-src="{{ config('app.asset_url') }}/assets/images/photos/login3.jpg">
                    <div class="container">
                        <div class="customlogin-imgcontent">
                            <h2 class="mb-3 fs-35 text-white">Welcome To Dayone</h2>
                            <p class="text-white-50">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 bg-white h-100vh">
                <div class="container">
                    <div class="customlogin-content">
                        <div class="pt-4 pb-2 ps-2">
                            <a class="header-brand" href="index.html">
                                <img src="{{ config('app.asset_url') }}/assets/images/brand/logo.png"
                                    class="header-brand-img custom-logo" alt="Dayonelogo">
                                <img src="{{ config('app.asset_url') }}/assets/images/brand/logo-white.png"
                                    class="header-brand-img custom-logo-dark" alt="Dayonelogo">
                            </a>
                        </div>

                        <div class="p-4 pt-6">
                            <h1 class="mb-2">Register</h1>
                            <p class="text-muted">Create new account</p>
                        </div>

                        <form class="card-body pt-3" id="register" name="register" method="POST"
                            action="{{ route('register.post') }}">
                            @csrf

                            {{-- company name --}}
                            <div class="form-group">
                                <label class="">Company Name</label>
                                <div class="input-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fe fe-user"></i>
                                        </span>

                                        <input class="form-control" placeholder="Company Name" name="company_name" type="text">
                                    </div>
                                </div>
                            </div>

                             {{-- domain name --}}
                             <div class="form-group">
                                <label class="">Domain Name</label>
                                <div class="input-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fe fe-user"></i>
                                        </span>

                                        <input class="form-control" placeholder="Domain Name" name="domain" type="text">
                                        <span class="" style="display:flex;align-items: center;padding-left: 0.1rem;">.kafi.com</span>
                                    </div>
                                </div>
                            </div>

                            {{-- email --}}
                            <div class="form-group">
                                <label class="">Email</label>
                                <div class="input-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fe fe-mail"></i>
                                        </span>

                                        <input class="form-control" placeholder="Email" name="email" type="email">
                                    </div>
                                </div>
                            </div>

                            {{-- phone --}}
                            <div class="form-group">
                                <label class="">Email</label>
                                <div class="input-group mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i class="fe fe-mail"></i>
                                        </span>
                                        <input class="form-control" placeholder="phone" name="phone" type="tel">
                                    </div>
                                </div>
                            </div>

                            {{-- password --}}
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <div class="input-group mb-4">
                                    <div class="input-group" id="Password-toggle">
                                        <a href="" class="input-group-text">
                                            <i class="fe fe-eye-off" aria-hidden="true"></i>
                                        </a>

                                        <input class="form-control" type="password" placeholder="Password" name="password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                        value="option1">
                                    <span class="custom-control-label">I agree to the
                                        <a href="#" class="text-primary">
                                            Terms of services
                                        </a>
                                        and
                                        <a href="#" class="text-primary">
                                            Privacy policy
                                        </a>
                                    </span>
                                </label>
                            </div>

                            {{-- submit --}}
                            <div class="submit">
                                <button class="btn btn-primary btn-block" type="submit">Create Account</button>
                            </div>

                            <div class="text-center mt-4">
                                <p class="text-dark mb-0">Already have an account?
                                    <a class="text-primary ms-1" href="#">
                                        LogIn
                                    </a>
                                </p>
                            </div>

                        </form>

                        <div class="card-body border-top-0 pb-6 pt-2">
                            <div class="text-center">
                                <span class="avatar brround me-3 bg-primary-transparent text-primary">
                                    <i class="ri-facebook-line">
                                    </i>
                                </span>

                                <span class="avatar brround me-3 bg-primary-transparent text-primary">
                                    <i class="ri-instagram-line">
                                    </i>
                                </span>

                                <span class="avatar brround me-3 bg-primary-transparent text-primary">
                                    <i class="ri-twitter-line">
                                    </i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery js-->
    <script src="{{ config('app.asset_url') }}/assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js-->
    <script src="{{ config('app.asset_url') }}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{ config('app.asset_url') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Select2 js -->
    <script src="{{ config('app.asset_url') }}/assets/plugins/select2/select2.full.min.js"></script>

    <!-- P-scroll js-->
    <script src="{{ config('app.asset_url') }}/assets/plugins/p-scrollbar/p-scrollbar.js"></script>

    <!-- Custom js-->
    <script src="{{ config('app.asset_url') }}/assets/js/custom.js"></script>

</body>

</html>
