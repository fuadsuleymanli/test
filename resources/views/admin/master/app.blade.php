<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META SECTION -->
    <title>TITLE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="{{ asset('admin/favicon.ico') }}" type="image/x-icon" />
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('admin/css/theme-default.css') }}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    @yield('css')
    <!-- EOF CSS INCLUDE -->
</head>
<body>
<!-- START PAGE CONTAINER -->
<div class="page-container">

    <!-- START PAGE SIDEBAR -->
    <div class="page-sidebar">
        <!-- START X-NAVIGATION -->
        <ul class="x-navigation">
            <li class="xn-logo">
                <a href="{{ route('admin.home') }}">
                    @foreach($admin as $a)
                        {{ $a->first_name }} {{ $a->last_name }}
                    @endforeach
                </a>
            </li>
            <li class="xn-title">Navigation</li>
            <li>
                <a href="{{ route('admin.home') }}"><span class="fas fa-desktop"></span> <span class="xn-text sp">Dashboard</span></a>
            </li>
            <li class="xn-openable">
              <a href="#"><span class="fas fa-envelope"></span> <span class="xn-text sp">Mailbox</span></a>
              <ul>
                <li><a href="{{ route('admin.mail.inbox') }}"><span class="fas fa-inbox"></span> <span class="xn-text sp">Inbox</span></a></li>
                <li><a href="{{ route('admin.mail.sent') }}"><span class="fas fa-file-text"></span> <span class="xn-text sp">Sent</span></a></li>
                <li><a href="{{ route('admin.mail.compose') }}"><span class="fas fa-pencil"></span> <span class="xn-text sp">Compose</span></a></li>
              </ul>
            </li>
            <li class="xn-openable">
              <a href="#"><span class="fas fa-users"></span> <span class="xn-text sp">Users</span></a>
              <ul>
                <li><a href="{{ route('admin.user.activeusers') }}"><span class="fas fa-user-check"></span> <span class="xn-text sp">Active users</span></a></li>
                <li><a href="{{ route('admin.user.newusers') }}"><span class="fas fa-user-clock"></span> <span class="xn-text sp">New user</span></a></li>
                <li><a href="{{ route('admin.user.blockedusers') }}"><span class="fas fa-user-times"></span> <span class="xn-text sp">Blocked user</span></a></li>
              </ul>
            </li>
            <li class="xn-openable">
              <a href="#"><span class="fas fa-users"></span> <span class="xn-text sp">Settings</span></a>
              <ul>
                <li><a href="{{ route('admin.settings.activities') }}"><span class="fas fa-user-check"></span> <span class="xn-text sp">Activities</span></a></li>
              </ul>
            </li>
        </ul>
        <!-- END X-NAVIGATION -->
    </div>
    <!-- END PAGE SIDEBAR -->

    <!-- PAGE CONTENT -->
    <div class="page-content">

        <!-- START X-NAVIGATION VERTICAL -->
        <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
            <!-- TOGGLE NAVIGATION -->
            <li class="xn-icon-button">
                <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
            </li>
            <!-- END TOGGLE NAVIGATION -->
            <!-- SIGN OUT -->
            <li class="xn-icon-button pull-right">
                <a href="#" class="mb-control" data-box="#mb-signout"><span class="fas fa-sign-out-alt"></span></a>
            </li>
            <!-- END SIGN OUT -->
        </ul>

        <!-- PAGE CONTENT WRAPPER -->
        @yield('content')
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('admin.logout') }}" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
@yield('audio')
<!-- END PRELOADS -->

<!-- START SCRIPTS -->
@yield('js')
<!-- END SCRIPTS -->
</body>
</html>
