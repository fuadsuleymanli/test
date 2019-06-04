@extends('admin.master.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
@endsection
@section('content')
<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">User Profile</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                  @foreach($userProfiles as $userProfile)
<form action="{{ route('admin.user.userprofile', ['id' => $userProfile->user_id]) }}" method="post">
  {{ csrf_field() }}
                    <div class="row">

                        <div class="col-md-4">

                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                      <a href="{{ url('/') }}/guide/photo/{{ $userProfile->photo }}" data-fancybox>
                                        <img src="{{ url('/') }}/guide/photo/{{ $userProfile->photo }}" alt="{{ $userProfile->first_name }} {{ $userProfile->last_name }}"/>
                                      </a>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">{{ $userProfile->first_name }} {{ $userProfile->last_name }}</div>
                                        <div class="profile-data-title" style="color: #FFF;">
                                          @if($userProfile->user_type == 2)
                                          Tour Guide
                                          @else
                                          Customer
                                          @endif
                                        </div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="{{ $userProfile->facebook }}" target="_blank" class="profile-control-left"><span class="fab fa-facebook-f"></span></a>
                                        <a href="{{ $userProfile->instagram }}" target="_blank" class="profile-control-right"><span class="fab fa-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="panel-body list-group border-bottom">
                                    <span class="list-group-item active"><span class="fas fa-info-circle spd"></span> <span class="xn-text sp spd">Details</span></span>
                                    <span class="list-group-item"><span class="fas fa-id-card"></span> <span class="xn-text sp">Marketing contact name</span> <br>{{ $userProfile->marketing_name }}</span>
                                    <a href="{{ url('/') }}/guide/certificate/{{ $userProfile->certificate }}" target="_blank" class="list-group-item"><span class="fas fa-certificate"></span> <span class="xn-text sp">Certificate</span> </a>
                                    <span class="list-group-item"><span class="fas fa-phone"></span> <span class="xn-text sp">Phone</span> <br>{{ $userProfile->phone }}</span>
                                    <span class="list-group-item"><span class="fas fa-envelope"></span> <span class="xn-text sp">Email</span> <br>{{ $userProfile->email }}</span>
                                    <span class="list-group-item"><span class="fas fa-envelope"></span> <span class="xn-text sp">New tour enquiry email</span> <br>{{ $userProfile->tour_email }}</span>
                                    <span class="list-group-item"><span class="fas fa-envelope"></span> <span class="xn-text sp">Invoice email</span> <br>{{ $userProfile->invoice_email }}</span>
                                    <span class="list-group-item"><span class="fas fa-city"></span> <span class="xn-text sp">City</span> <br>{{ $userProfile->city }}</span>
                                    <span class="list-group-item"><span class="fas fa-address-card"></span> <span class="xn-text sp">Address</span> <br>{{ $userProfile->address }}</span>
                                    <span class="list-group-item"><span class="fas fa-mail-bulk"></span> <span class="xn-text sp">Postal code</span> <br>{{ $userProfile->postal_code }}</span>
                                    <span class="list-group-item"><span class="fas fa-map-marker-alt"></span> <span class="xn-text sp">Head office location</span> <br>{{ $userProfile->office_location }}</span>
                                    <a href="{{ $userProfile->facebook }}" target="_blank">
                                      <span class="list-group-item"><span class="fab fa-facebook"></span> <span class="xn-text sp">Facebook</span></span>
                                    </a>
                                    <a href="{{ $userProfile->instagram }}" target="_blank">
                                      <span class="list-group-item"><span class="fab fa-instagram"></span> <span class="xn-text sp">Instagram</span></span>
                                    </a>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-8">

                            <!-- START TIMELINE -->
                            <div class="timeline timeline-right">

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <!-- <div class="timeline-item-content"> -->
                                      <div class="panel-body list-group border-bottom">
                                            <span class="list-group-item">Minimum allowed age<br>{{ $userProfile->min_age }}</span>
                                            <span class="list-group-item">Maximum allowed age<br>{{ $userProfile->max_age }}</span>
                                            <span class="list-group-item">Minimum group size<br>{{ $userProfile->min_group }}</span>
                                            <span class="list-group-item">Maximum group size<br>{{ $userProfile->max_group }}</span>
                                        </div>
                                    <!-- </div> -->
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                    <div class="panel-body list-group border-bottom">
                                        <div class="list-group-item">
                                            <h4>Overview</h4>
                                            <?php echo $userProfile->owerview ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                                <!-- START TIMELINE ITEM -->
                                <div class="timeline-item timeline-item-right">
                                  <div class="panel-body list-group border-bottom">
                                      <div class="list-group-item">
                                            <h4>Terms and conditions text</h4>
                                            <?php echo $userProfile->terms_conditions ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- END TIMELINE ITEM -->

                            </div>
                            <!-- END TIMELINE -->

                        </div>



                    </div>
<input type="hidden" name="activateuser" value="{{ $userProfile->user_id }}">
                    <div class="btn-userprofile">
                      <button type="submit" class="btn btn-success">Activate</button>
                      <!-- <a href="{{ route('admin.user.userprofile', ['id' => $userProfile->id]) }}" class="btn btn-danger">Send Message</a> -->
                    </div>
</form>
@endforeach
                </div>
@endsection
@section('audio')
    <audio id="audio-alert" src="{{ asset('admin/audio/alert.mp3') }}" preload="auto"></audio>
    <audio id="audio-fail" src="{{ asset('admin/audio/fail.mp3') }}" preload="auto"></audio>
@endsection
@section('js')
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/icheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/morris/raphael-min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('admin/js/plugins/morris/morris.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/d3.v3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/rickshaw/rickshaw.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/owl/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->
    <!-- <script type="text/javascript" src="{{ asset('admin/js/settings.js') }}"></script> -->

    <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>

    <!-- <script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js') }}"></script> -->
    <!-- END TEMPLATE -->
@endsection
