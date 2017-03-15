@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Ocean Freight</h4>
            <ol class="breadcrumb pull-left">
                <li><a href="/">Home</a></li>
                <li><a href="services">Services</a></li>
                <li class="active">Ocean Freight</li>
            </ol>
            <p class="pull-right service-nav"><a href="/services/air-freight">Air Freight</a> | <a href="/services/trucking">Trucking</a></p>
        </div>
        <div class="container">
            <img src="images/ocean-freight/hero-image-min.jpg" class="col-xs-12 img-responsive hidden-xs" alt="intermodal freight los angeles">
            <img src="images/mobile/ocean-freight/hero-image-min.jpg" class="col-xs-12 img-responsive visible-xs" alt="intermodal shipping">
            <h1 class="col-xs-12">Ocean Freight &amp; Intermodal Services</h1>
            <p class="col-xs-12">DSD has 25 power units dedicated to the ocean container drayage operation. On a daily basis, we move <a href="https://en.wikipedia.org/wiki/Container_ship" target="_blank">ocean container ships</a> of all sizes, including 20, 40, and 45 feet <a href="https://en.wikipedia.org/wiki/Intermodal_container" target="_blank">intermodal containers</a>, having a company owned tri-axle chassis, DSD is able to handle extra heavy loads. We recover intermodal containers from both, the <a href="https://en.wikipedia.org/wiki/Port_of_Los_Angeles" target="_blank">Port of Los Angeles</a> and the <a href="https://en.wikipedia.org/wiki/Port_of_Long_Beach" target="_blank">Port of Long Beach</a>, offering services throughout the day and evening utilizing our night-gate services, (where &amp; when available). We deliver containers throughout Southern CA, including daily services to San Diego, and if requested, we will provides services to Northern CA. </p>
            <p class="col-xs-12">All DSD drivers are in full DOT compliance, and follow all rules and regulations of the <a href="https://en.wikipedia.org/wiki/Transportation_Security_Administration" target="_blank">TSA</a> &amp; DOT. All DSD drivers are fully-licensed to enter the ports and all have a <a href="https://en.wikipedia.org/wiki/Transportation_Worker_Identification_Credential" target="_blank">TWIC</a> card, with many additionally having the <a href="https://en.wikipedia.org/wiki/Dangerous_goods" target="_blank">Haz-Mat</a> endorsements. To learn more about DSD's compliance, click <a href="about#compliance">here</a>.</p>
            <p class="col-xs-12">We also offer, and perform trans-loading services for any customer requesting this unique service offering, especially for our mid-west based customers. This entails us to recover full containers from either the <a href="https://en.wikipedia.org/wiki/Port_of_Los_Angeles" target="_blank">Port of Los Angeles</a> or the <a href="https://en.wikipedia.org/wiki/Port_of_Long_Beach" target="_blank">Port of Long Beach</a>, bring them to either DSD <a href
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               ="facilities">location</a>, unload (de-van) the container and then reload into the customer's trailer. We are able to off-load floor loaded trailers and trans-load them on the floor as well, or we are able to unload a floor loaded trailer, and if requested sort, segregate and palletize. We are here for our customers, whatever they may need. We also offer the SEA-AIR services program, which involves; instead of trans-loading into trailers, the freight is transferred to the airlines, for services bound for the East Coast, Latin America, or Europe.</p>
            <p class="col-xs-12">Contact <strong>Jose Orta</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13105368893"> 310-536-8893</a> | <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:jose@dsdcompanies.com">jose@dsdcompanies.com</a>.
            </p>

            <!-- GALLERY --->
            <div class="container">
                <div class="gallery" id="services-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/ocean-freight/ocean-freight-min.jpg" data-title="Intermodal Containers" data-lightbox="ocean-freight">
                                <img src="images/ocean-freight/ocean-freight-thumb.jpg"class="img-thumbnail img-responsive" alt="transport logistics">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/ocean-freight/super-container-ship-1-min.jpg" data-title="Super container ship side view" data-lightbox="ocean-freight">
                                <img src="images/ocean-freight/super-container-ship-1-thumb-min.jpg" class="img-thumbnail img-responsive" alt="sea freight rates">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/ocean-freight/super-container-ship-2-min.jpg" data-title="Super container ships" data-lightbox="ocean-freight">
                                <img src="images/ocean-freight/super-container-ship-2-thumb-min.jpg" class="img-thumbnail img-responsive" alt="international shipping">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
