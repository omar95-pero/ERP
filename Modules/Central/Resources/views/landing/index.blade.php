<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landio - Multipurpose Landing Page HTML Template || Software Landing</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('/landing')}}/img/favicon.png" type="img/png" />
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/bootstrap.min.css" />
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/slick.min.css" />
    <!--====== Magnific ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/magnific-popup.min.css" />
    <!--====== Nice Select ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/nice-select.min.css" />
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/animate.min.css" />
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/fonts/fontawesome/css/all.min.css" />
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/fonts/flaticon/flaticon.css" />
    <!--====== Spacing Css ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/spacing.min.css" />
    <!--====== Main Css ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/style.css" />
    <!--====== Responsive CSS ======-->
    <link rel="stylesheet" href="{{asset('/landing')}}/css/responsive.css" />
</head>

<body class="software-landing-page">
<!--======= Start Preloader =======-->
<div id="preloader">
    <img class="preloader-image" width="60" src="{{asset('/landing')}}/img/preloader-logo.png" alt="preloader" />
</div>
<!--======= End Preloader =======-->

<!--====== Start Header ======-->
<header class="template-header navbar-left absolute-header nav-primary-5 submenu-primary-5 sticky-header">
    <div class="container-fluid fluid-gap-70">
        <div class="header-inner">
            <div class="header-left">
                <div class="brand-logo">
                    <a href="index.html">
                        <img src="{{asset('/landing')}}/img/logo01.png" alt="logo" style="width: 150px">
                    </a>
                </div>
                <nav class="nav-menu d-none d-xl-block">
                    <ul>
                        <li class="active">
                            <a href="index.html">Demos</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage Sass</a></li>
                                <li><a href="index-2.html">Homepage SEO</a></li>
                                <li><a href="index-3.html">Homepage App</a></li>
                                <li><a href="index-4.html">Homepage Chatbot</a></li>
                                <li><a href="index-5.html">Homepage Consultant</a></li>
                                <li><a href="index-6.html">Homepage Fintech</a></li>
                                <li><a href="index-7.html">Homepage Software</a></li>
                                <li><a href="index-8.html">Homepage E-Wallet</a></li>
                                <li><a href="index-9.html">Homepage Webinar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                            <ul class="sub-menu">
                                <li><a href="services.html">Our Services</a></li>
                                <li><a href="service-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li>
                                    <a href="portfolio.html">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio.html">Portfolio One</a></li>
                                        <li><a href="portfolio-2.html">Portfolio Two</a></li>
                                        <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="sign-in.html">Sign In</a></li>
                                <li><a href="sign-up.html">Sign Up</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog-standard.html">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-right">
                <ul class="header-extra">
                    <li class="d-none d-sm-block">
                        <a href="{{route('admin.login')}}" class="user-login">
                            <i class="far fa-user-circle"></i> Sign In
                        </a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="services.html" class="template-btn primary-bg-5">
                            Get Started <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                    <li class="d-none d-xl-block">
                        <a href="#" class="off-canvas-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                    <li class="d-xl-none">
                        <a href="#" class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Mobile Slide Menu -->
    <div class="mobile-slide-panel">
        <div class="panel-overlay"></div>
        <div class="panel-inner">
            <div class="mobile-logo">
                <a href="index.html">
                    <img src="{{asset('/landing')}}/img/logo-1.png" alt="Landio">
                </a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li class="active">
                        <a href="index.html">Demos</a>
                        <ul class="sub-menu">
                            <li><a href="index.html">Homepage Sass</a></li>
                            <li><a href="index-2.html">Homepage SEO</a></li>
                            <li><a href="index-3.html">Homepage App</a></li>
                            <li><a href="index-4.html">Homepage Chatbot</a></li>
                            <li><a href="index-5.html">Homepage Consultant</a></li>
                            <li><a href="index-6.html">Homepage Fintech</a></li>
                            <li><a href="index-7.html">Homepage Software</a></li>
                            <li><a href="index-8.html">Homepage E-Wallet</a></li>
                            <li><a href="index-9.html">Homepage Webinar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="service-details.html">Service Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Our Team</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="portfolio.html">Portfolio One</a></li>
                                    <li><a href="portfolio-2.html">Portfolio Two</a></li>
                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li><a href="sign-in.html">Sign In</a></li>
                            <li><a href="sign-up.html">Sign Up</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog-standard.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog-standard.html">Blog Standard</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="panel-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
    <!-- End Mobile Slide Menu -->

    <!-- Off Canvas -->
    <div class="off-canvas-wrapper">
        <div class="canvas-overlay"></div>
        <div class="canvas-inner">
            <div class="canvas-logo">
                <img src="{{asset('/landing')}}/img/logo-1.png" alt="Canvas Logo">
            </div>
            <div class="about-us">
                <h5 class="canvas-widget-title">About Us</h5>
                <p>
                    Sed perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperams eaque ipsa quae abillo inventore veritatis
                </p>
            </div>
            <div class="contact-us">
                <h5 class="canvas-widget-title">Contact Us</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        354 Oakridge, Camden NJ 08102 - USA
                    </li>
                    <li>
                        <i class="far fa-envelope-open"></i>
                        <a href="mailto:support@landio.com">support@landio.com</a>
                        <a href="www.landio.net" target="_blank">www.landio.net</a>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <span><a href="tel:+01234567899">+012 (345) 678 99</a></span>
                        <span><a href="tel:+8563214">+8563214</a></span>
                    </li>
                </ul>
            </div>
            <a href="#" class="canvas-close">
                <i class="fal fa-times"></i>
            </a>
        </div>
    </div>
