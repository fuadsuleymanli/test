@extends('admin.master.app')
@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li class="active"><a href="{{ route('admin.home') }}">Home</a></li>
</ul>
<!-- END BREADCRUMB -->
<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-3 ">
                          <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Accommondation types</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($accommondations as $accommondation)
                                            <tr>
                                                <td>{{ $accommondation->id }}</td>
                                                <td>{{ $accommondation->type_name }}</td>
                                                <td><button class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                        <div class="col-md-3 ">
                          <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Transport types</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($transports as $transport)
                                            <tr>
                                                <td>{{ $transport->id }}</td>
                                                <td>{{ $transport->type_name }}</td>
                                                <td><button class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                        <div class="col-md-3 ">
                          <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Recommended for</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($recommendeds as $recommended)
                                            <tr>
                                                <td>{{ $recommended->id }}</td>
                                                <td>{{ $recommended->name }}</td>
                                                <td><button class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                        <div class="col-md-3 ">
                          <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Activities</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($activities as $activity)
                                            <tr>
                                                <td>{{ $activity->id }}</td>
                                                <td>{{ $activity->name }}</td>
                                                <td><button class="btn btn-danger">Delete</button></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END DEFAULT DATATABLE -->
                        </div>
                      </div>
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
    <script type="text/javascript" src="{{ asset('admin/js/settings.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js') }}"></script>
    <!-- END TEMPLATE -->
@endsection
