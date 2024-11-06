<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Listing & Directory</title>
    <!-- Favicon -->
    <link rel="icon" href="{{url('assets/images/favicon.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:100,200,300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700&amp;display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.filer.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/jquery.filer-dragdropbox-theme.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
    <script src="{{url('assets/js/modernizr.js')}}"></script> <!-- Modernizr -->
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="menu-full-width">
                        <div class="logo">
                            <a href="{{url('')}}"><img src="{{url('assets/images/logo.png')}}" alt="logo"></a>
                        </div><!-- end logo -->
                        <div class="main-menu-content">
                            <nav>
                                <ul>
                                    <li><a href="{{url('')}}">home </a></li>
                                    <li><a href="{{route('about')}}">About </a></li>
                                    <li><a href="{{route('locations')}}">Locations </a></li>
                                    <li><a href="{{route('packages')}}">Packages </a></li>

                                </ul>
                            </nav>
                        </div><!-- end main-menu-content -->
                        <div class="logo-right-content">
                            <ul class="author-access-list">
                                @guest
                                <li>
                                    <a href="{{route('login')}}">login</a>
                                    <span class="or-text">or</span>
                                    <a href="{{route('register')}}">sign up</a>
                                </li>
                                @endguest
                                <li>
                                    <a href="{{route('listing')}}" class="theme__btn">
                                        <span class="la la-plus-circle"></span>
                                        add listing
                                    </a>
                                </li>
                            </ul>
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->


                            @auth
                            <div class="side-user-menu-open">
                                <span class="la la-user"></span>
                            </div><!-- end side-user-menu-open -->
                            @endauth


                        </div><!-- end logo-right-content -->
                    </div><!-- end menu-full-width -->
                </div><!-- end col-md-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <li>
                    <a href="#">home <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="index.html">home one</a></li>
                        <li><a href="index2.html">home two  </a></li>
                        <li><a href="index3.html">home three <span class="new-page-badge">new</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">categories <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="all-categories.html">all categories</a></li>
                        <li><a href="all-locations.html">all locations</a></li>
                        <li><a href="top-place.html">top places </a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">listings <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="listing-grid.html">listing grid</a></li>
                        <li><a href="list-map-view.html">map view  </a></li>
                        <li><a href="list-map-view2.html">map view 2  </a></li>
                        <li><a href="listing-list.html">listing list  </a></li>
                        <li><a href="list-left-sidebar.html">left sidebar  </a></li>
                        <li><a href="list-right-sidebar.html">right sidebar </a></li>
                        <li><a href="listing-details.html">listing details</a></li>
                        <li><a href="add-listing.html">add listing</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">pages <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="user-profile.html">user profile</a></li>
                        <li><a href="top-author.html">top authors </a></li>
                        <li><a href="dashboard.html">dashboard</a></li>
                        <li><a href="booking.html">booking  </a></li>
                        <li><a href="booking-confirmation.html">booking confirmation </a></li>
                        <li><a href="invoice.html">invoice</a></li>
                        <li><a href="pricing.html">pricing</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="faq.html">faq <span class="new-page-badge">new</span></a></li>
                        <li><a href="contact.html">contact</a></li>
                        <li><a href="page-404.html">404 page</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">blog <span class="la la-angle-down"></span></a>
                    <ul class="dropdown-menu-item">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-left-sidebar.html">left sidebar </a></li>
                        <li><a href="blog-right-sidebar.html">right sidebar </a></li>
                        <li><a href="blog-single.html">blog detail</a></li>
                    </ul>
                </li>
            </ul>
            <div class="side-nav-button">
                <a href="login.html" class="theme__btn">login</a>
                <a href="sign-up.html" class="theme__btn">sign up</a>
            </div><!-- end side-nav-button -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
    @auth
    <div class="side-user-panel">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap side-user-menu-wrap">
            <div class="side-user-img">

                @if(!auth::user()->image=='')
                    <img src="{{url('assets/images/profile/'.auth::user()->image)}}" alt="image">
                @else
                    <img src="{{url('assets/images/profile/user.png')}}" alt="image">
                @endif




                <h4 class="su__name">{{auth::user()->name}}</h4>
                <span class="su__meta">Joined 3 years ago</span>
                <div class="avatar-icon">
                    <a href="{{route('myprofile')}}" data-toggle="tooltip" data-placement="top" title="Change Avatar"> <i class="fa fa-plus"></i></a>
                </div>
            </div>
            <ul class="side-menu-ul">
                <li><a href="{{route('myprofile')}}"><span class="la la-user user-icon"></span> My Profile</a></li>
                <li><a href="{{ route('mylist') }}"><span class="la la-list-alt user-icon"></span> My Listings</a></li>
                <li><a href="{{route('dashboard')}}"><span class="la la-bookmark-o user-icon"></span> My Bookmarks</a></li>
                <li><a href="{{route('listing')}}"><span class="la la-plus-circle user-icon"></span> add listing</a></li>
                <li><div class="dropdown-divider"></div></li>
                <li><a href="#"><span class="la la-question user-icon"></span> help</a></li>
                <li><a href="#"><span class="la la-gear user-icon"></span> Settings</a></li>



                <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <span class="la la-power-off user-icon"></span> Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form></li>
            </ul>
            <div class="side-user-search contact-form-action">
                <form method="post">
                    <div class="form-group">
                        <input class="form-control" type="search" name="search-field" placeholder="Search by keywords">
                        <button type="button" class="theme__btn search__btn">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                </form>
            </div><!-- end sidebar-widget -->
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-user-panel -->
    @endauth
