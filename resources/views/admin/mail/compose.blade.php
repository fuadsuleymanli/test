@extends('admin.master.app')
@section('content')
    <!-- START BREADCRUMB -->
    <ul class="breadcrumb push-down-0">
        <li><a href="#">Home</a></li>
        <li><a href="#">Pages</a></li>
        <li><a href="#">Mailbox</a></li>
        <li class="active">Compose</li>
    </ul>
    <!-- END BREADCRUMB -->
    <!-- START CONTENT FRAME -->
    <div class="content-frame">
        <!-- START CONTENT FRAME TOP -->
        <div class="content-frame-top">
            <div class="page-title">
                <h2><span class="fa fa-pencil"></span> Compose</h2>
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
            <div class="block">
                <form role="form" class="form-horizontal" method="post" action="{{ route('admin.mail.compose') }}">
                    <div class="form-group">
                        <label class="col-md-2 control-label">To:</label>
                        <div class="col-md-9">
                            <input name="to_email" type="text" class="tagsinput" data-placeholder="add email"/>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-link toggle" data-toggle="mail-cc">Cc</button>
                        </div>
                    </div>
                    <div class="form-group hidden" id="mail-cc">
                        <label class="col-md-2 control-label">Cc:</label>
                        <div class="col-md-10">
                            <input name="to_cc" type="text" class="tagsinput" data-placeholder="add email"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Subject:</label>
                        <div class="col-md-10">
                            <input name="subject" type="text" class="tagsinput" data-placeholder="add subject" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Attachments:</label>
                        <div class="col-md-10">
                            <input name="attach" type="file" class="file" data-filename-placement="inside"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                                    <textarea name="message" class="summernote_email"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="pull-left">
                                <button class="btn btn-default"><span class="fa fa-trash-o"></span> Delete Draft</button>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-danger"><span class="fa fa-envelope"></span> Send Message</button>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </form>
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
    <!-- START SCRIPTS -->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type='text/javascript' src="{{ asset('admin/js/plugins/icheck/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/js/plugins/summernote/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/bootstrap/bootstrap-file-input.js') }}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->

    <script type="text/javascript" src="{{ asset('admin/js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/actions.js') }}"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
@endsection