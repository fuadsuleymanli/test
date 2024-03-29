<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>SunTravel</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('front/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-header slider-menu-position">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-transparent rd-navbar-dark-stuck" data-lg-device-layout="rd-navbar-fixed" data-xl-device-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="1px" data-xl-stick-up-offset="1px" data-xxl-stick-up-offset="1px" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-xl-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand rd-navbar-brand-desktop"><a class="brand-name" href="{{ route('front.index') }}"><img width="148" height="30" src="{{ asset('front/images/logo-light-148x30.png') }}" alt=""></a></div>
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
      <!-- Swiper-->
      <section class="swiper-container swiper-slider" data-height="" data-min-height="400px" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="{{ asset('front/images/backgrounds/background-01-1920x900.jpg') }}"></div>
          <div class="swiper-slide" data-slide-bg="{{ asset('front/images/backgrounds/background-02-1920x900.jpg') }}"></div>
          <div class="swiper-slide" data-slide-bg="{{ asset('front/images/backgrounds/background-03-1920x900.jpg') }}"></div>
        </div>
        <div class="swiper-caption-absolute">
          <div class="container">
            <div class="row justify-content-sm-center">
              <div class="col-xl-10">
                <h1 class="text-white">Enjoy Your Dream Vacation</h1>
                <p class="h6 text-white">Travel to the any corner of the world, without going around in circles.</p>
                <!-- Form-->
                <!-- <form class="rd-mailform form-inline-search">
                  <div class="form-wrap form-wrap-xs form-inline-item">
                    <label class="form-label" for="index-destination">Your Destination</label>
                    <input class="form-input" id="index-destination" type="text" name="destination">
                  </div>
                  <div class="form-wrap form-wrap-xs form-inline-item form-inline-item-xs">
                    <label class="form-label" for="index-arrival">Arrival</label>
                    <input class="form-input" id="index-arrival" type="text" name="destination">
                  </div>
                  <div class="form-wrap form-wrap-xs form-inline-item form-inline-item-xs">
                    <label class="form-label" for="index-departure">Departure</label>
                    <input class="form-input" id="index-departure" type="text" name="departure">
                  </div>
                  <div class="form-wrap form-wrap-xs form-inline-item">
                    <label class="form-label" for="index-budget">Your Budget ($)</label>
                    <input class="form-input" id="index-budget" type="text" name="budget">
                  </div>
                  <div class="form-inline-item button-wrap">
                    <button class="button button-primary" type="submit">Search</button>
                  </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-left text-gray"></span></div>
        <div class="swiper-button-next"><span class="icon icon-xxs icon-circle icon-filled-white mdi mdi-chevron-right text-gray"></span></div>
      </section>
      <!-- Best Offers-->
      <section class="section-80 section-md-top-70 bg-wild-wand">
        <div class="container">
          <h3>Best Offers</h3>
          <p>Check out our top-rated tours</p>
          <div class="row row-30 justify-content-sm-center">
            @foreach($allTours as $allTour)
            <div class="col-md-5 col-lg-4">
              <!-- Box Offer-->
              <div class="box-offer wow fadeInLeft" data-wow-delay=".2s">
                <div class="box-offer-img-wrap">
                  <a href="{{ route('front.user.tourdetail', ['id' => $allTour->id]) }}">
                    <img class="img-responsive center-block" src="{{ url('/') }}/guide/tour/photo/{{ $allTour->photos }}" width="370" height="310" alt="">
                  </a>
                </div>
                <div class="box-offer-caption text-left">
                  <div class="pull-left">
                    <div class="box-offer-title text-ubold"><a class="text-black" href="{{ route('front.user.tourdetail', ['id' => $allTour->id]) }}">{{ $allTour->tour_name }}</a></div>
                  </div>
                  <div class="pull-right">
                    <div class="box-offer-price text-black">$ {{ $allTour->price }}</div>
                  </div>
                  <div class="clearfix"></div>
                  <!-- List Inline-->
                  <ul class="list-inline list-inline-13 list-inline-marked text-silver-chalice text-small">
                    <li>{{ $allTour->destinations_visited }}</li>
                    <li>{{ $allTour->duration }}</li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div><a class="button button-primary" href="tours-grid.html">View ALL TOURs</a>
        </div>
      </section>
      <!-- Why SunTravel-->
      <section class="section parallax-container bg-black wow fadeIn" data-parallax-img="{{ asset('front/images/backgrounds/background-05-1920x900.jpg') }}" data-wow-delay=".2s">
        <div class="parallax-content">
          <div class="bg-overlay-inverse-md-darker">
            <div class="container section-80 section-md-top-70">
              <h3 class="text-white">Why SunTravel</h3>
              <div class="row row-30 row-sm justify-content-sm-center justify-content-lg-start text-sm-left">
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-11-20x18.png') }}" width="20" height="18" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">Personalized matching</p>
                        <p class="text-small text-silver-chalice">We can provide up to 3 experienced travel specialists who fit best for your trip.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-06-14x21.png') }}" width="14" height="21" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">wide variety of destinations</p>
                        <p class="text-small text-silver-chalice">With SunTravel, you’ll find a perfect destination among hundreds available.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-07-21x18.png') }}" width="21" height="18" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">highly qualified service</p>
                        <p class="text-small text-silver-chalice">Our high level of service is officially recognized by thousands of clients.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-08-17x19.png') }}" width="17" height="19" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">24/7 support</p>
                        <p class="text-small text-silver-chalice">Our travel agents are always there to support you during your trip.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-09-20x20.png') }}" width="20" height="20" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">Handpicked Hotels</p>
                        <p class="text-small text-silver-chalice">We pick  the hotels with the utmost reputation and positive reviews.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <!-- Box-->
                  <div class="box box-sm bg-default d-block">
                    <div class="unit flex-column flex-sm-row unit-spacing-sm">
                      <div class="unit-left">
                        <div class="icon-circle icon-circle-lg icon-filled-turquoise center-block"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-10-25x24.png') }}" width="25" height="24" alt=""></div>
                      </div>
                      <div class="unit-body">
                        <p class="text-small text-black text-uppercase text-ubold">Best Price Guarantee</p>
                        <p class="text-small text-silver-chalice">We guarantee you’ll get top-notch comfort at an affordable price.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- What Customers Say-->
      <section class="section-70 section-md-bottom-80 wow fadeIn" data-wow-delay=".2s">
        <div class="container">
          <h3>What Customers Say</h3>
          <p>Our clients’ testimonials are the best proof of our high level of service</p>
          <div class="row justify-content-sm-center">
            <div class="col-lg-10 col-xl-12">
              <!-- Owl Carousel-->
              <div class="owl-carousel owl-dots-primary" data-items="1" data-md-items="2" data-xl-items="3" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true">
                <div class="owl-item">
                  <!-- Team Member-->
                  <div class="team-member">
                    <div class="team-member-img-wrap"><img class="rounded-circle img-responsive center-block" src="{{ asset('front/images/users/user-01-100x100.jpg') }}" width="100" height="100" alt=""></div>
                    <div class="team-member-body">
                      <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-black">James smith</div>
                      <p class="text-small font-italic text-silver-chalice">“I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.  It was invaluable to me and I realize and appreciate it greatly.”</p>
                    </div>
                    <div class="team-member-hover-content">
                      <!-- Button trigger modal-->
                      <button class="button button-primary" type="button" data-toggle="modal" data-target="#teamMember">View FULL INFO</button>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <!-- Team Member-->
                  <div class="team-member">
                    <div class="team-member-img-wrap"><img class="rounded-circle img-responsive center-block" src="{{ asset('front/images/users/user-02-100x100.jpg') }}" width="100" height="100" alt=""></div>
                    <div class="team-member-body">
                      <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-black">Mary Anderson</div>
                      <p class="text-small font-italic text-silver-chalice">“Leslie was an excellent Travel Agent for us and considered our unique needs as she planned our itinerary. Every suggestion she made was excellent.”</p>
                    </div>
                    <div class="team-member-hover-content">
                      <!-- Button trigger modal-->
                      <button class="button button-primary" type="button" data-toggle="modal" data-target="#teamMember">View FULL INFO</button>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <!-- Team Member-->
                  <div class="team-member">
                    <div class="team-member-img-wrap"><img class="rounded-circle img-responsive center-block" src="{{ asset('front/images/users/user-03-100x100.jpg') }}" width="100" height="100" alt=""></div>
                    <div class="team-member-body">
                      <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-black">Will Johnson</div>
                      <p class="text-small font-italic text-silver-chalice">“I would highly recommend Andy because everything on my month long trip to New Zealand, Australia and French Polynesia went without a hitch.”</p>
                    </div>
                    <div class="team-member-hover-content">
                      <!-- Button trigger modal-->
                      <button class="button button-primary" type="button" data-toggle="modal" data-target="#teamMember">View FULL INFO</button>
                    </div>
                  </div>
                </div>
                <div class="owl-item">
                  <!-- Team Member-->
                  <div class="team-member">
                    <div class="team-member-img-wrap"><img class="rounded-circle img-responsive center-block" src="{{ asset('front/images/users/user-01-100x100.jpg') }}" width="100" height="100" alt=""></div>
                    <div class="team-member-body">
                      <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-black">James smith</div>
                      <p class="text-small font-italic text-silver-chalice">“I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado.  It was invaluable to me and I realize and appreciate it greatly.”</p>
                    </div>
                    <div class="team-member-hover-content">
                      <!-- Button trigger modal-->
                      <button class="button button-primary" type="button" data-toggle="modal" data-target="#teamMember">View FULL INFO</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><a class="button button-primary" href="testimonials.html">View More</a>
        </div>
      </section>
      <!-- Find Travel Perfection With the Professionalism of Experts-->
      <section class="section parallax-container bg-black context-dark wow fadeIn" data-parallax-img="{{ asset('front/images/backgrounds/background-06-1920x900.jpg') }}" data-wow-delay=".2s">
        <div class="parallax-content">
          <div class="bg-overlay-inverse-md-darker">
            <div class="container section-80 section-lg-top-145 section-lg-bottom-295">
              <div class="row justify-content-sm-center justify-content-lg-end text-lg-right">
                <div class="col-md-10 col-lg-7">
                  <h2>Find Travel Perfection With the Professionalism of Experts</h2><a class="button button-primary" href="tours-grid.html">Find your perfect tour</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Our Skills-->
      <section class="section-80 section-md-bottom-70">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-8 col-lg-12">
              <div class="row row-60 justify-content-sm-center align-items-sm-center">
                <div class="col-sm-6 col-lg-3 wow bounceIn" data-wow-delay=".6s">
                  <!-- CountTo-->
                  <svg x="0px" y="0px" width="48px" height="60px" viewbox="0 0 32 40">
                    <polygon fill="#FF9800" points="16,33 11,27 11,21 21,21 21,27 "></polygon>
                    <g>
                      <path fill="#FFA726" d="M25,14.15V16c0,0.337-0.021,0.668-0.057,0.994C24.963,16.995,24.981,17,25,17c1.105,0,2-0.895,2-2                c0-0.739-0.405-1.377-1-1.723V13.3L25,14.15z"></path>
                      <path fill="#FFA726" d="M7,14.15L6,13.3v-0.023C5.405,13.623,5,14.261,5,15c0,1.105,0.895,2,2,2c0.019,0,0.037-0.005,0.057-0.006                C7.021,16.668,7,16.337,7,16V14.15z"></path>
                      <path fill="#FFB74D" d="M25,14.15L24,15v-5l-4-4L8,10v5l-1-0.85V16c0,0.337,0.021,0.668,0.057,0.994C7.546,21.519,11.337,25,16,25                s8.454-3.481,8.943-8.006C24.979,16.668,25,16.337,25,16V14.15z M12,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1                S12.552,16,12,16z M20,16c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S20.552,16,20,16z"></path>
                      <path fill="#FF5722" d="M6,11v2.277V13.3l1,0.85L8,15v-5l12-4l4,4v5l1-0.85l1-0.85v-0.023V11c0-4-1-8-6-9l-1-2h-3C9.9,0,6,4.9,6,11                z"></path>
                      <circle fill="#784719" cx="20" cy="15" r="1"></circle>
                      <circle fill="#784719" cx="12" cy="15" r="1"></circle>
                      <path fill="#CFD8DC" d="M14,30l2-2l-5-1c0,0-11,2-11,13h14l1-9L14,30z"></path>
                      <path fill="#CFD8DC" d="M21,27l-5,1l2,2l-1,1l1,9h14C32,29,21,27,21,27z"></path>
                      <polygon fill="#3F51B5" points="18,30 16,28 14,30 15,31 14,40 18,40 17,31 	"></polygon>
                    </g>
                  </svg>
                  <div class="counter h3 text-ubold text-black">624</div>
                  <p class="font-italic">Happy Clients</p>
                </div>
                <div class="col-sm-6 col-lg-3 wow bounceIn" data-wow-delay=".2s">
                  <!-- CountTo-->
                  <svg x="0px" y="0px" width="72px" height="54px" viewbox="0 0 48 35.7">
                    <polygon fill="#673AB7" points="0,35.7 33,35.7 16.5,11.7 "></polygon>
                    <polygon fill="#9575CD" points="19.2,35.7 48,35.7 33.6,17.7 "></polygon>
                    <path fill="#40C4FF" d="M42.9,0C43.6,1.1,44,2.3,44,3.7c0,3.9-3.1,7-7,7c-0.7,0-1.3-0.1-1.9-0.3c1.2,2,3.4,3.3,5.9,3.3              c3.9,0,7-3.1,7-7C48,3.5,45.9,0.8,42.9,0z"></path>
                  </svg>
                  <div class="counter h3 text-ubold text-black">112</div>
                  <p class="font-italic">Amazing Tours</p>
                </div>
                <div class="col-sm-6 col-lg-3 wow bounceIn" data-wow-delay=".4s">
                  <!-- CountTo-->
                  <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                    <g>
                      <path fill="none" d="M23,2h-6c-0.6,0-1,0.4-1,1v1h8V3C24,2.4,23.6,2,23,2z"></path>
                      <path fill="#263238" d="M5,37h2c0.6,0,1-0.4,1-1H4C4,36.6,4.4,37,5,37z"></path>
                      <path fill="#263238" d="M33,37h2c0.6,0,1-0.4,1-1h-4C32,36.6,32.4,37,33,37z"></path>
                      <path fill="#37474F" d="M16,3c0-0.6,0.4-1,1-1h6c0.6,0,1,0.4,1,1v1h2V3c0-1.7-1.3-3-3-3h-6c-1.7,0-3,1.3-3,3v1h2V3z"></path>
                      <path fill="#78909C" d="M36,4H26h-2h-8h-2H4C1.8,4,0,5.8,0,8v24c0,2.2,1.8,4,4,4h4h24h4c2.2,0,4-1.8,4-4V8C40,5.8,38.2,4,36,4z"></path>
                    </g>
                  </svg>
                  <div class="counter h3 text-ubold text-black">594</div>
                  <p class="font-italic">Partners</p>
                </div>
                <div class="col-sm-6 col-lg-3 wow bounceIn" data-wow-delay=".8s">
                  <!-- CountTo-->
                  <svg x="0px" y="0px" width="60px" height="56px" viewbox="0 0 40 37">
                    <g>
                      <polygon fill="#558B2F" points="24.2,24.2 23.189,21 22.795,21 21.7,24.2 	"></polygon>
                      <path fill="#558B2F" d="M36,14h-3v3c0,2.2-1.8,4-4,4h-3.953l2.553,6.9h-2.2l-0.6-2.1h-3.6l-0.7,2.1h-2.2l2.553-6.9H7v8                c0,2.2,1.8,4,4,4h25l4,4V18C40,15.8,38.2,14,36,14z"></path>
                      <polygon fill="#1B5E20" points="24.2,24.2 21.7,24.2 22.795,21 20.853,21 18.3,27.9 20.5,27.9 21.2,25.8 24.8,25.8 25.4,27.9                 27.6,27.9 25.047,21 23.189,21 	"></polygon>
                      <path fill="#8BC34A" d="M15.4,12.6c0.2,0.3,0.4,0.5,0.7,0.6c0.3,0.1,0.6,0.2,0.9,0.2c0.7,0,1.3-0.3,1.6-0.8                c0.4-0.6,0.6-1.4,0.6-2.5V9.7c0-1.1-0.2-1.9-0.6-2.4c-0.4-0.6-0.9-0.8-1.6-0.8s-1.3,0.3-1.6,0.8c-0.4,0.6-0.6,1.4-0.6,2.4v0.5                c0,0.5,0.1,1,0.2,1.4C15.1,12,15.2,12.4,15.4,12.6z"></path>
                      <path fill="#8BC34A" d="M22.795,21h0.395h1.858H29c2.2,0,4-1.8,4-4v-3V4c0-2.2-1.8-4-4-4H4C1.8,0,0,1.8,0,4v21l4-4h3h13.853H22.795                z M17.8,15.2c-0.2,0-0.5,0.1-0.8,0.1c-0.6,0-1.2-0.1-1.8-0.3c-0.5-0.2-1-0.6-1.4-1c-0.4-0.4-0.7-1-0.9-1.6                c-0.2-0.6-0.3-1.3-0.3-2.1V9.9c0-0.8,0.1-1.5,0.3-2.1c0.2-0.6,0.5-1.2,0.9-1.6c0.4-0.4,0.8-0.8,1.4-1C15.7,5,16.3,4.9,17,4.9                c0.6,0,1.2,0.1,1.8,0.3c0.5,0.2,1,0.6,1.4,1c0.4,0.4,0.7,1,0.9,1.6c0.2,0.6,0.3,1.3,0.3,2.1v0.3c0,1-0.2,1.8-0.5,2.5                c-0.3,0.7-0.7,1.3-1.3,1.7l1.7,1.3L20,16.9L17.8,15.2z"></path>
                      <path fill="#FFFFFF" d="M19.6,14.4c0.6-0.4,1-1,1.3-1.7c0.3-0.7,0.5-1.5,0.5-2.5V9.9c0-0.8-0.1-1.5-0.3-2.1                c-0.2-0.6-0.5-1.2-0.9-1.6c-0.4-0.4-0.9-0.8-1.4-1C18.2,5,17.6,4.9,17,4.9c-0.7,0-1.3,0.1-1.8,0.3c-0.6,0.2-1,0.6-1.4,1                c-0.4,0.4-0.7,1-0.9,1.6c-0.2,0.6-0.3,1.3-0.3,2.1v0.4c0,0.8,0.1,1.5,0.3,2.1c0.2,0.6,0.5,1.2,0.9,1.6c0.4,0.4,0.9,0.8,1.4,1                c0.6,0.2,1.2,0.3,1.8,0.3c0.3,0,0.6-0.1,0.8-0.1l2.2,1.7l1.3-1.2L19.6,14.4z M14.8,9.7c0-1,0.2-1.8,0.6-2.4                c0.3-0.5,0.9-0.8,1.6-0.8s1.2,0.2,1.6,0.8c0.4,0.5,0.6,1.3,0.6,2.4v0.4c0,1.1-0.2,1.9-0.6,2.5c-0.3,0.5-0.9,0.8-1.6,0.8                c-0.3,0-0.6-0.1-0.9-0.2c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.2-0.3-0.6-0.4-1c-0.1-0.4-0.2-0.9-0.2-1.4V9.7z"></path>
                    </g>
                  </svg>
                  <div class="counter h3 text-ubold text-black">9</div>
                  <p class="font-italic">Questions Answered</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fastest Way to Compare and Book over 450 Cheap Flights-->
      <section class="section parallax-container bg-black context-dark wow fadeIn" data-parallax-img="{{ asset('front/images/backgrounds/background-07-1920x900.jpg') }}" data-wow-delay=".2s">
        <div class="parallax-content">
          <div class="bg-overlay-inverse-md-darker">
            <div class="container section-80 section-lg-top-145 section-lg-bottom-295">
              <div class="row justify-content-sm-center justify-content-lg-start text-lg-left">
                <div class="col-md-10 col-lg-7">
                  <h2>Fastest Way to Compare and Book over 450 Cheap Flights</h2><a class="button button-primary" href="tours-grid.html">Find your flight</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Modal-->
      <div class="modal modal-custom modal-team-member fade text-md-left" id="teamMember" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row row-30 justify-content-sm-center align-items-sm-center">
                  <div class="col-md-5">
                    <div class="bg-image bg-image-2"></div>
                  </div>
                  <div class="col-md-7">
                    <div class="modal-body-column-content">
                      <div class="team-member">
                        <div class="team-member-img-wrap d-md-none"><img class="rounded-circle img-responsive center-block" src="{{ asset('front/images/users/user-01-100x100.jpg') }}" width="100" height="100" alt=""></div>
                        <div class="team-member-title text-small text-ubold text-uppercase text-spacing-200 text-black">James Smith</div>
                        <div class="team-member-description text-spacing-300 font-italic text-uppercase text-silver-chalice">Taxi driver & traveler</div>
                        <div class="team-member-scroll-section">
                          <p class="text-small font-italic text-silver-chalice text-left">I’d like to send you a sincere "thank you" for all of your assistance during my recent trip to Colorado. It was invaluable to me and I realize and appreciate it greatly. Your professionalism and efficiency were comforting and reassuring in any weather and environment. Moreover, none of the additional services I ordered at this traveling agency has been a failure yet. Everyone in the team of SunTravel knows how to do their work, and I think that’s why they are still among the leaders of traveling business. Every suggestion your staff made was excellent, as you considered my travel budget, time constraints, and personal likes and dislikes. I would definitely work with your agency again, especially with Kent, as he made my trip easy and stress-free. It was a real delight to work with you.</p>
                        </div>
                      </div>
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
                        <p class="text-extra-small"><img src="{{ asset('front/images/payment/visa.png') }}" alt=""></p>
                      </li>
                      <li>
                        <p class="text-extra-small"><img src="{{ asset('front/images/payment/master.png') }}" alt=""></p>
                      </li>
                      <li>
                        <p class="text-extra-small"><img src="{{ asset('front/images/payment/maestro.png') }}" alt=""></p>
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
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
  </body>
</html>
