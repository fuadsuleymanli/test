@extends('front.master.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
@endsection
@section('content')
    <section class="section parallax-container bg-black section-height-mac context-dark" data-parallax-img="{{ asset('front/images/backgrounds/background-27-1920x900.jpg') }}">
        <div class="parallax-content">
            <div class="bg-overlay-darker">
                <div class="container section-34 section-md-100 section-lg-top-170 section-lg-bottom-165">
                    <h1 class="d-none d-lg-inline-block">Contact Us</h1>
                    <h6 class="font-italic">Let`s keep in touch!</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us V2-->
    <section class="section-80 bg-wild-wand">
        <div class="container">
            <div class="box box-insets-off bg-default d-xl-block">
                <div class="row row-offset-custom justify-content-sm-center justify-content-lg-between text-md-left">
                    <div class="col-md-8 order-md-1">
                        <div class="box-inner">
                            <h5 class="text-ubold">Contact Our Agency</h5>
                            <p class="text-offset-2 text-small text-left">
                                You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone.
                                You can also use a quick contact form on the right or visit our office personally.  Email us with any
                                questions or inquiries or use our contact data. We would be happy to answer your questions.

                            </p>
                            <div class="row row-30 justify-content-sm-center">
                                <div class="col-md-6">
                                    <h5 class="text-ubold">Our Contacts</h5>
                                    <!-- Contact Info-->
                                    <address class="contact-info text-left">
                                        <p class="d-block text-small contact-info-address"><a class="text-gray" href="#"><span class="unit flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-01-16x21.png') }}" width="16" height="21" alt=""></span><span class="unit-body"><span>732/21 Second Street, Manchester, King Street, Kingston United Kingdom</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="callto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-02-19x19.png') }}" width="19" height="19" alt=""></span><span class="unit-body"><span>345-677-554</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="callto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-03-12x20.png') }}" width="12" height="20" alt=""></span><span class="unit-body"><span>323-678-567</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="mailto:#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-04-20x13.png') }}" width="20" height="13" alt=""></span><span class="unit-body"><span>info@demolink.org</span></span></span></a></p>
                                        <p class="d-block text-small"><a class="text-gray" href="#"><span class="unit align-items-center flex-row unit-spacing-xs"><span class="unit-left"><img class="img-responsive center-block" src="{{ asset('front/images/icons/icon-05-19x19.png') }}" width="19" height="19" alt=""></span><span class="unit-body"><span>demolink.org</span></span></span></a></p>
                                    </address>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-ubold" style="margin-bottom:25px">Any Questions?</h5>
                                    <!-- RD Mailform-->
                                    <form method="post" action="{{ route('front.contacts') }}">
                                        <div class="form-wrap form-wrap-xs">
                                            <label class="form-label" for="questions-contact-name">Your Name</label>
                                            <input class="form-input text-regular" id="questions-contact-name" type="text" name="your_name" data-constraints="@Required">
                                            <span style="color:red">{{ $errors->first('your_name') }}</span>
                                        </div>
                                        <div class="form-wrap form-wrap-xs">
                                            <label class="form-label" for="questions-contact-email">Email</label>
                                            <input class="form-input text-regular" id="questions-contact-email" type="email" name="your_email" data-constraints="@Email @Required">
                                            <span style="color:red">{{ $errors->first('your_email') }}</span>
                                        </div>
                                        <div class="form-wrap form-wrap-xs">
                                            <label class="form-label" for="questions-contact-message">Message</label>
                                            <textarea class="form-input text-regular" id="questions-contact-message" name="your_message" data-constraints="@Required" style="height:120px;resize:none"></textarea>
                                            <span style="color:red">{{ $errors->first('your_message') }}</span>
                                        </div>
                                        <div class="form-button text-center text-md-left">
                                            <button class="button button-width-110 button-primary" type="submit">SEND MESSAGE</button>
                                        </div>
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 section-map-fullheight inset-xl-right-20">
                        <!-- RD Google Map-->
                        <div class="rd-google-map rd-google-map__model" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles="[{&quot;featureType&quot;:&quot;administrative.country&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;},{&quot;hue&quot;:&quot;#ff0000&quot;}]}]">
                            <ul class="map_locations">
                                <li data-y="40.643180" data-x="-73.9874068">
                                    <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                                </li>
                            </ul>
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