</header>
<!--====== End Header ======-->

<!--====== Start Hero Area ======-->
<section class="hero-area-v7">
    <div class="container-fluid">
        <div class="hero-content">
            <h2 class="hero-title wow fadeInLeft" data-wow-delay="0.2s">Simple Goal Tracking For Software</h2>
            <p class="wow fadeInUp" data-wow-delay="0.3s">
                Sed perspicias unde omnis natus error voluptate dolorem laudanme totam aperiam.
            </p>
            <a href="#" class="template-btn primary-bg-5 wow fadeInUp" data-wow-delay="0.4s">
                Download Free Trial <i class="fas fa-arrow-right"></i>
            </a>

            <span class="notice wow fadeInUp" data-wow-delay="0.5s">
                    <img src="{{asset('/landing')}}/img/hero/notice-icon.png" alt="Image"> No Extra Charge &amp; We’ve a Pricing Plan
                </span>
        </div>
        <div class="hero-img d-none d-lg-block wow fadeInUp" data-wow-delay="0.2s">
            <img src="{{asset('/landing')}}/img/hero/home-software.png" alt="Image">
        </div>
    </div>
</section>
<!--====== End Hero Area ======-->

<!--====== Section Service Start ======-->
<section class="service-section p-t-130 p-b-130 bg-secondary-color-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="common-heading text-center heading-white m-b-30">
                    <h2 class="title">Don’t Let Your Goals Be Frustrating to Track You'll Waste Effort Working on The Wrong Problems</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters justify-content-lg-between justify-content-md-start justify-content-center icon-boxes-v3">
            <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.2s">
                <div class="iconic-box box-version-white color-v1 m-t-50">
                    <div class="icon">
                        <i class="far fa-code"></i>
                    </div>
                    <h4 class="title"><a href="#">Open Source Platform</a></h4>
                    <p>
                        But I must explain to how mistaken denouncing pleasures praisinge pain was born and complete
                    </p>
                    <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="iconic-box box-version-white color-v2 m-t-50">
                    <div class="icon">
                        <i class="far fa-cloud-upload"></i>
                    </div>
                    <h4 class="title"><a href="#">On-Demand Cloud</a></h4>
                    <p>
                        To take a trivial example which of ever undertakes laborious physicals exercise except obtain some
                    </p>
                    <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box box-version-white color-v3 m-t-50">
                    <div class="icon">
                        <i class="far fa-gamepad"></i>
                    </div>
                    <h4 class="title"><a href="#">Real Time Dashboard</a></h4>
                    <p>
                        Quis autem veleum reprehenderit quin voluptate velit esse quam nihile molestiae consequatur vel
                    </p>
                    <a href="#" class="box-btn">Learn More <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== Section Service End ======-->

