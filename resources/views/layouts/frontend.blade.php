
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>SSKnit Fashion</title>
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/meanmenu.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/media.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('gallaryAsset/css/lightbox.min.css') }}">

</head>

<body>
    <!-- Header Part Start -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="header-content">
                    <div class="col-md-6 col-md-offset-6">
                        <div class="header-right text-right">
                            <ul>
                                <li>
                                    <a href="my-account.html"><i class="fa fa-user"></i> My Account</a>
                                </li>
                                <li>
                                    <a href="my-account.html">Login / Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Part End -->

    <!-- mobile menu Start -->
    <nav class="mobile-menu hidden">
        <a href="index.html">
            <img src="frontend_assets/SSKnit_Fashion.png" alt="logo">
        </a>
        <ul>
            <li class="">
                <a href="{{ url('/') }}">
                    Home
                </a>
            </li>
            <li class="">
                <a href="{{ url('/about') }}">
                    About
                </a>
            </li>
            <li class="">
                <a class="" href="{{ url('/imagegallary') }}">
                    Gallary
                </a>
            </li>
            <li class="">
                <a class="" href="{{ url('/workplace') }}">
                    Work Place
                </a>
                {{-- <ul>
                    <a class="" href="{{ url('/about') }}">About</a>
                    <a class="" href="shopping-cart.htmlLogo">Cart</a>
                    <a class="" href="checkout.html">Checkout</a>
                    <a class="" href="my-account.html">Login</a>
                    <a class="" href="my-account.html">Register</a>
                    <a class="" href="404.html">404</a>
                </ul> --}}
            </li>
            <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
    </nav>
    <!-- mobile menu end -->

    <!-- Navbar Part Start -->
    <nav class="navbar navbar-default hidden-xs">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    {{-- <img src="frontend_assets/SSKnit_Fashion.png" alt="logo" class="img-responsive"> --}}
                      <img src="logo.png" style="height:70px; width:300px;" alt="logo" class="img-responsive">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--            <li class="active"><a href="index.html">Home</a></li>-->
                    <!--            <li><a href="product-grid-view.html">Men</a></li>-->
                    <!--            <li><a href="product-grid-view-with-sidebar.html">Women</a></li>-->
                    <!--            <li><a href="product-list-view-with-sidebar.html">Accesorries</a></li>-->
                    <!--            <li><a href="blog-grid-view.html">Blog</a></li>-->
                    <li class="nav-item dropdown">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item dropdown">
                        <a href="{{ url('/imagegallary') }}">
                            Gallary
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/workplace') }}">
                            Work Place
                        </a>
                        {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="shopping-cart.html">Cart</a>
                            <a class="dropdown-item" href="checkout.html">Checkout</a>
                            <a class="dropdown-item" href="my-account.html">Login</a>
                            <a class="dropdown-item" href="my-account.html">Register</a>
                            <a class="dropdown-item" href="404.html">404</a>
                        </div> --}}
                    </li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar Part End -->

<body>


@yield('content');










<!-- Footer Part Start -->
<body>

<section id="footer">
    <div class="footer-bg">
        <div class="container">
            <div class="row">
                <div class="footer-main">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-logo">
                            <a href="#"><img src="logo.png" alt="footer-logo" class="img-responsive"></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="contact">
                            <h2>Contact us</h2>
                            <p><i class="fa fa-map-marker"></i> <a href="#">1234, Parkstreet Avenue, NewYork</a> </p>
                            <p><i class="fa fa-phone"></i> <a href="tel:+12345678900">+123 456 78900</a>,<a href="tel:+00987654321"> +009 876 54321</a> </p>
                            <p><i class="fa fa-envelope"></i> <a href="mailto:info@e-feri.com">info@e-feri.com</a>,<a href="mailto:e-feri@info.com"> e-feri@info.com</a> </p>
                            <p><i class="fa fa-globe"></i> <a href="www.e-feri.com">www.e-feri.com</a>,<a href="www.infoferi.com">www.infoferi.com</a> </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="account">
                            <h2>my account</h2>
                            <a href="my-account.html">my account</a>
                            <a href="shopping-cart.html">wishlist</a>
                            <a href="shopping-cart.html">shopping cart</a>
                            <a href="#">compare</a>
                            <a href="checkout.html">checkout</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="newsletter">
                            <h2>Sign Up For Newsletter</h2>
                            <form>
                                <div class="input-group">
                                    <input id="1" class="form-control" type="text" name="search" placeholder="Your Mail" required />
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" style="background:#da251c;" type="submit">Submit</button>
                                    </span>
                                </div>
                            </form>
                            <div class="footer-social">
                                <h3>follow us on</h3>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Part End -->

<!-- Footer Bottom Start -->
<section id="footer-btm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="copywright">
                    <p>Copyright &copy; 2019. All right reserved by <a href="index.html">E-BUY</a></p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="payment text-right">
                    <img src="{{ url('footer_image/card1.png') }}" alt="card" class="img-responsive">
                    <img src="{{ url('footer_image/card2.png') }}" alt="card" class="img-responsive">
                    <img src="{{ url('footer_image/card3.png') }}" alt="card" class="img-responsive">
                    <img src="{{ url('footer_image/card4.png') }}" alt="card" class="img-responsive">
                    <img src="{{ url('footer_image/card5.png') }}" alt="card" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer Bottom End -->


    <script src="{{ asset('frontend_assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/jquery.meanmenu.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend_assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend_assets/js/handleCounter.js') }}"></script>
    <script src="{{ asset('gallaryAsset/js/lightbox.js') }}"></script>


</body>

</html>