</header>
<!-- ================================
         END HEADER AREA
================================= -->
@yield('content')

<!-- ================================
START FOOTER AREA
================================= -->
<section class="cta-area cta-area2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cta-box clearfix">
                    <div class="col-md-8">
                        <div class="section-heading">
                            <h2 class="sec__title sec__title2">Subscribe to Newsletter!</h2>
                            <p class="sec__meta">
                                Subscribe to get latest updates and information.
                            </p>
                        </div><!-- end section-heading -->
                    </div><!-- end col-md-8 -->
                    <div class="col-md-4">
                        <div class="contact-form-action">
                            <!--Contact Form-->
                            <form method="post">
                                <span class="la la-envelope-o"></span>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="theme__btn" type="submit">Subscribe</button>
                            </form>
                        </div><!-- end contact-form-action -->
                    </div><!-- end col-md-3 -->
                </div><!-- end cta-box -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area">
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="box-icon"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-item">
                    <div class="logo">
                        <a href="index.html" class="foot-logo"><img src="{{url('assets/images/logo2.png')}}" alt="logo"></a>
                        <ul class="foot-links">
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Behance">
                                    <i class="fa fa-behance"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- end logo -->
                </div><!-- end footer-item -->
            </div><!-- end col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Quick Links</h4>
                    <ul class="user-links">
                        <li><a href="{{route('about')}}">about us</a></li>
                        <li><a href="{{route('register')}}">sign up</a></li>
                        <li><a href="{{route('login')}}">log in</a></li>
                        <li><a href="{{route('listing')}}">add listing</a></li>
                        <li><a href="contact.html">contact us</a></li>
                        <li><a href="{{route('packages')}}">pricing</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Categories</h4>
                    <ul class="user-links">
                        <li><a href="#">Shops</a></li>
                        <li><a href="#">Hotels</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Bars</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Fitness</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-md-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="footer-item">
                    <h4 class="footer__title">Contact with Us</h4>
                    <ul class="user-links contact-links">
                        <li><span class="la la-home contact-icon"></span> 12345 Little Baker St, Melbourne </li>
                        <li><span class="la la-headphones contact-icon"></span> <a href="#">+ 61 23 8093 3400</a></li>
                        <li><span class="la la-envelope-o contact-icon"></span> <a href="#">dirto@gmail.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-md-3 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-md-12">
                <div class="copy-right">
                    <p class="copy__desc">
                        &copy; Copyright Dirto 2019. Made with
                        <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">Techydevs.</a>
                    </p>
                    <ul class="condition-links">
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div><!-- end copy-right -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.js')}}"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{url('assets/js/isotope-3.0.6.min.js')}}"></script>
<script src="{{url('assets/js/animated-headline.js')}}"></script>
<script src="{{url('assets/js/select2.min.js')}}"></script>
<script src="{{url('assets/js/moment.min.js')}}"></script>
<script src="{{url('assets/js/daterangepicker.js')}}"></script>
<script src="{{url('assets/js/waypoints.min.js')}}"></script>
<script src="{{url('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{url('assets/js/jquery.show-more.js')}}"></script>
<script src="{{url('assets/js/jquery-rating.js')}}"></script>
<script src="{{url('assets/js/jquery.filer.min.js')}}"></script>
<script src="{{url('assets/js/smooth-scrolling.js')}}"></script>
<script src="{{url('assets/js/main.js')}}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('custom-scripts')
</body>
</html>