@extends('layouts.customer')

@section('content')

    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Request Account</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active"><a href="">Request Account</a></li>
            </ol>
        </div>
        <!-- <img src="images/hero-images/intermodal-containers.jpg" class="img-responsive">-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <?php if(isset($_GET['CaptchaPass'])){ ?>
                    <div class="FormElement" id="captcha-success">Message Sent</div>
                    <?php } ?>
                    <?php if(isset($_GET['CaptchaFail'])){ ?>
                    <div class="FormElement" id="captcha-fail">CAPTCHA failed. Please try again.</div>
                    <?php } ?>
                    <form action="{{ url('request-account') }}" method="POST" id="request-acct-form">

                        {{ csrf_field() }}

                    {{--<form data-toggle="validator" action="{{url('request-account')}}" method="POST">--}}

                    {{--<form data-toggle="validator" method="post" action="send-app-request.php">--}}
                        <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control" name="inputName" placeholder="First Last" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="inputEmail" data-error="Please enter a valid email address." required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="tel" class="form-control" name="inputPhone" placeholder="###-###-#####" data-error="Please enter a valid phone number where we may contact you.">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" class="form-control" name="inputCompany"  data-error="Please enter your company's name.">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Service Type</label>
                            <input type="text" class="form-control" name="inputServiceType"  data-error="Please tell us what type of service(s) your company offers.">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Additional Comments</label>
                            <div class="controls">
                                <textarea id="accountComments" name="comments" rows="10" class="form-control col-xs-12" data-error="Please enter a message and resubmit the form."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LeOWRQTAAAAAFGjlyorJ6kk9Cx5Ya52Xlw7iUSE"></div>
                        </div>


                        <input name="submitButton" type="submit" class="btn btn-warning pull-left" id="submitButton" value="Submit"></button>
                    </form>
                </div>

                <img src="images/cfs-vertical.jpg" class="col-sm-4 hidden-xs" id="faq-img" alt="CFS Port of Los Angeles">
                <img src="images/mobile/ocean-freight/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="freight shipping company ca">

            </div></div></div>

    {{--<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>--}}
    {{--<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>--}}
    {{--<script type="text/javascript">--}}
        {{--$(window).load(function() {--}}
            {{--$('#slider').nivoSlider({--}}
                {{--effect: 'fade',--}}
                {{--animSpeed: 500,--}}
                {{--pauseTime: 5000,--}}
                {{--controlNav: false,--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
@endsection
