@extends('front.master.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
@endsection
@section('content')
    <section class="section parallax-container bg-black" data-parallax-img="{{ asset('front/images/backgrounds/background-25-1920x900.jpg') }}">
        <div class="parallax-content">
            <div class="container section-80 section-md-top-135 section-md-bottom-165">
                <div class="row justify-content-sm-center">
                    <div class="col-sm-9 col-md-7 col-lg-5 col-xl-4">
                        <!-- Box-->
                        <div class="box box-lg d-block bg-default inset-xl-left-60 inset-xl-right-60">
                            <h5 class="text-ubold text-md-left">Sign Up</h5>
                            <form action="{{ route('front.user.signup') }}" method="post">
                                <div class="form-wrap form-wrap-xs">
                                    <label class="form-label" for="email">email</label>
                                    <input class="form-input" id="email" type="email" name="email" data-constraints="@Required">
                                    <span style="color:red">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-wrap form-wrap-xs">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-input" id="password" type="password" name="password" data-constraints="@Required">
                                    <span style="color:red">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="form-wrap form-wrap-xs">
                                    <label class="form-label" for="confirmpassword">Re-enter password</label>
                                    <input class="form-input" id="confirmpassword" type="password" name="confirmpassword" data-constraints="@Required">
                                    <span style="color:red">{{ $errors->first('confirmpassword') }}</span>
                                </div>
                                <div class="form-wrap-checkbox">
                                    <div class="pull-sm-right form-wrap">
                                        <label class="checkbox-inline checkbox-inline-right" style="padding-left: -20px;padding-right: -20px">
                                            <input class="checkbox-custom" name="user_type[]" value="3" type="checkbox"><span class="text-extra-small text-black inset-right-40" style="float: left">Customer</span>
                                        </label>
                                    </div>
                                    <div class="pull-sm-right form-wrap">
                                        <label class="checkbox-inline checkbox-inline-right" style="padding-left: -20px;padding-right: -20px">
                                            <input class="checkbox-custom" name="user_type[]" value="2" type="checkbox"><span class="text-extra-small text-black inset-right-40" style="float: left">Tour guide</span>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <span style="color:red">{{ $errors->first('user_type') }}</span>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="button button-block button-icon button-icon-right button-primary"><span>sign up</span><span class="icon icon-xxs mdi mdi-chevron-right" style="float:none; margin-top:-1px;"></span></button>
                                </div>
                                {{ csrf_field() }}
                            </form>
                            <p class="text-extra-small">Already have an account? <a class="text-primary" href="{{ route('front.user.login') }}">Log In</a> now!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('front/js/core.min.js') }}"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
    <script>
        $("input:checkbox").on('click', function() {
            // in the handler, 'this' refers to the box clicked on
            var $box = $(this);
            if ($box.is(":checked")) {
                // the name of the box is retrieved using the .attr() method
                // as it is assumed and expected to be immutable
                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                // the checked state of the group/box on the other hand will change
                // and the current value is retrieved using .prop() method
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });
    </script>
@endsection