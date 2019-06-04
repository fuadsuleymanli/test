@extends('front.master.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
@endsection
@section('content')
    <section class="section parallax-container bg-black" data-parallax-img="{{ asset('front/images/backgrounds/background-26-1920x900.jpg') }}">
        <div class="parallax-content">
            <div class="container section-80 section-md-top-135 section-md-bottom-145">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4">
                        <!-- Box-->
                        <div class="box box-lg d-block bg-default inset-xl-left-60 inset-xl-right-60">
                            <h5 class="text-ubold text-md-left">Login</h5>
                            <form action="{{ route('front.user.login') }}" method="post">
                                <div class="form-wrap form-wrap-xs">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-input" id="email" type="email" name="email" data-constraints="@Required">
                                </div>
                                <div class="form-wrap form-wrap-xs form-offset-bottom-none">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                                </div>
                                <div class="form-wrap-checkbox">
                                    <div class="pull-sm-left">
                                        <p class="text-extra-small"><a class="text-primary" href="{{ route('front.user.forgotpassword') }}">Forgot Your Password?</a></p>
                                    </div>
                                    <div class="pull-sm-right form-wrap">
                                        <label class="checkbox-inline checkbox-inline-right">
                                            <input class="checkbox-custom" name="remember" value="checkbox-1" type="checkbox"><span class="text-extra-small text-black inset-right-10">Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-button">
                                    <button class="button button-block button-icon button-icon-right button-primary" type="submit"><span>log in</span><span class="icon icon-xxs mdi mdi-chevron-right" style="float:none; margin-top: -1px;"></span></button>
                                </div>
                                {{ csrf_field() }}
                            </form>
                            <p class="text-extra-small">Don`t have an account? <a class="text-primary" href="{{ route('front.user.signup') }}">Sign Up</a> now!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
@endsection