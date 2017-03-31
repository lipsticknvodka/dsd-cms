@extends('layouts.customer')

@section('content')

    <div class="container" id="page-wrapper">
        <div class="container" id="page-header">
            <h4>Contact Us</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>
        <div id="map" class="col-xs-12"></div>
        <!--<div id="googleMap" style="width:100%;height:380px;" class="col-xs-12"></div>-->

        <div class="row  w-mainwrap w-main-arrow">
            <div class="col-sm-4">
                <h4 class="col-xs-12 no-margin-left">CFS, Intermodal, CCSF, Trucking &amp; Bonded Warehouse</h4>
                <address class="col-xs-12 no-margin-bottom no-margin-left" class="facility-address"><strong>2411 Santa Fe Ave. <br/>Redondo Beach, CA 90278</strong></address>
                <p class="no-margin-bottom">Phone: <!--<i class="fa fa-phone 2x"></i>--> <a href="tel:+13107251999">310-725-1999</a></p>
                <p>Fax: <!--<i class="fa fa-print"></i>--> <a href="tel:+13107251996">310-725-1996</a></p>
                <h5 class="no-margin-bottom"><strong>General Manager</h5><p class="no-margin-bottom">Carlos Guerra</strong></p><!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:carlos@dsdcompanies.com"> carlos@dsdcompanies.com</a><br/><br/>
            <!-- <h5 class="no-margin-bottom"><strong>Operations &amp; Safety Manager</h5><p class="no-margin-bottom"> Pedro Torres II</strong></p><!--<i class="fa fa-envelope 2x"></i> <a href="mailto:pedro@dsdcompanies.com"> pedro@dsdcompanies.com</a>-->

                <hr/>

                <h4 class="col-xs-12 no-margin-left">Corporate &amp; Distribution Center</h4>
                <address class="col-xs-12 no-margin-bottom no-margin-left" class="facility-address"><strong>8820 Bellanca Ave. <br/>Los Angeles, CA 90045</strong></address>
                <p class="no-margin-bottom"><!--<i class="fa fa-phone 2x"></i>-->Phone: <a href="tel:+13103383395">310-338-3395</a></p>
                <p><!--<i class="fa fa-print"></i> -->Fax: <a href="tel:+13103384177">310-338-4177</a></p>
                <h5 class="no-margin-bottom"><strong>Intermodal Supervisor</h5><p class="no-margin-bottom">Jose Orta</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:jose@dsdcompanies.com"> jose@dsdcompanies.com</a><br/><br/>
                <h5 class="no-margin-bottom"><strong>Screening Supervisor</h5><p class="no-margin-bottom">Eduardo Buccio</strong></p><!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:edbuccio@dsdcompanies.com"> edbuccio@dsdcompanies.com</a><br/><br/>
                <h5 class="no-margin-bottom"><strong>AMS &amp; Security Manager</h5><p class="no-margin-bottom">Fausto Amigon</strong></p><!--<i class="fa fa-envelope 2x"></i>--><a href="mailto:fausto@dsdcompanies.com"> fausto@dsdcompanies.com</a>
            </div>

            <div class="col-sm-8">

                    <h3 class="no-margin-bottom">Have a Question?</h3>
                    <p>Can’t find your answer online from our <a href="faq">FAQ</a> page? Fill out the contact form and a representative will respond shortly. </p>

                    <hr/>

                <?php if(isset($_GET['CaptchaPass'])){ ?>
                <div class="FormElement" id="captcha-success">Your message has been sent. A representative will be in contact with you shortly.</div>
                <?php } ?>
                <?php if(isset($_GET['CaptchaFail'])){ ?>
                <div class="FormElement" id="captcha-fail">CAPTCHA failed. Please try again.</div>
                <?php } ?>
                <form name="contact-form" data-toggle="validator" method="post" action="send-contact-form.php">
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
                        <input type="number" class="form-control" name="inputPhone" placeholder="###-###-#####" data-error="Please enter your a phone number" required>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input type="text" class="form-control" name="inputCompanyName" data-error="">
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="inputSubject" class="control-label">Subject</label>
                        <select name="recipient" multiple class="form-control">
                            <option value="general">General Inquiries</option>
                            <option value="air-freight">Air Freight</option>
                            <option value="ocean-freight">Ocean Freight/Intermodal</option>
                            <option value="trucking-pick-up">Trucking - Pick Ups</option>
                            <option value="trucking-deliveries">Trucking - Deliveries</option>
                            <!-- <option value="hot-shot">Hot Shot Service</option>-->
                            <option value="warehousing">Warehousing</option>
                            <option value="cargo-screening">Cargo Screening</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label for="inputMessage" class="control-label">Message</label>
                        <textarea class="form-control" name="inputMessage" rows="5"></textarea>
                    </div>


                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LeOWRQTAAAAAFGjlyorJ6kk9Cx5Ya52Xlw7iUSE"></div>
                    </div>


                    <input name="submitButton" type="submit" class="btn btn-warning pull-left" id="submitButton" value="Submit"></button>
                </form>
            </div></div>

        <script type="text/javascript">
            (function() {if (!window['___grecaptcha_cfg']) { window['___grecaptcha_cfg'] = {}; };if (!window['___grecaptcha_cfg']['render']) { window['___grecaptcha_cfg']['render'] = 'onload'; };window['__google_recaptcha_client'] = true;var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://www.gstatic.com/recaptcha/api2/r20160229165133/recaptcha__en.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
        </script>

    <!-- <p class="col-xs-12"><strong>General Manager – Carlos Guerra</strong> <i class="fa fa-phone 2x"></i><a href="tel:13107251999"> 310-725–1999</a> | <i class="fa fa-envelope 2x"></i> <a href="mailto: carlos@dsdcompanies.com"> carlos@dsdcompanies.com</a>.</p>
    -->
    </div>
    <section class="row-fluid" id="main-contacts">
        <h1 class="row-centered">Main Contacts</h1>
        <div class="row-fluid row-centered">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>President</h4><p class="no-margin-bottom">Dan Cuevas</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:dan@dsdcompanies.com"> dan@dsdcompanies.com</a>
                        <p class="no-margin-bottom"><!--<i class="fa fa-phone 2x"></i>--> <a href="tel:+13103383395">310-338-3395</a></p>
                        <br/><br/>
                    </div></div></div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>CFO &amp; Vice President</h4><p class="no-margin-bottom"> Daniel Cuevas</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:daniel@dsdcompanies.com"> daniel@dsdcompanies.com</a>
                    </div></div></div>

        <!--<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
        <h4 class="no-margin-bottom"><strong>General Manager</h4><p class="no-margin-bottom">Carlos Guerra</strong></p> <i class="fa fa-envelope 2x"></i> <a href="mailto:carlos@dsdcompanies.com">carlos@dsdcompanies.com</a>
       </div></div></div>-->

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>General Manager</h4><p class="no-margin-bottom">Carlos Guerra</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:carlos@dsdcompanies.com"> carlos@dsdcompanies.com</a>
                        <p class="no-margin-bottom"><!--<i class="fa fa-phone 2x"></i>--> <a href="tel:+13107251995">310-725-1995</a></p>
                    </div></div></div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>Customer Relations/New Business Development Manager</h4><p class="no-margin-bottom">Evelyn Wildelberg</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:evelyn@dsdcompanies.com"> evelyn@dsdcompanies.com</a>
                        <p class="no-margin-bottom"><!--<i class="fa fa-phone 2x"></i>--> <a href="tel:+13103383395">310-338-3395</a> x 108</p>
                    </div></div></div>

            {{--<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">--}}
                        {{--<h4 class="no-margin-bottom"><strong>Operations Manager</h4><p class="no-margin-bottom">Pedro Torres Jr</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:pedro@dsdcompanies.com">pedro@dsdcompanies.com</a>--}}
                        {{--<p class="no-margin-bottom"><!--<i class="fa fa-phone 2x"></i>--> <a href="tel:+15626666630">562-666-6630</a></p>--}}
                    {{--</div></div></div>--}}

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>Director of Human Resources &amp; Compliance</h4><p class="no-margin-bottom">Wendy S. Ramirez</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:wendy@dsdcompanies.com">wendy@dsdcompanies.com</a>
                    </div></div></div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>Human Resources Manager</h4><p class="no-margin-bottom">Kennya Martinez</strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:kennya@dsdcompanies.com">kennya@dsdcompanies.com</a>
                    </div></div></div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                        <h4 class="no-margin-bottom"><strong>Office Manager</h4><p class="no-margin-bottom">Jessica Perez </strong></p> <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:jovita@dsdcompanies.com">jessica@dsdcompanies.com</a>
                    </div></div></div>

        </div>
    </section>



    {{--<script src="https://maps.google.com/maps/api/js?sensor=false"></script>--}}

    {{--<script>--}}
        {{--var x=new google.maps.LatLng(33.9165487,-118.37175969999998);--}}
        {{--var redondo=new google.maps.LatLng(33.8901743,-118.36713380000003);--}}
        {{--var losAngeles=new google.maps.LatLng(33.956773,-118.37965400000002);--}}

        {{--function initialize()--}}
        {{--{--}}
            {{--var mapProp = {--}}
                {{--center:x,--}}
                {{--zoom:12,--}}
                {{--mapTypeId:google.maps.MapTypeId.ROADMAP--}}
            {{--};--}}

            {{--var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);--}}

            {{--var myTrip=[redondo,losAngeles];--}}
            {{--var flightPath=new google.maps.Polyline({--}}
                {{--path:myTrip,--}}
                {{--strokeColor:"indianred",--}}
                {{--strokeOpacity:0.8,--}}
                {{--strokeWeight:2--}}
            {{--});--}}

            {{--flightPath.setMap(map);--}}
        {{--}--}}

        {{--google.maps.event.addDomListener(window, 'load', initialize);--}}
    {{--</script>--}}

    <script>
        // Define your locations: HTML content for the info window, latitude, longitude
        var locations = [
            ['<h4>DSD CFS, Intermodal, SCCF & Trucking Inc.</h4><p>2411 Santa Fe. Ave. <br/>Redondo Beach, CA 90278</p>', 33.8901743,-118.36713380000003],
            ['<h4>DSD Corporate &amp; Distribution Center</h4><p>8820 Bellanca Ave. <br/>Los Angeles, CA 90045</p>', 33.956773,-118.37965400000002],
        ];

        // Setup the different icons and shadows
        var iconURLPrefix = 'https://maps.google.com/mapfiles/ms/icons/';

        var icons = [
            iconURLPrefix + 'red-dot.png',
            iconURLPrefix + 'yellow-dot.png'
        ]
        var iconsLength = icons.length;

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(-37.92, 151.25),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            streetViewControl: false,
            panControl: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        });

        var infowindow = new google.maps.InfoWindow({
            maxWidth: 160
        });

        var markers = new Array();

        var iconCounter = 0;

        // Add the markers and infowindows to the map
        for (var i = 0; i < locations.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map,
                icon: icons[iconCounter]
            });

            markers.push(marker);

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));

            iconCounter++;
            // We only have a limited number of possible icon colors, so we may have to restart the counter
            if(iconCounter >= iconsLength) {
                iconCounter = 0;
            }
        }

        function autoCenter() {
            //  Create a new viewpoint bound
            var bounds = new google.maps.LatLngBounds();
            //  Go through each...
            for (var i = 0; i < markers.length; i++) {
                bounds.extend(markers[i].position);
            }
            //  Fit these bounds to the map
            map.fitBounds(bounds);
        }
        autoCenter();
    </script>
@endsection
