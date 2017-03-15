@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Trucking</h4>
            <ol class="breadcrumb pull-left">
                <li><a href="/">Home</a></li>
                <li><a href="services">Services</a></li>
                <li class="active">Trucking Services</li>
            </ol>
            <p class="pull-right service-nav"><a href="/services/ocean-freight">Ocean Freight</a> | <a href="/services/hot-shot">Hot Shot Service</a></p>
        </div>
        <div class="container">
            <img src="images/trucking/hero-image.jpg" class="col-xs-12 img-responsive hidden-xs" alt="trucking company los angeles">
            <img src="images/mobile/trucking/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="trucking companies los angeles">
            <h1 class="col-xs-12">Trucking Services</h1>

            <p class="col-xs-12">DSD has over 50 straight trucks, in excess of 25 tractor power units. We are currently in the process of not only adding to our existing fleet, but also upgrading our fleet as well, with 8 New, 2016, on order, with the tractors, scheduled for delivery in mid to late September. We currently have more than 15 trailers dedicated to the pick-up and delivery operation. DSD has the capability to pick-up and deliver as far north as Santa Maria and south to the California and the Mexico border. We also offer special service for San Francisco, Sacramento, Reno, Las Vegas and Phoenix areas.</p>

            <p class="col-xs-12">We also have the capability and experience for heavy haul, oversize and special projects of almost any size, even requiring off-site crane service. DSD makes it as easy as possible for our customers. We handle all aspects of any type of move from start to finish. From obtaining the special permits, to hiring the proper freight escort services. We leave our customers to feel at ease that their project will be handled with the utmost care and performed by one of our experienced personnel. <em><strong>DSD is here to provide are most important asset, YOU, our customer, with whatever service you require</strong></em>. All DSD drivers, are in full DOT compliance, with the appropriate licensure, moreover, we make sure that all drivers meet and exceed all <a href="https://en.wikipedia.org/wiki/Transportation_Security_Administration" target="_blank">TSA</a> rules and regulations, and have up to date STA numbers.  </p>

            <p class="col-xs-12"><strong>Pick Ups –  Victor Sanchez</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13107251999"> 310-725–1999</a>  <!--<i class="fa fa-envelope 2x"></i>--> <!--<a href="mailto: roberto@dsdcompanies.com"> roberto@dsdcompanies.com</a>-->
            </p>
            {{--<p class="col-xs-12"><strong>Deliveries – Pedro Torres</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13107251999"> 310-725–1999</a> | <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto: pedro@dsdcompanies.com"> pedro@dsdcompanies.com</a>--}}
            {{--</p>--}}

            <!-- GALLERY --->
            <div class="container">
                <div class="gallery" id="services-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/truck-spaces.JPG" data-title="DSD has more than 15 trailers dedicated to the pick-up and delivery operation" data-lightbox="trucking">
                                <img src="images/trucking/truck-spaces-thumb.JPG"  class="img-thumbnail img-responsive" alt="hot shot service">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/heavy-load.JPG" data-title="DSD has the capability and experience for heavy haul and oversize and special projects of almost any size." data-lightbox="trucking">
                                <img src="images/trucking/heavy-load-thumb.JPG" class="img-thumbnail img-responsive" alt="pick up and delivery">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/truckload-2.jpg" data-title="DSD handles all aspects of any type of move." data-lightbox="trucking">
                                <img src="images/trucking/truckload-2-thumb.jpg" class="img-thumbnail img-responsive" alt="freight forwarding companies">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/dsd-truck.jpg" data-title="DSD has over 50 straight trucks" data-lightbox="trucking">
                                <img src="images/trucking/dsd-truck-thumb.jpg"class="img-thumbnail img-responsive" alt="trucking company los angeles">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/flat-bed.jpg" data-title="We currently have more than 15 trailers dedicated to the pick-up and delivery operation" data-lightbox="trucking">
                                <img src="images/trucking/flat-bed-thumb.jpg"class="img-thumbnail img-responsive" alt="trucking company la">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/promotion-smith&forge.jpg" data-title="Current promotion for Smith &amp; Forge" data-lightbox="trucking">
                                <img src="images/trucking/promotion-smith&forge-thumb.jpg"class="img-thumbnail img-responsive" alt="freight forwarding comapanies">
                            </a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/trucking/promotion-nbc.jpg" data-title="Current promotion for NBC" data-lightbox="trucking">
                                <img src="images/trucking/promotion-nbc-thumb.jpg"class="img-thumbnail img-responsive" alt="transport logistics">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
