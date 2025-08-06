<!doctype html>
<html class="no-js" lang="en-us">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tractour - Industrial/ Manufacturing HTML5 Template</title>
    <meta name="keywords"
          content="Corporate Business HTML5 Css3 Template Business, Chemicals, Commercial, Company, Engineering, Factory, Industry, Machinery, Manufacturing, Oil And Gas, Petroleum, Power, Refinery, Small Scale">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nav-tabs.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/scrolltop.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Font Awesome 4.7.0 CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (add this in <head>) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">






</head>


<body>
{{--<!--[if lte IE 9]>--}}
{{--<p class="browserupgrade">You are using an--}}
{{--    <strong>outdated</strong> browser. Please--}}
{{--    <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.--}}
{{--</p>--}}
{{--<![endif]-->--}}
<!-- Preloader -->
{{--<div class="tractour-loader">--}}
{{--    <div class="main-preloader">--}}
{{--        <div class="spinner">--}}
{{--            <div class="double-bounce1"></div>--}}
{{--            <div class="double-bounce2"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- header area start -->
{{--<header class="header-area">--}}
{{--    <!-- Header Top Area Start -->--}}
{{--    <div class="header-top-area bg-color1 py-2">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center justify-content-between">--}}

{{--                <!-- Language Selector -->--}}
{{--                <div class="col-md-3 col-12 mb-2 mb-md-0">--}}
{{--                    <div class="tractor-lang">--}}
{{--                        <select class="form-select form-select-sm">--}}
{{--                            <option selected>English</option>--}}
{{--                            <option>Bangla</option>--}}
{{--                            <option>Spanish</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Social Icons -->--}}
{{--                <div class="col-md-6 col-12 text-center mb-2 mb-md-0">--}}
{{--                    <ul class="header-top-social list-inline mb-0">--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-skype"></i></a></li>--}}
{{--                        <li class="list-inline-item mx-1"><a href="#"><i class="fa fa-behance"></i></a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--                <!-- Get a Quote Button -->--}}
{{--                <div class="col-md-3 col-12 text-md-end text-center">--}}
{{--                    <a href="#" class="btn btn-sm btn-type-4">Get a Quote</a>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Header Top Area End -->--}}
{{--</header>--}}

<!-- header top area end -->
<!-- header middle area start -->
<!-- Bootstrap 5 Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm">
    <div class="container">

        <!-- Logo with Tagline -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo.png') }}" alt="IIA Logo" height="40" class="me-2">
            <div class="d-flex flex-column lh-sm">
                <strong class="text-white text-uppercase">IIA</strong>
                <small class="text-white-50">Indus Industrial Accessories</small>
            </div>
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links & Contact -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <div class="d-lg-flex justify-content-between align-items-center w-100">

                <!-- Navigation Links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-3">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="{{ url('/shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white d-flex align-items-center" href="{{ url('/cart') }}">
                            <i class="fa fa-shopping-cart me-2"></i>
                            Cart
                            <span class="badge bg-light text-dark ms-2">0</span>
                        </a>
                    </li>
                </ul>

                <!-- Contact Info (Visible on large screens only) -->
                <ul class="list-unstyled d-none d-lg-flex align-items-center gap-4 mb-0 text-white small">
                    <li class="d-flex align-items-center gap-2">
                        <i class="fa fa-phone"></i> <span>00-123-123-4567</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="fa fa-at"></i> <span>bd@tractour.com</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="fa fa-map-marker"></i> <span>25737 UK Rt 11, BL 22</span>
                    </li>
                </ul>

            </div>
        </div>

    </div>
</nav>



<!-- Contact Info Section (outside of navbar) -->



    <!-- header middle area end -->
{{--</header>--}}
{{--<!-- header area end -->--}}
{{--<!-- hero area start -->--}}
{{--<div class="hero-area">--}}
{{--    <!-- main menu area start -->--}}
{{--    <div class="main-menu-area">--}}
{{--        <div class="container">--}}
{{--            <div class="main-menu-border bg-color3">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-9 col-sm-9 ">--}}
{{--                        <div class="main-menu float-right">--}}
{{--                            <nav id="mobile-menu" style="display: block;">--}}
{{--                                <ul>--}}
{{--                                    <li class="active">--}}
{{--                                        <a href="index.html">home</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">pages <i class="fa fa-angle-down"></i>--}}
{{--                                        </a>--}}
{{--                                        <ul class="sub-menu text-left">--}}
{{--                                            <li>--}}
{{--                                                <a href="about.html">About</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="services.html">services</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="blocks-services.html">blocks services</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="contact.html">Contact</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">project <i class="fa fa-angle-down"></i>--}}
{{--                                        </a>--}}
{{--                                        <ul class="sub-menu text-left">--}}
{{--                                            <li>--}}
{{--                                                <a href="project-3-col.html">project 1</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="project-3-col-masonry.html">project 2</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="project-4-col.html">project 3</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="project-4-col-slider.html">project 4</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="#">Blog <i class="fa fa-angle-down"></i>--}}
{{--                                        </a>--}}
{{--                                        <ul class="sub-menu text-left">--}}
{{--                                            <li>--}}
{{--                                                <a href="blog-2-col.html">blog 2 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="blog-3-col.html">blog 3 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">masonry blog</a>--}}
{{--                                                <ul class="sub-menu text-left">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="masonry-blog-3-col.html">masonry blog 1</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">blog left sidebar</a>--}}
{{--                                                <ul class="sub-menu text-left">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-2-col-left.html">blog left sidebar 1</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="masonry-blog-2-col-left.html">blog left sidebar--}}
{{--                                                            2</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-1-col-left.html">blog left sidebar 3</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">blog right sidebar</a>--}}
{{--                                                <ul class="sub-menu text-left">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-2-col-right.html">blog right sidebar 1</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="masonry-blog-2-col-right.html">blog right sidebar--}}
{{--                                                            2</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-1-col-right.html">blog right sidebar 3</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="blog-no-sidebar.html">blog no sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="blog-details.html">blog details</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="#">blog details sidebar</a>--}}
{{--                                                <ul class="sub-menu text-left">--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-details-left-sidebar.html">details left--}}
{{--                                                            sidebar</a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <a href="blog-details-right-sidebar.html">details right--}}
{{--                                                            sidebar</a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="contact.html">shop <i class="fa fa-angle-down"></i>--}}
{{--                                        </a>--}}
{{--                                        <ul class="sub-menu text-left">--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-3-col.html">shop 3 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-4-col.html">shop 4 column</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-2col-left-sidebar.html">shop 2 col left sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-2col-right-sidebar.html">shop 2 col right sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-3col-left-sidebar.html">shop 3 col left sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="shop-3col-right-sidebar.html">shop 3 col right sidebar</a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="login.html">login</a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="cart.html">--}}
{{--                                            <i class="fa fa-cart-plus"></i>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </nav>--}}
{{--                        </div>--}}
{{--                        <div class="mobile-menu"></div>--}}
{{--                    </div>--}}
{{--                    <div class="col-md-3 col-sm-3 ">--}}
{{--                        <div class="search-area">--}}
{{--                            <!-- search form -->--}}
{{--                            <div class="header-search-bar">--}}
{{--                                <form action="index.html">--}}
{{--                                    <input type="search" placeholder="keywords ...">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- NAVIGATION END -->--}}

    <!-- main menu area end -->
    <!-- slider area start -->

    <!-- slider area end -->
    <!-- blocks services area stat -->

<!-- Hero Slider Start -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img src="{{ asset('assets/img/about/14.jpg') }}" class="d-block w-100" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-white">Industrial Excellence</h2>
                <p>Leading the way in modern manufacturing solutions.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/img/about/12.jpg') }}" class="d-block w-100" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-white">Advanced Machinery</h2>
                <p>Equipped with cutting-edge technologies for industry growth.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
            <img src="{{ asset('assets/img/about/13.jpg') }}" class="d-block w-100" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="text-white">Trusted Industry Partners</h2>
                <p>Delivering consistent quality and reliability worldwide.</p>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Hero Slider End -->

{{--    <div class="blocks-services-area text-center mb-100 minus-t-100 wow fadeInUp">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-blocks-services">--}}
{{--                        <div class="single-blocks-img">--}}
{{--                            <img src="{{asset('assets/img/blocks/blocks-1.jpg')}}" alt="" class="img-fluid" />--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="#">welding machine using</a>--}}
{{--                        </h3>--}}
{{--                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so--}}
{{--                            beguiled and demor</p>--}}
{{--                        <a href="#" class="btn">--}}
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-blocks-services">--}}
{{--                        <div class="single-blocks-img">--}}
{{--                            <img src="{{asset('assets/img/blocks/blocks-2.jpg')}}" alt="" class="img-fluid" />--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="#">new compost technology</a>--}}
{{--                        </h3>--}}
{{--                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so--}}
{{--                            beguiled and demor</p>--}}
{{--                        <a href="#" class="btn">--}}
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="single-blocks-services">--}}
{{--                        <div class="single-blocks-img">--}}
{{--                            <img src="{{asset('assets/img/blocks/blocks-3.jpg')}}" alt="" class="img-fluid" />--}}
{{--                        </div>--}}
{{--                        <h3>--}}
{{--                            <a href="#">new welding machine</a>--}}
{{--                        </h3>--}}
{{--                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so--}}
{{--                            beguiled and demor</p>--}}
{{--                        <a href="#" class="btn">--}}
{{--                            <i class="fa fa-angle-right"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- blocks services area end -->
</div>
<!-- hero area end -->
<!-- project area start -->
<div class="project-area bg-color3 sec-p-100 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="section-title text-center mb-70">
                    <h2>projects</h2>
                    <span>
                            <img src="{{asset('assets/img/separ-logo.png')}}" alt="separetor">
                        </span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ncc msm lal
                        uFlaboreLorem ipsum dolor sit amet,</p>
                </div>
            </div>
        </div>
    </div>
    <div class="project-wrapper py-5 bg-light text-dark">
        <div class="container">


            <div class="row g-4">
                @php
                    $projects = [
                        ['img' => 'project-1.jpg', 'title' => 'Automated Machine Systems'],
                        ['img' => 'project-2.jpg', 'title' => 'Bridge Making Technology'],
                        ['img' => 'project-3.jpg', 'title' => 'Gas Energy Saving System'],
                        ['img' => 'project-4.jpg', 'title' => 'Latest Welding Technology'],
                        ['img' => 'project-5.jpg', 'title' => 'Future Architecture Ideas'],
                        ['img' => 'project-6.jpg', 'title' => 'Reusable Power System'],
                        ['img' => 'project-7.jpg', 'title' => 'Gas Saving System'],
                        ['img' => 'project-8.jpg', 'title' => 'Best Talented Engineer'],
                    ];
                @endphp

                @foreach($projects as $project)
                    <div class="col-md-3 col-sm-6">
                        <div class="single-project card border-0 shadow-sm h-100 position-relative overflow-hidden">
                            <img src="{{ asset('assets/img/project/' . $project['img']) }}" alt="Project Image" class="card-img-top" />
                            <div class="project-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center p-3"
                                 style="background: rgba(0, 0, 0, 0.6); opacity: 0; transition: 0.4s;">
                                <h5 class="text-white text-uppercase mb-3">{{ $project['title'] }}</h5>
                                <a class="btn btn-outline-light rounded-circle" href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-dark px-4 py-2">More Projects</a>
            </div>
        </div>
    </div>

    <!-- project area end -->
<!-- about us area start -->
<div class="about-area sec-p-100">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>about our history</h2>
                <p>I was started with a simple vision—to shape the unshaped.
                    What began as a small workshop with basic tools and big dreams
                    slowly evolved into a full-fledged journey of craftsmanship, precision,
                    and purpose. In the early days, everything was manual. I spent hours—sometimes days—perfecting
                    a single die by hand, learning through every mistake, and celebrating every success.
                    As technology progressed, so did I. From old-school blueprints to advanced CAD software and CNC machines,
                    I embraced the shift—not to replace the skill, but to refine it. Die making isn’t just about cutting metal;
                    it’s about understanding function, pressure, tolerances, and above all, solving problems that others don’t see.
                    Over the years, I’ve created dies for automotive parts, plastic molds, industrial tools, and everything in between.
                    Each project carried a story, a challenge, and a lesson. What I build may not always be seen, but it’s felt—through
                    the precision of a machine, the strength of a part, or the success of a product. </p>
                <a href="{{route('front.about')}}" class="btn btn-type-5 mt-30">about more</a>
            </div>
            <div class="col-md-6">
                <div class="about-slider-wraper owl-carousel owl-theme">
                    <div class="about-single-item">
                        <img src="{{asset('assets/img/about/about-1.jpg')}}" alt="about-img" class="img-fluid" />
                        <h4>industrial experimental technologies</h4>
                    </div>
                    <div class="about-single-item">
                        <img src="{{asset('assets/img/about/about-2.jpg')}}" alt="about-img" class="img-fluid" />
                        <h4>industrial experimental technologies</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->
<!-- counter area start -->
    <div class="counter-area py-5 bg-light text-center">
        <div class="container">
            <div class="row g-4">
                <!-- Single Counter -->
                <div class="col-md-3 col-6">
                    <div class="single-counter p-4 bg-white shadow rounded">
                        <i class="fa fa-thumbs-o-up fa-2x text-primary mb-3"></i>

                        <h2 class="counter display-5 fw-bold mb-1">270</h2>
                        <p class="count-name text-uppercase small text-muted">Projects Done</p>
                    </div>
                </div>

                <!-- Add more counters like this -->
                <div class="col-md-3 col-6">
                    <div class="single-counter p-4 bg-white shadow rounded">
                        <i class="fa fa-users fa-2x text-success mb-3"></i>
                        <h2 class="counter display-5 fw-bold mb-1">150</h2>
                        <p class="count-name text-uppercase small text-muted">Clients Served</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="single-counter p-4 bg-white shadow rounded">
                        <i class="fa fa-cogs fa-2x text-warning mb-3"></i>
                        <h2 class="counter display-5 fw-bold mb-1">80</h2>
                        <p class="count-name text-uppercase small text-muted">Machines Built</p>
                    </div>
                </div>

                <div class="col-md-3 col-6">
                    <div class="single-counter p-4 bg-white shadow rounded">
                        <i class="fa fa-clock-o fa-2x text-danger mb-3"></i>
                        <h2 class="counter display-5 fw-bold mb-1">10</h2>
                        <p class="count-name text-uppercase small text-muted">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- counter area end -->
<!-- services area start -->
    <!-- Services Area Start -->
    <div class="services-area sec-p-100 text-center">
        <div class="container">
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="single-services-wraper border-bottom">
                        <div class="services-icon">
                            <i class="fas fa-gas-pump fa-2x text-primary"></i>
                        </div>
                        <div class="services-content">
                            <h4>Energy & Utilities</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="single-services-wraper border-bottom">
                        <div class="services-icon">
                            <i class="fas fa-globe fa-2x text-success"></i>
                        </div>
                        <div class="services-content">
                            <h4>Internet of Things</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="single-services-wraper border-bottom">
                        <div class="services-icon">
                            <i class="fas fa-microchip fa-2x text-warning"></i>
                        </div>
                        <div class="services-content">
                            <h4>Artificial Intelligence</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="single-services-wraper">
                        <div class="services-icon">
                            <i class="fas fa-globe-asia fa-2x text-danger"></i>
                        </div>
                        <div class="services-content">
                            <h4>Worldwide Provider</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="single-services-wraper">
                        <div class="services-icon">
                            <i class="fas fa-award fa-2x text-info"></i>
                        </div>
                        <div class="services-content">
                            <h4>25+ Best Company Awards</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="single-services-wraper">
                        <div class="services-icon">
                            <i class="fas fa-lightbulb fa-2x text-secondary"></i>
                        </div>
                        <div class="services-content">
                            <h4>Best Idea Ever</h4>
                            <p>I must explain to you how all this idea of denouncing pleasure and praising</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- See More Button -->
            <a href="#" class="btn btn-type-3 mt-4">See more <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>

    <!-- Services Area End -->

    <!-- Call to Action Start -->
    <!-- Call to Action Section -->
    <div class="callto-action-area bg-dark text-white py-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <h2 class="mb-3 fw-bold">Looking for a Reliable & Stable Partner?</h2>
                    <p class="mb-4 lead">Contact us and learn more about how we can help your business grow.</p>
                    <a href="#" class="btn btn-outline-light btn-lg px-4">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action End -->

<!-- call to action area end -->
<!-- team area start -->
    <!-- Team Area -->
    <div class="team-area py-5 text-center bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row mb-5">
                <div class="col-md-8 mx-auto">
                    <h2 class="fw-bold text-uppercase">Meet Our Team</h2>
                    <img src="{{ asset('assets/img/separ-logo.png') }}" alt="Separator" class="my-3">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <!-- Team Members -->
            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow text-center h-100">
                        <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="card-img-top" alt="Michael Robert">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase mb-1">Michael Robert</h5>
                            <p class="text-muted small mb-2">Founder</p>
                            <a href="mailto:info@rob.com" class="d-block mb-3 text-decoration-none text-primary small">info@rob.com</a>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-secondary"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p class="mt-3 text-muted small">
                                We denounce with righteous indignation and dislike men who are so beguiled and demoralized.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow text-center h-100">
                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="card-img-top" alt="David Shams">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase mb-1">David Shams</h5>
                            <p class="text-muted small mb-2">Developer</p>
                            <a href="mailto:info@david.com" class="d-block mb-3 text-decoration-none text-primary small">info@david.com</a>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-secondary"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p class="mt-3 text-muted small">
                                We denounce with righteous indignation and dislike men who are so beguiled and demoralized.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow text-center h-100">
                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="card-img-top" alt="William Christopher">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase mb-1">William Christopher</h5>
                            <p class="text-muted small mb-2">Designer</p>
                            <a href="mailto:info@willim.uk" class="d-block mb-3 text-decoration-none text-primary small">info@willim.uk</a>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-secondary"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="text-secondary"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <p class="mt-3 text-muted small">
                                We denounce with righteous indignation and dislike men who are so beguiled and demoralized.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- team area end -->
<!-- quote sologan area start -->
    <!-- Quote Slogan Area -->
    <div class="quote-slogan-area py-5 text-center bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2 class="fw-bold text-uppercase mb-3">Delivering Innovation & Sustainability Goals</h2>
                    <p class="text-muted fs-6">
                        On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                        and demoralized by the charms of pleasure of the moment.
                    </p>
                    <a href="#" class="btn btn-primary mt-4 px-4 py-2 text-uppercase">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>

<!-- quote sologan area end -->
<!-- progress and tab area start -->
    <div class="progress-tab-area py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <!-- Left: Progress Bars -->
                <div class="col-md-6">
                    <h4 class="mb-4 fw-bold text-uppercase">Our Expertise</h4>
                    <div class="mb-4">
                        <label class="fw-semibold">Construction Skill</label>
                        <div class="progress">
                            <div class="progress-bar bg-primary" style="width: 90%;">90%</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="fw-semibold">Oil Engineering</label>
                        <div class="progress">
                            <div class="progress-bar bg-success" style="width: 70%;">70%</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="fw-semibold">Soil Test Skill</label>
                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 95%;">95%</div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="fw-semibold">Gas Engineering</label>
                        <div class="progress">
                            <div class="progress-bar bg-danger" style="width: 80%;">80%</div>
                        </div>
                    </div>
                </div>

                <!-- Right: Tabbed Content -->
                <div class="col-md-6">
                    <h4 class="mb-4 fw-bold text-uppercase">Service Packs</h4>

                    <!-- Nav Pills as Buttons -->
                    <ul class="nav nav-pills mb-3 gap-2" id="serviceTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active btn btn-outline-primary" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">
                                Service Pack 1
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link btn btn-outline-primary" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">
                                Service Pack 2
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link btn btn-outline-primary" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab">
                                Service Pack 3
                            </button>
                        </li>

                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" id="serviceTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                            <img src="{{ asset('assets/img/tab/tab-img.jpg') }}" class="img-fluid mb-3" alt="Tab Image">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has been the industry's standard.</p>
                            <p>Printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                            <p>This is the content for <strong>Service Pack 2</strong>. You can add a different image and detailed description here.</p>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                            <img src="{{ asset('assets/img/tab/tab-img.jpg') }}" class="img-fluid mb-3" alt="Tab Image">
                            <p>This is the content for <strong>Service Pack 3</strong>. Clean layout with image and explanation.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<!-- progress and tab area end -->
<!-- testimonial area start -->
        <div class="testimonial-area py-5 bg-light text-center">
            <div class="container">
                <!-- Section Title -->
                <div class="row mb-5">
                    <div class="col-md-8 mx-auto">
                        <h2 class="fw-bold text-uppercase">What Our Clients Say</h2>
                        <p class="text-muted">Real experiences from our satisfied partners and customers.</p>
                    </div>
                </div>

                <!-- Testimonials -->
                <div class="row g-4">
                    <!-- Testimonial 1 -->
                    <div class="col-md-6">
                        <div class="border p-4 rounded bg-white h-100">
                            <div class="mb-3">
                                <p class="text-muted fst-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip."</p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('assets/img/testimonial/test-thm-1.png') }}" class="rounded-circle mb-2" width="80" height="80" alt="Client 1">
                                <h5 class="mb-0 fw-bold">Michael David</h5>
                                <small class="text-muted">Engineer</small>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="col-md-6">
                        <div class="border p-4 rounded bg-white h-100">
                            <div class="mb-3">
                                <p class="text-muted fst-italic">"Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore."</p>
                            </div>
                            <div class="d-flex flex-column align-items-center">
                                <img src="{{ asset('assets/img/testimonial/test-thm-2.jpg') }}" class="rounded-circle mb-2" width="80" height="80" alt="Client 2">
                                <h5 class="mb-0 fw-bold">David Marth</h5>
                                <small class="text-muted">CEO</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- testimonial area end -->
<!-- video and accordian area start -->
        <div class="video-and-accordian-area sec-p-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tractour-video-area text-center position-relative">
                            <img src="{{asset('assets/img/video/video-bg.jpg')}}" alt="" class="img-fluid" />
                            <div class="video-hvr">
                                <a class="video-view" href="https://www.youtube.com/watch?v=BN0u4EPUYx8">
                                    <i class="fa fa-play-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tractour-accordian-wrapeer">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="tractor-heading1">
                                        <a href="#" class="btn btn-link" data-bs-toggle="collapse"
                                           data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">How
                                            Can We Work?</a>
                                    </div>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                         aria-labelledby="tractor-heading1" data-bs-parent="#accordion">
                                        <div class="card-body">simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galle of type and scrambled it to make a type
                                            book. It h as survived not only five centuries, but also the leap into ele
                                            ctronic typesetting,</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="tractor-heading2">
                                        <a href="#" class="btn btn-link collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapse2" aria-expanded="false"
                                           aria-controls="collapse2">payment system</a>
                                    </div>
                                    <div id="collapse2" class="accordion-collapse collapse"
                                         aria-labelledby="tractor-heading2" data-bs-parent="#accordion">
                                        <div class="card-body">simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galle of type and scrambled it to make a type
                                            book. It h as survived not only five centuries, but also the leap into ele
                                            ctronic typesetting,</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="tractor-heading3">
                                        <a href="#" class="btn btn-link collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">24/7
                                            supports online</a>
                                    </div>
                                    <div id="collapse3" class="accordion-collapse collapse"
                                         aria-labelledby="tractor-heading3" data-bs-parent="#accordion">
                                        <div class="card-body">simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galle of type and scrambled it to make a type
                                            book. It h as survived not only five centuries, but also the leap into ele
                                            ctronic typesetting,</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="tractor-heading4">
                                        <a href="#" class="btn btn-link collapsed" data-bs-toggle="collapse"
                                           data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">bug
                                            fixing</a>
                                    </div>
                                    <div id="collapse4" class="accordion-collapse collapse"
                                         aria-labelledby="tractor-heading4" data-bs-parent="#accordion">
                                        <div class="card-body">simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galle of type and scrambled it to make a type
                                            book. It h as survived not only five centuries, but also the leap into ele
                                            ctronic typesetting,</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video and accordian area end -->
<!-- blog area start -->

<!-- blog area end -->
<!-- client slider area start -->
        <div class="client-slider-area py-5 bg-light">
            <div class="container">
                <div class="text-center mb-4">
                    <h4 class="fw-bold text-uppercase">Our Trusted Clients</h4>
                </div>
                <div id="clientCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center gap-4 flex-wrap">
                                <img src="{{ asset('assets/img/client/client-1.png') }}" alt="Client 1" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-2.png') }}" alt="Client 2" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-3.png') }}" alt="Client 3" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-4.png') }}" alt="Client 4" class="img-fluid" style="max-height: 60px;">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center gap-4 flex-wrap">
                                <img src="{{ asset('assets/img/client/client-1.png') }}" alt="Client 1" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-2.png') }}" alt="Client 2" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-3.png') }}" alt="Client 3" class="img-fluid" style="max-height: 60px;">
                                <img src="{{ asset('assets/img/client/client-4.png') }}" alt="Client 4" class="img-fluid" style="max-height: 60px;">
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#clientCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#clientCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>




        <footer class="bg-light text-dark pt-5 pb-4 mt-auto">
            <div class="container">
                <div class="row gy-5">
                    <!-- Logo and Description -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-logo mb-3">
                                <a href="#">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Footer Logo" class="img-fluid" />
                                </a>
                            </div>
                            <p class="small mb-0">
                                Dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text since the 1500s.
                            </p>
                        </div>
                    </div>

                    <!-- Popular Links -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-uppercase fw-semibold mb-4">Popular Links</h5>
                            <ul class="list-unstyled">
                                @foreach(['Laboratory','Industry','Materials','Audio','Metallurgy','Video'] as $link)
                                    <li class="mb-2">
                                        <a href="#" class="text-dark text-decoration-none">
                                            {{ $link }} <i class="fa fa-arrow-circle-o-right ms-1"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-uppercase fw-semibold mb-4">Tags</h5>
                            <div class="d-flex flex-wrap gap-2">
                                @foreach(['Awesome','Beautiful','Flat Design','iOS','ThemeForest','Mass'] as $tag)
                                    <a href="#" class="badge bg-secondary-subtle text-dark text-decoration-none px-3 py-2">
                                        {{ $tag }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info & Social Links -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h5 class="text-uppercase fw-semibold mb-4">Contact Info</h5>
                            <div class="mb-3">
                                <h6 class="mb-1 fw-bold">Office One</h6>
                                <p class="small mb-0">123 Jessore JS, Khulna KH, Chowrasta, Jessore</p>
                            </div>
                            <div class="d-flex gap-3 mt-3">
                                <a href="#" class="text-dark fs-5"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#" class="text-dark fs-5"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="text-dark fs-5"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="text-dark fs-5"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Strip -->
                <div class="row mt-5 pt-4 border-top border-secondary-subtle">
                    <div class="col-md-6 text-start small text-muted">
                        &copy; {{ date('Y') }} YourCompany. All rights reserved.
                    </div>
                    <div class="col-md-6 text-end">
                        <a href="#" class="text-dark small text-decoration-none me-3">Privacy Policy</a>
                        <a href="#" class="text-dark small text-decoration-none">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Copyright Text Strip -->
        <div class="bg-dark text-white text-center py-3">
            <small>
                Copyright &copy; <a href="#" class="text-white fw-bold text-decoration-none">Tr<span class="text-primary">a</span>ct<span class="text-danger">o</span>ur</a>
                | All rights reserved | Designed by <a href="#" class="text-white fw-semibold text-decoration-none">theme_group</a>
            </small>
        </div>

        <!-- footer area end -->
        <!-- scrolltop button -->

        <!-- JS here -->

        <script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/js/jquery.barfiller.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
        <script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/nice-select.min.js')}}"></script>
        <script src="{{asset('assets/js/scrolltop.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>





















<!-- client slider area end -->
<!-- footer area start -->
        <!-- Footer Section -->
