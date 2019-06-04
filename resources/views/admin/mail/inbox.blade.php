@extends('admin.master.app')
@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb push-down-0">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li><a href="#">Mailbox</a></li>
        <li class="active">Inbox</li>
    </ul>
    <!-- END BREADCRUMB -->

    <!-- START CONTENT FRAME -->
    <div class="content-frame">
        <!-- START CONTENT FRAME TOP -->
        <div class="content-frame-top">
            <div class="page-title">
                <h2><span class="fa fa-pencil"></span> Inbox</h2>
            </div>
        </div>
        <!-- END CONTENT FRAME TOP -->

        <!-- START CONTENT FRAME LEFT -->
        <div class="content-frame-left">
            <div class="block">
                <div class="list-group border-bottom">
                    <a href="{{ route('admin.mail.inbox') }}" class="list-group-item"><span class="fa fa-inbox"></span> Inbox <span class="badge badge-success">{{ count($unread) }}</span></a>
                    <a href="{{ route('admin.mail.sent') }}" class="list-group-item"><span class="fa fa-rocket"></span> Sent</a>
                    <a href="{{ route('admin.mail.compose') }}" class="list-group-item"><span class="fa fa-trash-o"></span> Deleted <span class="badge badge-default">{{ count($deleted) }}</span></a>
                </div>
            </div>
        </div>
        <!-- END CONTENT FRAME LEFT -->

        <!-- START CONTENT FRAME BODY -->
        <div class="content-frame-body">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <label class="check mail-checkall">
                        <input type="checkbox" class="icheckbox"/>
                    </label>
                    <div class="btn-group">
                        <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                        <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                        <button class="btn btn-default"><span class="fa fa-mail-forward"></span></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-default"><span class="fa fa-star"></span></button>
                        <button class="btn btn-default"><span class="fa fa-flag"></span></button>
                    </div>
                    <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>
                    <div class="pull-right" style="width: 150px;">
                        <a href="{{ route('admin.mail.compose') }}" class="btn btn-danger btn-block btn-lg"><span class="fa fa-edit"></span> COMPOSE</a>
                    </div>
                </div>
                <div class="panel-body mail">

                    @foreach($mails as $mail)

                        @if($mail->status == 0)
                            <div class="mail-item mail-unread">
                                <div class="mail-checkbox">
                                    <input type="checkbox" class="icheckbox"/>
                                </div>
                                <div class="mail-user">{{ $mail->name }}</div>
                                <a href="pages-mailbox-message.html" class="mail-text">{{ $mail->subject }}</a>
                                <div class="mail-date">{{ $mail->received_time }}</div>
                            </div>
                        @else
                            <div class="mail-item">
                                <div class="mail-checkbox">
                                    <input type="checkbox" class="icheckbox"/>
                                </div>
                                <div class="mail-user">{{ $mail->name }}</div>
                                <a href="pages-mailbox-message.html" class="mail-text">{{ $mail->subject }}</a>
                                <div class="mail-date">{{ $mail->received_time }}</div>
                            </div>
                        @endif

                    @endforeach

                </div>
                <div class="panel-footer">
                    <div class="btn-group">
                        <button class="btn btn-default"><span class="fa fa-mail-reply"></span></button>
                        <button class="btn btn-default"><span class="fa fa-mail-reply-all"></span></button>
                        <button class="btn btn-default"><span class="fa fa-mail-forward"></span></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-default"><span class="fa fa-star"></span></button>
                        <button class="btn btn-default"><span class="fa fa-flag"></span></button>
                    </div>

                    <button class="btn btn-default"><span class="fa fa-warning"></span></button>
                    <button class="btn btn-default"><span class="fa fa-trash-o"></span></button>

                    <ul class="pagination pagination-sm pull-right">
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- END CONTENT FRAME BODY -->
    </div>
    <!-- END CONTENT FRAME -->
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

    <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/demo_dashboard.js') }}"></script>
    <!-- END TEMPLATE -->
@endsection