@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Request Quote</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="about">Request Quote</a></li>
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
                    <div class="FormElement" id="captcha-success">Your shipping quote has been sent. A representative will contact you shortly.</div>
                    <?php } ?>
                    <?php if(isset($_GET['CaptchaFail'])){ ?>
                    <div class="FormElement" id="captcha-fail">CAPTCHA failed. Please try again.</div>
                    <?php } ?>

                        {{--@include('errors.list')--}}

                        <form action="{{ url('request-quote') }}" method="POST">

                        {{--<form data-toggle="validator"  method="post" action="send-quote.php">--}}
                        {{--<form data-toggle="validator"  method="post" action="/request-quote">--}}
{{--                        {!! Form::hidden('_token', csrf_token()) !!}--}}
                            {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label">Full Name</label>
                            <input type="text" class="form-control" name="inputName" placeholder="First Last" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="email" class="form-control" name="inputEmail" data-error="Please enter a valid email address" required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input type="tel" class="form-control" name="inputPhone" placeholder="###-###-#####" data-error="Please enter your a phone number">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Shipping Type</label>
                            <select class="form-control" name="inputShipType">
                                <option value="Air Freight">Air Freight – Import/Export</option>
                                <option value="Intermodal">Intermodal – Import/Export Trucking</option>
                                <option value="FTL/LTL/Warehousing">FTL/LTL/Warehousing</option>
                                <option value="Airline Pickup/Delivery">Airline Pickup/Delivery – Bonded/Non-bonded</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <label class="control-label">Dimensions</label>
                        <div class="row dimensions">
                            <p class="col-xs-3"><strong>Package 1:</strong></p>
                            <div class="form-group col-xs-3">
                                <label class="control-label">L</label>
                                <input type="number" class="form-control" name="inputLength_1" data-error="Enter length" required>

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">W</label>
                                <input type="number" class="form-control" name="inputWidth_1" data-error="Enter width" required>

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">H</label>
                                <input type="number" class="form-control" name="inputHeight_1" data-error="Enter height" required> </div>

                        </div>

                        <div class="row dimensions">
                            <p class="col-xs-3"><strong>Package 2:</strong></p>
                            <div class="form-group col-xs-3">
                                <label class="control-label">L</label>
                                <input type="number" class="form-control" name="inputLength_2" data-error="Enter length">

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">W</label>
                                <input type="number" class="form-control" name="inputWidth_2" data-error="Enter width">

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">H</label>
                                <input type="number" class="form-control" name="inputHeight_2" data-error="Enter height"> </div>

                        </div>

                        <div class="row dimensions">
                            <p class="col-xs-3"><strong>Package 3:</strong></p>
                            <div class="form-group col-xs-3">
                                <label class="control-label">L</label>
                                <input type="number" class="form-control" name="inputLength_3" data-error="Enter length">

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">W</label>
                                <input type="number" class="form-control" name="inputWidth_3" data-error="Enter width">

                            </div>

                            <div class="form-group col-xs-3">
                                <label class="control-label">H</label>
                                <input type="number" class="form-control" name="inputHeight_3" data-error="Enter height"> </div>

                        </div>

                        <div class="help-block with-errors col-xs-8 col-xs-offset-3">Please enter dimensions in inches</div>



                        <div class="row">
                            <div class="form-group col-xs-6 no-margin-bottom">
                                <label class="control-label">Total Weight</label>
                                <input type="number" class="form-control" name="inputWeight" data-error="Please enter the total weight" required>
                                <div class="help-block with-errors">Please enter weight in lbs</div>
                            </div>

                            <div class="form-group col-xs-6 no-margin-bottom">
                                <label class="control-label">Number of Pieces</label>
                                <input type="number" class="form-control" name="inputNumPieces" data-error="Please enter the total number of pieces" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-xs-6 no-margin-bottom">
                                <label class="control-label">Origin Zip Code</label>
                                <input type="number" class="form-control" name="inputOriginZip" data-error="Please the origin zip code" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-xs-6 no-margin-bottom">
                                <label class="control-label">Destination Zip Code</label>
                                <input type="number" class="form-control" name="inputDestinationZip" data-error="Please enter the destination zip code" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Additional Comments:</label>
                            <div class="controls">
                                <textarea id="quoteComments" name="comments" rows="10" class="form-control col-xs-12" ></textarea>
                            </div>
                        </div>



                        {{--<div class="form-group">--}}
                            {{--<div class="g-recaptcha" data-sitekey="6LeOWRQTAAAAAFGjlyorJ6kk9Cx5Ya52Xlw7iUSE"></div>--}}
                        {{--</div>--}}


                        <input name="submitButton" type="submit" class="btn btn-warning pull-left" id="submitButton" value="Submit"></button>

                    </form>
                </div>

                <img src="images/cfs-vertical.jpg" class="col-sm-4 hidden-xs" id="faq-img" alt="request quote">
                <img src="images/mobile/ocean-freight/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="intermodal shipping">

            </div></div></div>
@endsection
