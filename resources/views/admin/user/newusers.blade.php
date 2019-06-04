@extends('admin.master.app')
@section('content')
<!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="{{ route('admin.home') }}">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">New Users</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE TITLE -->
                <div class="page-title">
                    <h2><span class="fa fa-users"></span> New Users <small>{{ count($newUsers) }} contacts</small></h2>
                </div>
                <!-- END PAGE TITLE -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                      @foreach($newUsers as $newUser)
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            <div class="panel panel-default">
                                <div class="panel-body profile">
                                    <div class="profile-image">
                                        <img src="{{ url('/') }}/guide/photo/{{ $newUser->photo }}" alt="{{ $newUser->first_name }} {{ $newUser->last_name }}"/>
                                    </div>
                                    <div class="profile-data">
                                        <div class="profile-data-name">{{ $newUser->first_name }} {{ $newUser->last_name }}</div>
                                        <div class="profile-data-title">
                                          @if($newUser->user_type == 2)
                                          Tour Guide
                                          @else
                                          Customer
                                          @endif
                                        </div>
                                    </div>
                                    <div class="profile-controls">
                                        <a href="{{ route('admin.user.userprofile', ['id' => $newUser->id]) }}" class="profile-control-left"><span class="fa fa-info"></span></a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="contact-info">
                                        <p><small>Mobile</small><br/><span>{{ $newUser->phone }}</span></p>
                                        <p><small>Email</small><br/>{{ $newUser->email }}</p>
                                        <p><small>Address</small><br/>{{ $newUser->address }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END CONTACT ITEM -->
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                    </div> -->

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
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
    <script type="text/javascript" src="{{ asset('admin/js/plugins/morris/morris.min.js') }}"></script>
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

    <script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js') }}"></script>
    <!-- END TEMPLATE -->
@endsection
