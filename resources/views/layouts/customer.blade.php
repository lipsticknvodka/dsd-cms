<base href="{{url('/')}}" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DSD Companies</title>

    {{--NIVO SLIDER--}}
    {{--<link rel="stylesheet" type="text/css" href="/css/nivo-slider.css" />--}}
    <link rel="stylesheet" type="text/css" href="/css/default/default.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="/js/jquery.nivo.slider.pack.js" type="text/javascript"></script>


    <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
                effect: 'fade',
                animSpeed: 500,
                pauseTime: 4000,
                controlNav: true,
                directionNav: true
            });
        });
    </script>
{{--END NIVO SLIDER--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css" >
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    {{--LIGHTBOX --}}
    <link rel="stylesheet" type="text/css" href="/css/lightbox.css">
    <script src="/js/lightbox.min.js" type="text/javascript"></script>
    {{--END LIGHTBOX --}}

{{--GOOGLE API KEY FOR GOOGLE MAP--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo1ZZb_SYXDKoGvh0R8-9amzwKGy_txSY&callback=map"></script>

</head>
<body id="app-customer">

{{--<div id="wrap">--}}

<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row hidden-xs" id="header-buttons">
                <div class="btn-group pull-right" role="group" aria-label="">
                    <a href="request-quote"><button type="button" class="btn btn-warning">Request Quote</button></a>
                    <a href="request-account"><button type="button" class="btn btn-warning" href="request-account.php">Request Account</button></a>
                </div>
            </div>

            <a href="/" class="navbar-brand"><img src="images/logo.png" id="header-logo" alt="dsd trucking">DSD Companies</a>


            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse" aria-expanded="false" aria-controls="navbar">
                <!--<button type="button" class="navbar-toggle menu-top push-body" data-toggle="collapse" data-target=".navHeaderCollapse">-->
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <div class="collapse navbar-collapse navHeaderCollapse">
                <!-- <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-horizonal cbp-spmenu-top navHeaderCollapse">-->
                <div class="visible-xs row" id="header-buttons">
                    <div class="btn-group" role="group" aria-label="">
                        <a href="request-quote"><button type="button" class="btn btn-warning">Request Quote</button></a>
                        <a href="request-account"><button type="button" class="btn btn-warning" href="request-account.php">Request Account</button></a>
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="about" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="about">About DSD</a></li>
                            <li><a href="facilities">Facilities</a></li>
                            <!--<li><a href="sustainability.php">Sustainability</a></li>-->
                            <li><a href="faq">FAQ</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="services" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="air-freight">Air Freight</a></li>
                            <li><a href="ocean-freight">Ocean Freight</a></li>
                            <li><a href="trucking">Trucking</a></li>
                            <li><a href="hot-shot">Hot Shot Service</a></li>
                            <li><a href="warehousing">Warehousing</a></li>
                            <li><a href="cargo-screening">Cargo Screening</a></li>
                        </ul>
                    </li>
                    <li><a href="freight-availability">Freight Availability</a></li>
                    <li class="last-item"><a href="contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </div>
</header>





<!-- Main Content -->
<div class="container-fluid">

        @yield('content')

</div>
{{--</div>--}}



<footer>
    <div class="row-fluid" id="footer">
        <div class="container">
            <div class="col-xs-12 col-sm-5">
                <h4>Vision</h4> <p>To create an enduring, people-centered partnership, founded on basis of trust and respect, which has been earned through cultivating a consistent delivery of superior services, to a worldwide base of customers, creating a Global reach, with a Local Touch.</p>
                <p class="copy"><a href="/"><img src="images/logo.png" id="footer-logo" class="img-responsive hidden-xs" alt="dsd trucking" width="50"></a>&copy; Copyright 2015 DSD Trucking</p>
            </div>

            <div class="col-xs-12 col-sm-4">
                <div class="row">
                    <h4>CFS, Intermodal, CCSF, Trucking &amp; Bonded Warehouse</h4>
                    <address>
                        <p>2411 Santa Fe Ave.</p>
                        <p>Redondo Beach, CA 90278</p>
                        <p><strong>Operating 24/7</strong></p>
                        <!--<p><i class="fa fa-phone 2x"></i> <a href="tel:+13107251999">310-725-1999</a></p>
                        <p><i class="fa fa-print"></i> <a href="tel:+13107251996">310-725-1996</a></p>-->
                    </address>
                </div>

                <div class="row">
                    <h4>Corporate &amp; Distribution Center</h4>
                    <address>
                        <p>8820 Bellanca Ave.</p>
                        <p>Los Angeles, CA 90045</p>

                        <p><strong>M-F</strong> 8am-10pm</p>
                        <!--<p><i class="fa fa-phone 2x"></i> <a href="tel:+13103383395">310-338-3395</a></p>
                        <p><i class="fa fa-print"></i> <a href="tel:+13103384177">310-338-4177</a></p>-->
                    </address>
                </div>
            </div>

            <div class="col-xs-12 col-sm-3">
                <div class="row">
                    <p id="footer-contact">If you have any questions, please visit our <a href="faq.php">FAQ</a> page. You may also send DSD a message by visiting our <a href="contact.php">contact page</a>.</p>
                    <!--<div class="btn btn-warning"><a href="#footer-contact" data-toggle="modal">Contact DSD</a></div>-->
                </div>
                <div class="row">
                    <h4 class="no-margin-bottom">Social</h4>
                    <a href="https://www.facebook.com/profile.php?id=100010145826646" target="_blank"><i class="col-xs-3 col-xs-offset-2 col-sm-offset-0 fa fa-facebook-square"></i></a><a href="https://twitter.com/dsdcompanies" target="_blank"><i class="col-xs-3 fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/+Dsdcompanies2411" target="_blank"><i class="col-xs-3 fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    {{--</div>--}}
        <script src="js/lightbox.min.js"></script>
</footer>



</body>
<!-- JavaScripts -->

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</html>
