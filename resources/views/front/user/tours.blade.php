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
<section class="section parallax-container bg-black section-height-mac context-dark" data-parallax-img="{{ asset('front/images/backgrounds/background-38-1920x900.jpg') }}">
        <div class="parallax-content">
          <div class="bg-overlay-darker">
            <div class="container section-34 section-md-100 section-lg-top-170 section-lg-bottom-165">
              <h1 class="d-none d-lg-inline-block">All Tours For You</h1>
              <h6 class="font-italic">{{ count($userTours) }} tours found</h6>
            </div>
          </div>
        </div>
      </section>
<section class="section parallax-container bg-black" data-parallax-img="{{ asset('front/images/backgrounds/background-25-1920x900.jpg') }}">
    <div class="parallax-content">
        <div class="container section-80 section-md-top-135 section-md-bottom-165">
            <div class="row justify-content-sm-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="col-sm-12">
                        @if(isset($_POST['submit']))
                            @if($result == 'true')
                                <center><h4 class="alert alert-success">{{ $msg }}</h4></center>
                            @elseif($result == 'false')
                                <center><h4 class="alert alert-danger">{{ $msg }}</h4></center>
                            @endif
                        @endif
                    </div>
                    <!-- Box-->
                    <ul class="nav nav-tabs tab">
                        <li class="active"><a href="#tab1" data-toggle="tab">Tours</a></li>
                        <li><a href="#tab2" data-toggle="tab">Messages</a></li>
                        <li><a href="#tab3" data-toggle="tab">Bookings</a></li>
                        <li><a href="#tab2" data-toggle="tab">Reviews</a></li>
                        <li><a href="#tab3" data-toggle="tab">Reports</a></li>
                    </ul>

                    <div class="tab-content container">
                      <div class="tab-pane active" id="tab1">
                        <section class="section-80 bg-wild-wand">
  <div class="container">
    <div class="row row-50 justify-content-sm-center">
      <div class="col-md-11 col-lg-9 order-lg-1">
        <div class="row row-20 justify-content-sm-between">
          <div class="col-md-6 col-md-3 text-md-left">
            <!-- <div class="d-inline-block inset-md-left-20 inset-lg-left-0">
              <div class="pull-left inset-right-10">
                <p class="text-extra-small text-uppercase text-black">Sort By:</p>
              </div>
              <div class="pull-right shadow-drop-xs d-inline-block select-xs">

                <select class="form-input select-filter" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                  <option value="2">Popularity</option>
                  <option value="3">Newest</option>
                </select>
              </div>
              <div class="clearfix"></div>
            </div> -->
          </div>
          <div class="col-md-6 col-md-3 text-md-right">
            <div class="d-inline-block inset-md-right-20 inset-lg-right-0">
              <div class="form-button">
                  <a class="button button-block button-icon button-icon-right button-primary" href="{{ route('front.user.newtour') }}"><span>Add tour</span></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-30 row-offset-1 justify-content-sm-center justify-content-md-start justify-content-lg-center">
        @foreach($userTours as $userTour)
          <div class="col-md-6 col-lg-4">
            <!-- Box Offer-->
            <div class="box-offer box-offer-xs">
              <div class="box-offer-img-wrap"><a href="{{ route('front.user.tourdetail', ['id' => $userTour->id]) }}"><img class="img-responsive center-block" src="{{ url('/') }}/guide/tour/photo/{{ $userTour->photos }}" width="270" height="240" alt=""></a></div>
              <div class="box-offer-caption text-left">
                <div class="pull-left">
                  <div class="box-offer-title text-ubold"><a class="text-black" href="{{ route('front.user.tourdetail', ['id' => $userTour->id]) }}">{{ $userTour->tour_name }}</a></div>
                </div>
                <div class="pull-right">
                  <div class="box-offer-price text-black">$ {{ $userTour->price }}</div>
                </div>
                <div class="clearfix"></div>
                <!-- List Inline-->
                <ul class="list-inline list-inline-13 list-inline-marked list-inline-marked-offset-inverse-top text-silver-chalice text-extra-small">
                  <li>{{ $userTour->destinations_visited }}</li>
                  <li>{{ $userTour->duration }}</li>
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <!-- Classic Pagination-->
        <ul class="pagination-classic">
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">12</a></li>
        </ul>
      </div>
      <div class="col-md-10 col-lg-3 text-lg-left">
        <!-- Aside-->
        <aside class="blog-aside box box-xs d-block bg-default">
          <div class="blog-aside-item">
            <p class="text-black text-ubold text-uppercase text-spacing-200">Search</p>
            <!-- RD Search Form-->
            <form class="rd-mailform">
              <div class="form-blog-search">
                <button class="form-search-submit"><span><img class="img-responsive center-block" src="images/icons/icon-34-16x21.png" width="16" height="21" alt=""></span></button>
                <div class="form-wrap form-wrap-xs">
                  <label class="form-label form-search-label form-label-sm" for="tours-destination">Your Destination</label>
                  <input class="form-search-input input-sm form-input" id="tours-destination" type="text">
                </div>
              </div>
              <div class="form-blog-search">
                <button class="form-search-submit"><span><img class="img-responsive center-block" src="images/icons/icon-35-19x17.png" width="19" height="17" alt=""></span></button>
                <div class="form-wrap form-wrap-xs">
                  <label class="form-label form-search-label form-label-sm" for="tours-arrival">Arrival</label>
                  <input class="form-search-input input-sm form-input" id="tours-arrival" type="text">
                </div>
              </div>
              <div class="form-blog-search">
                <button class="form-search-submit"><span><img class="img-responsive center-block" src="images/icons/icon-36-19x17.png" width="19" height="17" alt=""></span></button>
                <div class="form-wrap form-wrap-xs">
                  <label class="form-label form-search-label form-label-sm" for="tours-departure">Departure</label>
                  <input class="form-search-input input-sm form-input" id="tours-departure" type="text">
                </div>
              </div>
            </form>
          </div>
          <hr class="hr bg-gallery">
          <div class="blog-aside-item box-range">
            <p class="text-black text-ubold text-uppercase text-spacing-200">PRICE RANGE</p>
            <!--RD Range-->
            <div class="rd-range" data-min="800" data-max="5000" data-start="[800, 3200]" data-step="1" data-tooltip="true" data-min-diff="800" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2"></div>
          </div>
          <hr class="hr bg-gallery">
          <div class="blog-aside-item">
            <p class="text-black text-ubold text-uppercase text-spacing-200">Categories</p>
            <!-- List-->
            <ul class="list list-1 list-checkbox text-left">
              <li>
                <label class="checkbox-inline checkbox-inline-left">
                  <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-small">Sea Tours (721)</span>
                </label>
              </li>
              <li>
                <label class="checkbox-inline checkbox-inline-left">
                  <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-small">Romantic Tours (156)</span>
                </label>
              </li>
              <li>
                <label class="checkbox-inline checkbox-inline-left">
                  <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-small">Honeymoon Tours (74)</span>
                </label>
              </li>
              <li>
                <label class="checkbox-inline checkbox-inline-left">
                  <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-small">Country Tours (513)</span>
                </label>
              </li>
              <li>
                <label class="checkbox-inline checkbox-inline-left">
                  <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-small">Mountain Tours</span>
                </label>
              </li>
            </ul><a class="button button-primary button-width-110" href="#">Search</a>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
                      </div>

                      <div class="tab-pane" id="tab2">
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="marketing_name">Marketing contact name</label>
                            <input class="form-input" id="marketing_name" type="text" name="marketing_name" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('marketing_name') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="tour_email">New tour enquiry email</label>
                            <input class="form-input" id="tour_email" type="emial" name="tour_email" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('tour_email') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="invoice_email">Invoice email</label>
                            <input class="form-input" id="invoice_email" type="email" name="invoice_email" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('invoice_email') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="office_location">Head office location</label>
                            <input class="form-input" id="office_location" type="text" name="office_location" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('office_location') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="address">Address</label>
                            <input class="form-input" id="address" type="text" name="address" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('address') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="city">City</label>
                            <input class="form-input" id="city" type="text" name="city" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('city') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="postal_code">Postal code</label>
                            <input class="form-input" id="postal_code" type="text" name="postal_code" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('postal_code') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="facebook">Facebook</label>
                            <input class="form-input" id="facebook" type="text" name="facebook" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('facebook') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="instagram">Instagram</label>
                            <input class="form-input" id="instagram" type="text" name="instagram" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('instagram') }}</span>
                        </div>
                      </div>

                      <div class="tab-pane" id="tab3">
                        <div class="form-wrap form-wrap-xs">
                            <textarea class="ckeditor" name="owerview" data-constraints="@Required"></textarea>
                            <span style="color:red">{{ $errors->first('owerview') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="min_age">Minimum allowed age</label>
                            <input class="form-input" style="width: 40%" id="min_age" type="text" name="min_age" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('min_age') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="max_age">Maximum allowed age</label>
                            <input class="form-input" style="width: 40%" id="max_age" type="text" name="max_age" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('max_age') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="min_group">Minimum group size</label>
                            <input class="form-input" style="width: 40%" id="min_group" type="text" name="min_group" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('min_group') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="max_group">Maximum group size</label>
                            <input class="form-input" style="width: 40%" id="max_group" type="text" name="max_group" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('max_group') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs" style="padding-left: 10px">
                            <label class="checkbox-inline checkbox-inline-right">
                                <input class="checkbox-custom" name="allowed_booking" value="1" type="checkbox" checked>
                                <span class="text-extra-small text-black inset-right-10">Allow immediate booking</span>
                            </label>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <textarea class="ckeditor" name="terms_conditions" data-constraints="@Required"></textarea>
                            <span style="color:red">{{ $errors->first('terms_conditions') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-input" type="text" value="USD" disabled>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-input" type="text" value="10%" disabled>
                        </div>
                      </div>

                      <div class="tab-pane" id="tab4">
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-control-file" type="file" name="photo">
                            <span style="color:red">{{ $errors->first('photo') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-control-file" type="file" name="certificate">
                            <span style="color:red">{{ $errors->first('certificate') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="first_name">First Name</label>
                            <input class="form-input" id="first_name" type="text" name="first_name" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('first_name') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input class="form-input" id="last_name" type="text" name="last_name" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('last_name') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="phone">Phone number</label>
                            <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                            {{--<span style="color:red">{{ $errors->first('password') }}</span>--}}
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="confirmpassword">Repeat password</label>
                            <input class="form-input" id="confirmpassword" type="text" name="confirmpassword" data-constraints="@Required">
                            {{--<span style="color:red">{{ $errors->first('confirmpassword') }}</span>--}}
                        </div>
                      </div>

                      <div class="tab-pane" id="tab5">
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-control-file" type="file" name="photo">
                            <span style="color:red">{{ $errors->first('photo') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <input class="form-control-file" type="file" name="certificate">
                            <span style="color:red">{{ $errors->first('certificate') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="first_name">First Name</label>
                            <input class="form-input" id="first_name" type="text" name="first_name" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('first_name') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input class="form-input" id="last_name" type="text" name="last_name" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('last_name') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="phone">Phone number</label>
                            <input class="form-input" id="phone" type="text" name="phone" data-constraints="@Required">
                            <span style="color:red">{{ $errors->first('phone') }}</span>
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                            {{--<span style="color:red">{{ $errors->first('password') }}</span>--}}
                        </div>
                        <div class="form-wrap form-wrap-xs">
                            <label class="form-label" for="confirmpassword">Repeat password</label>
                            <input class="form-input" id="confirmpassword" type="text" name="confirmpassword" data-constraints="@Required">
                            {{--<span style="color:red">{{ $errors->first('confirmpassword') }}</span>--}}
                        </div>
                      </div>

                    </div>

                            <!-- <div class="form-button">
                                <button class="button button-block button-icon button-icon-right button-primary" name="submit" type="submit"><span>Finish</span><span class="icon icon-xxs mdi mdi-chevron-right" style="float:none; margin-top: -1px;"></span></button>
                            </div> -->
                            <!-- <input type="hidden" name="tkn" value="{{ \Illuminate\Support\Facades\Auth::user()->id }}"> -->
                            <!-- {{ csrf_field() }} -->
                        <!-- </form> -->

                    </div>
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