<!--====== Start Design & Layout Section ======-->
<section class="sof-design-layout p-t-130 p-b-130">
    <div class="container">
        <div class="row align-items-center justify-content-center no-gutters">
            <div class="col-lg-7">
                <div class="software-preview m-b-md-80 animate-float-bob-y">
                    <img src="{{asset('/landing')}}/img/preview-gallery/design-layout.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-5 col-md-10">
                <div class="software-text-block p-l-50 p-l-lg-30 p-l-md-0">
                    <div class="common-heading m-b-40">
                        <span class="tagline color-primary-5">Design & Layouts</span>
                        <h2 class="title">Keep Things Simple With Ability</h2>
                    </div>
                    <p>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudane totam rem aperiam eaque ipsa quae abilloe
                    </p>
                    <div class="icon-bordered-box icon-left m-t-30 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="icon">
                            <i class="far fa-gem"></i>
                        </div>
                        <div class="box-content">
                            <h4 class="title">Build With Animations</h4>
                            <p>
                                Quis autem vel eum iure reprehenderit  quin voluptate velit esse quam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center p-t-130">
            <div class="col-lg-7 col-md-10 order-lg-last order-first wow fadeInUp" data-wow-delay="0.3s">
                <div class="preview-galley-v8 text-right m-b-md-80">
                    <img src="{{asset('/landing')}}/img/preview-gallery/sof-analysis-01.jpg" class="preview-one" alt="Image">
                    <img src="{{asset('/landing')}}/img/preview-gallery/sof-analysis-02.jpg" class="preview-two animate-float-bob-x" alt="Image">
                    <img src="{{asset('/landing')}}/img/preview-gallery/sof-analysis-03.jpg" class="preview-three animate-float-bob-y" alt="Image">
                </div>
            </div>

            <div class="col-lg-5 col-md-10 order-lg-first">
                <div class="software-text-block">
                    <div class="common-heading m-b-25">
                        <span class="tagline color-primary-5">System Analysis</span>
                        <h2 class="title">Track Goals All In  One Place</h2>
                    </div>

                    <p class="m-b-25">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudane totam rem aperiam eaque ipsa quae abilloe
                    </p>
                    <p>
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising
                    </p>
                    <a href="about.html" class="template-btn primary-bg-5 m-t-40">
                        Learn More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Design & Layout Section ======-->

<!--====== Start Service Section ======-->
<section class="service-tab-section p-t-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading text-center m-b-65">
                    <span class="tagline color-primary-5">Service We Provide</span>
                    <h2 class="title">Better Smart Solutions For Your Better Software</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="service-tab">
        <div class="container">
            <div class="service-tab-nav">
                <ul class="nav nav-tabs service-tab-nav" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-toggle="tab" href="#tabItem1" role="tab">
                            <i class="far fa-browser"></i> Apply To Template
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem2" role="tab">
                            <i class="far fa-bullseye-arrow"></i> Build Your Promotos
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem3" role="tab">
                            <i class="far fa-coins"></i> Data Organizations
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem4" role="tab">
                            <i class="far fa-coins"></i> Assing Action Data
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem5" role="tab">
                            <i class="far fa-book"></i> Rich Documentation
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem6" role="tab">
                            <i class="far fa-phone-plus"></i> 100% Responsive
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem7" role="tab">
                            <i class="far fa-calendar-check"></i> Useablity Easy
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" data-toggle="tab" href="#tabItem8" role="tab">
                            <i class="far fa-tools"></i> Easy Installations
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="service-tab-content container-fluid">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tabItem1" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem2" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem3" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem4" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem5" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem6" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem7" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
                <div class="tab-pane fade" id="tabItem8" role="tabpanel">
                    <div class="service-tab-ime text-center">
                        <img src="{{asset('/landing')}}/img/service-tab-img.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Service Section ======-->

<!--====== Start Testimonial Area ======-->
<section class="testimonial-area-two p-t-130 p-b-130">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="preview-image-v5 m-r-45 m-r-lg-0 m-b-md-80 wow fadeInLeft animate-float-bob-y" data-wow-delay="0.3s">
                    <img src="{{asset('/landing')}}/img/preview-gallery/sof-testimonial.jpg" alt="Image">
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <div class="testimonial-slider-wrapper p-l-40 p-l-lg-0">
                    <div class="common-heading m-b-65">
                        <span class="tagline color-primary-5">Customer Reviews</span>
                        <h2 class="title">What our clients say about solutions</h2>
                    </div>

                    <div class="testimonial-slider-v1 quote-left-bordered" id="testimonialActiveFive">
                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium totam rem
                                aperiam eaque quae</p>
                            <div class="author-info">
                                <img src="{{asset('/landing')}}/img/testimonial/author-1.png" alt="testimonial author">
                                <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium totam rem
                                aperiam eaque quae</p>
                            <div class="author-info">
                                <img src="{{asset('/landing')}}/img/testimonial/author-2.png" alt="testimonial author">
                                <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="quote-icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium totam rem
                                aperiam eaque quae</p>
                            <div class="author-info">
                                <img src="{{asset('/landing')}}/img/testimonial/author-3.png" alt="testimonial author">
                                <h6 class="name">Michael W. Kirwan <span class="title">CEO & Founder</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Testimonial Area ======-->

