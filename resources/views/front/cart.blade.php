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






<div class="cart-area py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Cart Table -->
                <div class="table-responsive mb-4">
                    <table class="table table-bordered align-middle text-center">
                        <thead class="table-dark">
                        <tr>
                            <th>Delete</th>
                            <th>Product</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#" class="text-danger fw-bold">X</a></td>
                            <td><img src="assets/img/cart/cart-1.jpg" alt="" class="img-fluid" width="60"></td>
                            <td>Daisy Coffee Table</td>
                            <td>$350.00</td>
                            <td>
                                <select class="form-select">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </td>
                            <td>$350.00</td>
                        </tr>
                        <tr>
                            <td><a href="#" class="text-danger fw-bold">X</a></td>
                            <td><img src="assets/img/cart/cart-2.jpg" alt="" class="img-fluid" width="60"></td>
                            <td>Daisy Coffee Table</td>
                            <td>$350.00</td>
                            <td>
                                <select class="form-select">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </td>
                            <td>$350.00</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Coupon & Update -->
                <div class="row mb-5">
                    <div class="col-md-8">
                        <form class="d-flex gap-2">
                            <input type="text" class="form-control" placeholder="Coupon code">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </form>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-secondary">Update Cart</button>
                    </div>
                </div>

                <!-- Shipping Area -->
                <div class="row mb-5">
                    <div class="col-12">
                        <h5 class="mb-3">Calculate Shipping</h5>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <select class="form-select">
                                    <option selected>Bangladesh</option>
                                    <option>Algeria</option>
                                    <option>Afghanistan</option>
                                    <option>Ghana</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="State / County">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Zip / Postal Code">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 01">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Address Line 02">
                            </div>
                            <div class="col-md-6 text-end">
                                <button class="btn btn-info">Update Totals</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-3">Cart Totals</h5>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th>Cart Subtotal</th>
                                <td>$168.00</td>
                            </tr>
                            <tr>
                                <th>Shipping and Handling</th>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td>$168.00</td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button class="btn btn-success">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>

            </div>
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
</html>
