@extends('front.master.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap-combined.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet"> -->
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
        .ctable{
            margin: 10px auto; text-align: left;
        }
        .ctable th{
            padding:20px 0px 10px 0px;
        }
        #description1, #description2, #description3, #description4, #description5,
        #description6, #description7, #description8, #description9, #removeButton{
            display: none;
        }
    </style>
@endsection
@section('content')
    <section class="section parallax-container bg-black" data-parallax-img="{{ asset('front/images/backgrounds/background-25-1920x900.jpg') }}">
        <div class="parallax-content">
            <div class="container section-80 section-md-top-135 section-md-bottom-165">
                <div class="row justify-content-sm-center">
                  <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
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
                          <li class="active"><a href="#tab1" data-toggle="tab">General</a></li>
                          <li><a href="#tab2" data-toggle="tab">Contacts</a></li>
                          <li><a href="#tab3" data-toggle="tab">Overall information</a></li>
                      </ul>
                      <div class="tab-content container">
                          <div class="tab-pane fade in active" id="tab1">
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

                            <ul class="nav">
                              <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnNext1">Next</a></li>
                            </ul>
                          </div>
                      <div class="tab-pane fade" id="tab2">
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
                      <ul class="nav">
                        <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack1">Back</a></li>
                        <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnNext2">Next</a></li>
                      </ul>
                      </div>
                      <div class="tab-pane fade" id="tab3">
                      <div class="form-wrap form-wrap-xs">
                          <textarea class="ckeditor" name="owerview" data-constraints="@Required"></textarea>
                          <span style="color:red">{{ $errors->first('owerview') }}</span>
                      </div>
                      <div class="form-wrap form-wrap-xs">
                          <!-- <label class="form-label" for="min_age">Minimum allowed age</label> -->
                          <input class="form-input" style="width: 49.7%" id="min_age" type="text" placeholder="Minimum allowed age" name="min_age" data-constraints="@Required">
                          <span style="color:red">{{ $errors->first('min_age') }}</span>

                          <!-- <label class="form-label" for="max_age">Maximum allowed age</label> -->
                          <input class="form-input" style="width: 49.7%" id="max_age" type="text" placeholder="Maximum allowed age" name="max_age" data-constraints="@Required">
                          <span style="color:red">{{ $errors->first('max_age') }}</span>
                      </div>
                      <div class="form-wrap form-wrap-xs">
                          <!-- <label class="form-label" for="min_group">Minimum group size</label> -->
                          <input class="form-input" style="width: 49.7%" id="min_group" type="text" placeholder="Minimum group size" name="min_group" data-constraints="@Required">
                          <span style="color:red">{{ $errors->first('min_group') }}</span>

                          <!-- <label class="form-label" for="max_group">Maximum group size</label> -->
                          <input class="form-input" style="width: 49.7%" id="max_group" type="text" placeholder="Maximum group size" name="max_group" data-constraints="@Required">
                          <span style="color:red">{{ $errors->first('max_group') }}</span>
                      </div>
                      <div style="margin: 10px auto; text-align: left;">
                        <input class="checkbox-custom" name="allowed_booking" value="1" type="checkbox" checked>
                        <span class="text-extra-small text-black inset-right-10">Allow immediate booking</span>
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
                      <ul class="nav">
                        <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack2">Back</a></li>
                        <li><button class="button button-block button-icon button-icon-right button-primary" type="submit">Finish</button></li>
                      </ul>
                      <!-- <div class="form-wrap form-wrap-xs">
                        <input style="width: 30%;float:right" class="button button-block button-icon button-icon-right button-primary" type="submit" value="Finish" />
                        <a style="width: 30%;float:right" class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack2">Back</a>
                      </div> -->
                      </div>

                      </div>
                        @foreach($userProfiles as $userProfile)
                            <form action="{{ route('front.user.profile') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                        </form>
                        @endforeach

                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script> -->
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script type='text/javascript' src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <!-- <script>
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
    </script> -->
    <script type='text/javascript'>

        $(document).ready(function() {

            $('#btnNext1').click(function(){
                $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });

            $('#btnNext2').click(function(){
                $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });

            $('#btnBack1').click(function(){
                $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });

            $('#btnBack2').click(function(){
                $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });

        });

    </script>

    <script type="text/javascript">

        $(document).ready(function(){

            var counter = 1;

            $("#addButton").click(function () {

                if(counter>10){
                    alert("Only 10 textboxes allow");
                    return false;
                }

                if(counter == 1){$("#removeButton").css("display", "block");$("#description1").css("display", "block");}
                if(counter == 2){$("#removeButton").css("display", "block");$("#description2").css("display", "block");}
                if(counter == 3){$("#removeButton").css("display", "block");$("#description3").css("display", "block");}
                if(counter == 4){$("#removeButton").css("display", "block");$("#description4").css("display", "block");}
                if(counter == 5){$("#removeButton").css("display", "block");$("#description5").css("display", "block");}
                if(counter == 6){$("#removeButton").css("display", "block");$("#description6").css("display", "block");}
                if(counter == 7){$("#removeButton").css("display", "block");$("#description7").css("display", "block");}
                if(counter == 8){$("#removeButton").css("display", "block");$("#description8").css("display", "block");}
                if(counter == 9){$("#removeButton").css("display", "block");$("#description9").css("display", "block");}

                counter++;
            });

            $("#removeButton").click(function () {
                if(counter==1){
                    alert("No more textbox to remove");
                    return false;
                }

                counter--;

                if(counter == 9){$("#description9").css("display", "none");}
                if(counter == 8){$("#description8").css("display", "none");}
                if(counter == 7){$("#description7").css("display", "none");}
                if(counter == 6){$("#description6").css("display", "none");}
                if(counter == 5){$("#description5").css("display", "none");}
                if(counter == 4){$("#description4").css("display", "none");}
                if(counter == 3){$("#description3").css("display", "none");}
                if(counter == 2){$("#description2").css("display", "none");}
                if(counter == 1){$("#removeButton").css("display", "none");$("#description1").css("display", "none");}

            });

            $("#counter").val(counter);
        });
    </script>

    <!-- <script type="text/javascript">
         jQuery(document).ready(function ($) {
             $('#tabs').tab();
         });
         $('button').addClass('btn-primary').text('Switch to Orange Tab');
         $('button').click(function(){
             $('#tabs a[href=#orange]').tab('show');
         });
    </script> -->
@endsection
