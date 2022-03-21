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
          content="admin dashboard, admin panel template, html admin template, dashboard html template, bootstrap 4 dashboard, template admin bootstrap 4, simple admin panel template, simple dashboard html template,  bootstrap admin panel, task dashboard, job dashboard, bootstrap admin panel, dashboards html, panel in html, bootstrap 4 dashboard, bootstrap 5 dashboard, bootstrap5 dashboard"/>

    <!-- Title -->
    <title>Kafi Login </title>

    <!--Favicon -->
    <link rel="icon" href="../../assets/images/brand/favicon.ico" type="image/x-icon"/>
    @include('user::includes.css')
</head>

<body class="">

<div class="page login-bg">
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-7 col-lg-5">
                            <div class="card">
                                <div class="p-4 pt-6 text-center">
                                    <h1 class="mb-2">Login</h1>
                                    <p class="text-muted">Sign In to your account</p>
                                </div>
                                <form class="card-body pt-3" id="login" name="login" action="{{route('admin.login')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Mail or Username</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group">
														<span class="input-group-text">
															<i class="fe fe-mail" aria-hidden="true"></i>
														</span>
                                                <input class="form-control" placeholder="Email" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle">
                                                <a href="" class="input-group-text">
                                                    <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                </a>
                                                <input name="password" class="form-control" type="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                                   value="option1">
                                            <span class="custom-control-label">Remeber me</span>
                                        </label>
                                    </div>
                                    <div class="submit">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p class="mb-2"><a href="#">Forgot Password</a></p>
                                        <p class="text-dark mb-0">Don't have account?<a class="text-primary ms-1"
                                                                                        href="#">Register</a></p>
                                    </div>
                                </form>
                                <div class="card-body border-top-0 pb-6 pt-2">
                                    <div class="text-center">
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-facebook-line"></i></span>
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-instagram-line"></i></span>
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-twitter-line"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('user::includes.js')
</body>
</html>