<!--====== Start Call To Action ======-->
<section class="cta-section bg-cover-center p-t-90 p-b-90" style="background-image: url({{asset('/landing')}}/img/cta/cta-bg-2.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="cta-content text-center">
                    <div class="common-heading heading-white m-b-65">
                        <span class="tagline">Download Free Trial</span>
                        <h2 class="title">Get Our Software Very Easily Download Free Trial</h2>
                    </div>

                    <a href="#" class="template-btn white-bg bordered-btn">Download Free Trial <i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-absolute-image d-none d-lg-block wow fadeInUp" data-wow-delay="0.3s">
        <img src="{{asset('/landing')}}/img/cta//cta-absolute-img.png" alt="">
    </div>
</section>
<!--====== End Call To Action ======-->

<!--====== Start Scroll To Top ======-->
<a href="#" class="back-to-top" id="scroll-top">
    <i class="far fa-angle-up"></i>
</a>
<!--====== End Scroll To Top ======-->

<!--====== Start Footer ======-->
<footer class="template-footer">
    <div class="container">
        <div class="footer-widgets p-t-80 p-b-30">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget text-block-widget">
                        <h5 class="widget-title">About Landio</h5>
                        <p>Sed ut perspiciatis undmnis iste natus error sit voluptatem accusantium dolore udantiuy totam rem aperiam.</p>

                        <ul class="download-links">
                            <li><a href="#"><i class="fab fa-apple"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-play"></i></a></li>
                            <li><a href="#"><i class="fab fa-windows"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-lg-flex justify-content-center">
                        <div class="widget nav-widget">
                            <h5 class="widget-title">Resources</h5>
                            <ul>
                                <li><a href="about.html">Saas Development</a></li>
                                <li><a href="about.html">Our Products</a></li>
                                <li><a href="about.html">User Strategy</a></li>
                                <li><a href="about.html">Blogs &amp; Guides</a></li>
                                <li><a href="about.html">Premium Support</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="d-lg-flex justify-content-center">
                        <div class="widget nav-widget">
                            <h5 class="widget-title">Company</h5>
                            <ul>
                                <li><a href="about.html">About Landio</a></li>
                                <li><a href="about.html">Contact &amp; Support</a></li>
                                <li><a href="services.html">Success History</a></li>
                                <li><a href="services.html">Setting &amp; Privacy</a></li>
                                <li><a href="services.html">Company History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget social-widget pl-xl-5">
                        <h5 class="widget-title">Follow On</h5>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright border-top-secondary">
        <div class="container">
            <p class="copyright-text text-center">
                © 2021 <a href="#">Landio</a>. All Rights Reserved
            </p>
        </div>
    </div>
</footer>
<!--====== End Footer ======-->

<!--====== Jquery ======-->
<script src="{{asset('/landing')}}/js/jquery-3.6.0.min.js"></script>
<!--====== Bootstrap ======-->
<script src="{{asset('/landing')}}/js/bootstrap.min.js"></script>
<!--====== Slick slider ======-->
<script src="{{asset('/landing')}}/js/slick.min.js"></script>
<!--====== Magnific ======-->
<script src="{{asset('/landing')}}/js/jquery.magnific-popup.min.js"></script>
<!--====== Isotope Js ======-->
<script src="{{asset('/landing')}}/js/isotope.pkgd.min.js"></script>
<!--====== Inview ======-->
<script src="{{asset('/landing')}}/js/jquery.inview.min.js"></script>
<!--====== Nice Select ======-->
<script src="{{asset('/landing')}}/js/jquery.nice-select.min.js"></script>
<!--====== Wow ======-->
<script src="{{asset('/landing')}}/js/wow.min.js"></script>
<!--====== Main JS ======-->
<script src="{{asset('/landing')}}/js/main.js"></script>
</body>

</html>
