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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 shadow-sm">
    <div class="container">

        <!-- Logo with Tagline -->
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logos.png') }}" alt="IIA Logo" height="40" class="me-2">
            <div class="d-flex flex-column lh-sm">


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

<div class="about-area sec-p-100 text-center bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Title -->
                <div class="mb-5">
                    <h2 class="fw-bold text-uppercase mb-2">About Our Work</h2>
                    <p class="text-muted">Explore our industrial experimental technologies through this visual slider</p>
                </div>

                <!-- About Slider -->
                <div class="about-slider-wraper owl-carousel owl-theme">
                    <div class="about-single-item px-3">
                        <img src="{{ asset('assets/img/about/about-1.jpg') }}" alt="Industrial Technology" class="img-fluid rounded shadow" />
                        <h5 class="mt-3 fw-semibold text-capitalize">Industrial Experimental Technologies</h5>
                    </div>
                    <div class="about-single-item px-3">
                        <img src="{{ asset('assets/img/about/about-2.jpg') }}" alt="Industrial Technology" class="img-fluid rounded shadow" />
                        <h5 class="mt-3 fw-semibold text-capitalize">Industrial Experimental Technologies</h5>
                    </div>
                    <!-- You can add more items here -->
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="row">
            <div class="col-md-12">
                <h2>about our history</h2>
                <p>But I must explain to you how all this mistaken idea of denouncing pleasure praising pain was
                    born and I will give you a complete account of the system, expound the actual teachings of the
                    great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                    avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                    pleasure rationally encounter consequences are extremely painful. Nor again is there anyone who
                    loves or pursues or desires to obtain pain of itselfBut I must explain to you how all this
                    mistaken idea of denouncing i and pleasure and praising pain was born and I will give you a
                    complete account of system, and expound the actual teachings of </p>
            </div>
        </div>
    </div>
</div>
<!-- about us area end -->
<!-- quote sologan area start -->
<div class="quote-sologan-area sec-p-100 text-center bg-color3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>delivering innovation sustainability goals.</h2>
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                    demoralized by the charms of pleasure of the moment</p>
                <a href="#" class="btn btn-type-3 mt-30">get a quote</a>
            </div>
        </div>
    </div>
</div>
<!-- quote sologan area end -->
<!-- footer area start -->
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
