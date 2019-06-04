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
                            <li class="active"><a href="#tab1" data-toggle="tab">Details</a></li>
                            <li><a href="#tab2" data-toggle="tab">Itinerary</a></li>
                            <li><a href="#tab3" data-toggle="tab">Photos</a></li>
                            <li><a href="#tab4" data-toggle="tab">Inclusiouns & exclusions</a></li>
                            <li><a href="#tab5" data-toggle="tab">Price</a></li>
                        </ul>

                            <form action="{{ route('front.user.newtour') }}" method="post" enctype="multipart/form-data">
                        <div class="tab-content container">
                            <div class="tab-pane active" id="tab1">
                              <div class="form-wrap form-wrap-xs">
                                <label class="form-label" for="tour_name">Tour Name</label>
                                <input class="form-input" id="tour_name" type="text" name="tour_name" data-constraints="@Required">
                                <span style="color:red">{{ $errors->first('tour_name') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs">
                                <label class="form-label" for="introduction">Introduction</label>
                                <input class="form-input" id="introduction" type="text" name="introduction" data-constraints="@Required">
                                <span style="color:red">{{ $errors->first('introduction') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs">
                                  <label class="form-label" for="duration">Duration (days / hours)</label>
                                  <input class="form-input" id="duration" type="text" name="duration" data-constraints="@Required">
                                  <span style="color:red">{{ $errors->first('duration') }}</span>
                              </div>
                                <a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnNext1">Next</a>
                            </div>
                            <div class="tab-pane" id="tab2">
                              <div class="form-wrap form-wrap-xs">
                                  <label class="form-label" for="title">Title</label>
                                  <input class="form-input" id="title" type="text" name="title" data-constraints="@Required">
                                  <span style="color:red">{{ $errors->first('title') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs">
                                  <label class="form-label" for="destinations_visited">Destinations visited</label>
                                  <input class="form-input" id="destinations_visited" type="text" name="destinations_visited" data-constraints="@Required">
                                  <span style="color:red">{{ $errors->first('destinations_visited') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs">
                                  <textarea class="ckeditor" name="description0" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description1">
                                  <textarea class="ckeditor" name="description1" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description2">
                                  <textarea class="ckeditor" name="description2" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description3">
                                  <textarea class="ckeditor" name="description3" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description4">
                                  <textarea class="ckeditor" name="description4" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description5">
                                  <textarea class="ckeditor" name="description5" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description6">
                                  <textarea class="ckeditor" name="description6" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description7">
                                  <textarea class="ckeditor" name="description7" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description8">
                                  <textarea class="ckeditor" name="description8" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <div class="form-wrap form-wrap-xs" id="description9">
                                  <textarea class="ckeditor" name="description9" data-constraints="@Required"></textarea>
                                  <span style="color:red">{{ $errors->first('description') }}</span>
                              </div>
                              <!-- <div id="adDes"></div> -->
                              <ul class="nav">
                                <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="addButton">Add</a></li>
                                <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="removeButton">Remove</a></li>
                              </ul>
                              <ul class="nav">
                                <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack1">Back</a></li>
                                <li><a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnNext2">Next</a></li>
                              </ul>
                            </div>
                            <div class="tab-pane" id="tab3">
                              <div class="form-wrap form-wrap-xs">
                                  <input class="form-control-file" type="file" name="photos[]" multiple>
                                  <span style="color:red">{{ $errors->first('photos') }}</span>
                              </div>
                              <ul class="nav">
                                  <li><a class="button button-block button-icon button-icon-right button-primary cst-nav" href="#" id="btnBack2">Back</a></li>
                                  <li><a class="button button-block button-icon button-icon-right button-primary cst-nav" href="#" id="btnNext3">Next</a></li>
                              </ul>
                              <!-- <div class="form-wrap form-wrap-xs">
                                  <input style="width: 30%;float:right" class="button button-block button-icon button-icon-right button-primary" type="submit" value="Finish" />
                                  <a style="width: 30%;float:right" class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack2">Back</a>
                              </div> -->
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="form-wrap form-wrap-xs">
                                    <textarea class="ckeditor" name="inclusions" data-constraints="@Required"></textarea>
                                    <span style="color:red">{{ $errors->first('inclusions') }}</span>
                                </div>
                                <div class="form-wrap form-wrap-xs">
                                    <textarea class="ckeditor" name="exclusions" data-constraints="@Required"></textarea>
                                    <span style="color:red">{{ $errors->first('exclusions') }}</span>
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
                                <table class="ctable">
                                    <thead>
                                    <tr>
                                        <th colspan="6">Accommondation types</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($accomondations->chunk(5) as $accomondationchunk)
                                    <tr>
                                        @foreach($accomondationchunk as $accomondation)
                                        <td>
                                            <input class="checkbox-custom ccheck" name="accomondation[]" value="{{ $accomondation->id }}" type="checkbox">
                                            <span class="text-extra-small text-black inset-right-60">{{ $accomondation->type_name }}</span>
                                        </td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th colspan="6">Transport types</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transports->chunk(5) as $transportchunk)
                                    <tr>
                                        @foreach($transportchunk as $transport)
                                        <td>
                                            <input class="checkbox-custom ccheck" name="transport[]" value="{{ $transport->id }}" type="checkbox">
                                            <span class="text-extra-small text-black inset-right-60">{{ $transport->type_name }}</span>
                                        </td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th colspan="6">Recommended for</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($recommendeds->chunk(5) as $recommendedchunk)
                                    <tr>
                                        @foreach($recommendedchunk as $recommended)
                                        <td>
                                            <input class="checkbox-custom ccheck" name="recommended[]" value="{{ $recommended->id }}" type="checkbox">
                                            <span class="text-extra-small text-black inset-right-60">{{ $recommended->name }}</span>
                                        </td>
                                        @endforeach
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <thead>
                                    <tr>
                                        <th colspan="6">Activities</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($activities->chunk(5) as $activitychunk)
                                        <tr>
                                            @foreach($activitychunk as $activity)
                                                <td>
                                                    <input class="checkbox-custom ccheck" name="activity[]" value="{{ $activity->id }}" type="checkbox">
                                                    <span class="text-extra-small text-black inset-right-60">{{ $activity->name }}</span>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <a class="button button-block button-icon button-icon-right button-primary" href="#" id="btnBack3">Back</a>
                                <button class="button button-block button-icon button-icon-right button-primary" type="submit">Finish</button>
                            </div>

                        </div>
                        <input type="hidden" name="counter" id="counter">
                            {{ csrf_field() }}
                        </form>

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

            $('#btnNext3').click(function(){
                $('.nav-tabs > .active').next('li').find('a').trigger('click');
            });

            $('#btnBack1').click(function(){
                $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });

            $('#btnBack2').click(function(){
                $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            });

            $('#btnBack3').click(function(){
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
