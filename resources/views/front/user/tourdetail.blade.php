@extends('front.master.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-combined.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <style>
        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tab-content {
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            background-color: #f1f1f1;
        }
    </style>
@endsection
@section('content')
@foreach($tourDetails as $tourDetail)
<section class="section parallax-container bg-black section-height-mac context-dark" data-parallax-img="{{ url('/') }}/guide/tour/photo/{{ $tourDetail->photos }}">
        <div class="parallax-content">
          <div class="container">
            <div class="row justify-content-sm-center align-items-sm-center section-34 section-md-top-145 section-md-bottom-100 section-lg-top-100 section-cover">
              <div class="col-12">
                <h1 class="d-none d-lg-inline-block">{{ $tourDetail->title }}</h1>
                <h6 class="font-italic"><?php echo $tourDetail->destinations_visited ?></h6><a class="button button-primary" href="pricing.html">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Tour Single-->
      <section class="section-34 section-md-bottom-45 bg-alabaster">
        <div class="container">
          <div class="row justify-content-sm-center">
            <div class="col-sm-10 col-md-8 col-lg-12">
              <div class="row row-40 justify-content-sm-center list-inline-dashed-vertival">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">Date</p>
                  <p class="text-big text-ubold text-black text-uppercase">19 oct - 29 oct</p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">DURATION</p>
                  <p class="text-big text-ubold text-black text-uppercase">{{ $tourDetail->duration }}</p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">PRICE</p>
                  <p class="text-big text-ubold text-black text-uppercase">$ {{ $tourDetail->price }}</p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">PLACES AVAILABLE</p>
                  <p class="text-big text-ubold text-black text-uppercase">27</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Tour Program-->
      <section class="section-70 section-md-bottom-80">
        <div class="container">
          <h3>Tour Program</h3>
          <p>Here is what’s included in the program of this tour</p>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-dots-primary owl-dots-lg-reveal owl-navs-lg-veil text-left" data-items="1" data-md-items="2" data-lg-items="3" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true">
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">1-3</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Berlin, Warsaw, krakow</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">Start your Eastern Europe trip from Berlin - one of the most attractive European cities. Head out to Warsaw - the capital of Poland, where you’ll be able to take a guided tour through the city’s places of interests and museums.</p>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">3-7</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Prague, Ceský Krumlov, <br class="d-none d-xl-inline-block"> Vienna</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">Enjoy all Prague has to offer. Opt to visit the famous Charles Bridge, the clock tower in the main square or a traditional Czech beer hall with serious helpings of meat and potatoes. Opt to have lunch in one of the many pretty restaurants offering fantastic local cuisine, sitting on a terrace overlooking this fairytale medieval town.</p>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">7-9</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Vienna, budapest</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">End your Eastern Europe tour by visiting two most renowned European cities - Vienna and Budapest. Wander the elegant streets a little more, take in some of Europe's most distinguished art galleries or just settle yourself on a café terrace, order up a slice of mouthwatering Viennese cake and watch the world go by over coffee.</p>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">1-3</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Berlin, Warsaw, krakow</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">Start your eastern Europe trip from Berlin - one of the most attractive European cities. Head out to Warsaw - the capital of Poland, where you’ll be able to take a guided tour through the city’s places of interests and museums.</p>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">3-7</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Prague, Ceský Krumlov, <br class="d-none d-xl-inline-block"> Vienna</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">Enjoy all Prague has to offer. Opt to visit the famous Charles Bridge, the clock tower in the main square or a traditional Czech beer hall with serious helpings of meat and potatoes. Opt to have lunch in one of the many pretty restaurants offering fantastic local cuisine, sitting on a terrace overlooking this fairytale medieval town.</p>
                </div>
              </div>
            </div>
            <div class="owl-item">
              <div class="box-program">
                <!-- Unit-->
                <div class="unit flex-row unit-spacing-sm">
                  <div class="unit-left text-center">
                    <h3 class="text-ubold text-primary line-height-1">7-9</h3>
                    <p class="text-extra-small text-spacing-1000 text-black text-uppercase line-height-1 inset-left-10">day</p>
                  </div>
                  <div class="unit-body">
                    <p class="text-small text-ubold text-uppercase text-black">Vienna, budapest</p>
                  </div>
                </div>
                <div class="box-program-content inset-left-10 inset-right-10">
                  <hr class="hr bg-gallery">
                  <p class="text-small text-silver-chalice">End your Eastern Europe tour by visiting two most renowned European cities - Vienna and Budapest. Wander the elegant streets a little more, take in some of Europe's most distinguished art galleries or just settle yourself on a café terrace, order up a slice of mouthwatering Viennese cake and watch the world go by over coffee.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endforeach
      <section>
        <div class="owl-carousel owl-carusel-inset-bottom owl-nav-type-3 owl-dots-primary" data-lightgallery="group" data-items="1" data-md-items="2" data-lg-items="3" data-xl-items="5" data-stage-padding="20" data-loop="true" data-margin="6" data-mouse-drag="false" data-dots="true" data-nav="true">
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-04-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-01-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-05-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-02-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-06-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-03-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-07-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-04-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-08-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-05-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
          <div class="owl-item">
            <!-- Thumbnail Rayen--><a class="thumbnail-rayen" data-lightgallery="item" href="images/gallery/portfolio-09-1170x700_original.jpg"><span class="figure"><img class="img-responsive center-block" width="370" height="310" src="images/offers/box-offer-06-370x310.jpg" alt=""><span class="figcaption"><span class="icon icon-xl fa fa-search-plus text-white"></span></span></span></a>
          </div>
        </div>
      </section>
      <section class="section-top-50 section-bottom-80">
        <div class="container">
          <h3>Book This Tour</h3>
          <p class="text-small text-spacing-200 font-italic">STARTING PRICE $2,500</p><a class="button button-primary" href="pricing.html">Book Now</a>
        </div>
      </section>
      <section class="section-34 section-lg-bottom-45 bg-alabaster">
        <div class="container">
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-carousel-sm owl-navs-offset-0 owl-dots-primary owl-nav-alabaster list-inline-dashed-vertival" data-items="1" data-md-items="2" data-stage-padding="5" data-loop="false" data-margin="30" data-mouse-drag="false" data-dots="true" data-nav="true">
            <div class="owl-item">
              <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">Previous Tour</p>
              <p class="text-big text-ubold text-uppercase"><a class="text-black" href="tours-single.html">ITALY</a></p>
            </div>
            <div class="owl-item">
              <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">Next Tour</p>
              <p class="text-big text-ubold text-uppercase"><a class="text-black" href="tours-single.html">SPAIN</a></p>
            </div>
            <div class="owl-item">
              <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">Previous Tour</p>
              <p class="text-big text-ubold text-uppercase"><a class="text-black" href="tours-single.html">ITALY</a></p>
            </div>
            <div class="owl-item">
              <p class="text-extra-small text-silver-chalice font-italic text-uppercase text-spacing-200">Next Tour</p>
              <p class="text-big text-ubold text-uppercase"><a class="text-black" href="tours-single.html">SPAIN</a></p>
            </div>
          </div>
        </div>
      </section>
@endsection
@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script>
        function openProfileTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- <script>
   $('.carousel.carousel-slider').carousel({fullWidth: true});
  </script> -->
    {{--<script type="text/javascript">--}}
        {{--jQuery(document).ready(function ($) {--}}
            {{--$('#tabs').tab();--}}
        {{--});--}}
        {{--$('button').addClass('btn-primary').text('Switch to Orange Tab');--}}
        {{--$('button').click(function(){--}}
            {{--$('#tabs a[href=#orange]').tab('show');--}}
        {{--});--}}
    {{--</script>--}}
@endsection
