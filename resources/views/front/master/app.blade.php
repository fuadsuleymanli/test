<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <!-- Site Title-->
    <title>Sign Up</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    @yield('css')
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('front/images/ie8-panel/warning_bar_0000_us.jpg') }}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{ asset('front/js/html5shiv.min.js') }}"></script>
    <![endif]-->
</head>
<body>
<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-light" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static">
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand rd-navbar-brand-desktop"><a class="brand-name" href="{{ route('front.index') }}"><img width="148" height="30" src="{{ asset('front/images/logo-dark-148x30.png') }}" alt=""></a></div>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand rd-navbar-brand-mobile"><a class="brand-name" href="{{ route('front.index') }}"><img width="148" height="30" src="{{ asset('front/images/logo-dark-148x30.png') }}" alt=""></a></div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="{{ route('front.index') }}">Home</a></li>
                            <li><a href="tours-grid.html">Destinations</a>
                                <!-- RD Navbar Dropdown-->
                                <div class="rd-navbar-megamenu">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <p class="rd-megamenu-header text-big text-black text-ubold">Pages 1</p>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="press.html">Press</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="destinations.html">Destinations</a></li>
                                                <li><a href="{{ route('front.user.signup') }}">Sign Up</a></li>
                                                <li><a href="signup-variant-2.html">Sign Up v2</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="rd-megamenu-header text-big text-black text-ubold">Pages 2</p>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="{{ route('front.user.login') }}">Login</a></li>
                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                                <li><a href="privacy.html">Privacy Policy</a></li>
                                                <li><a href="terms-of-use.html">Terms Of Use</a></li>
                                                <li><a href="sitemap.html">Sitemap</a></li>
                                                <li><a href="search-results.html">Search Results</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="rd-megamenu-header text-big text-black text-ubold">Pages 3</p>
                                            <ul class="rd-megamenu-list">
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="503.html">503</a></li>
                                                <li><a href="comingsoon.html">Coming Soon</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="underconstruction.html">Under Construction</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @if(\Illuminate\Support\Facades\Auth::check())
                            @if(\Illuminate\Support\Facades\Auth::user()->user_type == 1)
                              <li><a href="{{ route('front.user.login') }}">Login</a></li>
                            @else
                              <li><a href="#">Account</a>
                                <ul class="rd-navbar-dropdown">
                                  <li><a href="{{ route('front.user.profile') }}">Profile</a></li>
                                  @if(Auth::user()->activation == 1)
                                  <li><a href="{{ route('front.user.tours') }}">Tours</a></li>
                                  @endif
                                  <li><a href="{{ route('front.user.logout') }}">Logout</a></li>
                                </ul>
                              </li>
                            @endif
                            @else
                                <li><a href="{{ route('front.user.login') }}">Login</a></li>
                            @endif
                            <li><a href="#">Services</a>
                                <!-- RD Navbar Megamenu-->
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="gallery-cobbles.html">Individual tours</a></li>
                                    <li><a href="gallery-fullwidth.html">Packages</a></li>
                                    <li><a href="gallery-grid.html">Transfers</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery-cobbles.html">Gallery</a></li>
                            <li><a href="blog-grid.html">About us</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="blog-grid.html">Our teams</a></li>
                                    <li><a href="blog-grid-sidebar-left.html">What we do</a></li>
                                    <li><a href="blog-list.html">FAQ</a></li>
                                    <li><a href="blog-list-sidebar-left.html">Testimonials</a></li>
                                    <li><a href="blog-list-variant-2.html">Our nission</a></li>
                                    <li><a href="blog-list-variant-2-sidebar-left.html">Terms of use & Conditions</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('front.contacts') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Sign Up-->
    @yield('content')

    <!-- Page Footer-->
    <footer class="page-footer footer-default section-top-80 section-bottom-34 section-lg-bottom-15 text-md-left">
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-md-8 col-lg-12">
                    <div class="row row-40 justify-content-sm-center">
                        <div class="col-md-6 col-lg-3 col-xl-3 order-lg-1"><a class="brand-logo" href="{{ route('front.index') }}"><img width="148" height="30" src="{{ asset('front/images/logo-dark-148x30.png') }}" alt=""></a>
                            <p class="text-small inset-xl-right-80">
                                <div>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.about.aboutus') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>About us</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.about.ourmission') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>Our mission</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.about.terms') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>Terms of use & Conditions</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.about.review') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>Reviews</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.yourtour') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>List your tours</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.about.faq') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>FAQ</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="{{ route('front.user.findyourtour') }}"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>Find your tours</span></span></span></a></span>
                                    <span class="d-block text-small"><a class="text-gray" href="#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-body"><span>Share your blog with us</span></span></span></a></span>
                                </div>
                            </p>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xl-3 order-lg-4">
                            <p class="text-big text-black">Follow Us</p>
                            <!-- List Inline-->
                            <ul class="list-inline">
                                <li class="text-center"><a class="icon icon-square icon-filled-gallery fa fa-facebook-f text-gray" href="#"></a></li>
                                <li class="text-center"><a class="icon icon-square icon-filled-gallery fa fa-instagram text-gray" href="#"></a></li>
                                <li class="text-center"><a class="icon icon-square icon-filled-gallery fa fa-twitter text-gray" href="#"></a></li>
                                <li class="text-center"><a class="icon icon-square icon-filled-gallery fa fa-linkedin text-gray" href="#"></a></li>
                                <li class="text-center"><a class="icon icon-square icon-filled-gallery fa fa-youtube text-gray" href="#"></a></li>
                            </ul>
                            <!-- Button trigger modal-->
                            <button class="button button-primary" type="button" data-toggle="modal" data-target="#subscribe" style="min-width:160px;">Subscribe</button>
                            <!-- Modal-->
                            <div class="modal modal-custom fade text-center" id="subscribe" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="container">
                                                <div class="row justify-content-sm-center align-items-sm-center">
                                                    <div class="col-md-6 bg-image bg-image-1"></div>
                                                    <div class="col-md-6">
                                                        <div class="modal-body-column-content">
                                                            <h5 class="text-ubold">Subscribe to <br class="d-none d-xl-inline-block"> our newsletter</h5>
                                                            <p class="font-italic text-small text-black">Subscribe and <span class="text-ubold">get 5% off</span> on your first tour!</p>
                                                            <!-- RD Mailform-->
                                                            <form class="rd-mailform rd-mailform-subscribe" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                                                <div class="form-wrap form-wrap-xs">
                                                                    <label class="form-label" for="contact-email">Enter Your email here...</label>
                                                                    <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                                                                </div>
                                                                <button class="button button-primary button-block" type="submit">SUBSCRIBE</button>
                                                            </form>
                                                            <!-- List Inline-->
                                                            <ul class="list-inline list-primary list-inline-13">
                                                                <li class="text-center"><a class="icon fa fa-facebook-f text-black" href="#"></a></li>
                                                                <li class="text-center"><a class="icon fa fa-instagram text-black" href="#"></a></li>
                                                                <li class="text-center"><a class="icon fa fa-twitter text-black" href="#"></a></li>
                                                                <li class="text-center"><a class="icon fa fa-linkedin text-black" href="#"></a></li>
                                                                <li class="text-center"><a class="icon fa fa-youtube text-black" href="#"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                <ul class="list-inline list-inline-8">
                                    <li>
                                        <p class="text-extra-small"><img width="33" height="20" src="{{ asset('front/images/payment/visa.png') }}" alt=""></p>
                                    </li>
                                    <li>
                                        <p class="text-extra-small"><img width="36" height="24" src="{{ asset('front/images/payment/master.png') }}" alt=""></p>
                                    </li>
                                    <li>
                                        <p class="text-extra-small"><img width="36" height="24" src="{{ asset('front/images/payment/maestro.png') }}" alt=""></p>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="col-sm-8 col-md-12 col-lg-6 order-lg-2">
                            <p class="text-big text-black">Our Contacts</p>
                            <!-- Contact Info-->
                            <address class="contact-info text-left">
                                <div class="row row-15 justify-content-sm-center">
                                    <div class="col-md-6">
                                        <p class="d-block text-small contact-info-address"><a class="text-gray" href="#"><span class="unit flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-01-16x21.png') }}" width="16" height="21" alt=""></span><span class="unit-body"><span>H. Zardabi 53 A, 1st floor, Baku, Azerbaijan.</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="callto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-03-12x20.png') }}" width="19" height="19" alt=""></span><span class="unit-body"><span>+994 50 447 43 33</span></span></span></a></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="d-block text-small"><a class="text-gray" href="callto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-03-12x20.png') }}" width="12" height="20" alt=""></span><span class="unit-body"><span>323-678-567</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="mailto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-04-20x13.png') }}" width="20" height="13" alt=""></span><span class="unit-body"><span>info@book –journey.com</span></span></span></a></p>
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hr bg-gallery"></div>
            <div class="row row-0 justify-content-sm-center justify-content-md-between">
                <div class="col-md-5 col-lg-4 text-md-left">
                    <p class="text-extra-small">
                        Copyright &#169;<span class="copyright-year"></span><a href="./"> SunTravel</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-5 col-lg-4 text-md-right">
                    <!-- List Inline-->
                    <ul class="list-inline list-inline-8">
                        <li>
                            <p class="text-extra-small"><a class="text-gray" href="privacy.html">Privacy Policy</a></p>
                        </li>
                        <li>
                            <p class="text-extra-small"><a class="text-gray" href="terms-of-use.html">Terms of Use</a></p>
                        </li>
                        <li>
                            <p class="text-extra-small"><a class="text-gray" href="contacts.html">Contact Support</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- PhotoSwipe Gallery-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__cent"></div>
            </div>
            <div class="pswp__counter"></div>
        </div>
    </div>
</div>
<!-- Java script-->
@yield('js')
</body>
</html>
