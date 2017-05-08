@extends('layouts.customer')

@section('content')


    <div id="page-wrapper" class="container-fluid">
        <div id="wrapper">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <a href="/services/air-freight"><img src="/images/slides/air-freight-min.jpg" alt="air freight lax"/></a>
                    <a href="/services/ocean-freight"><img src="/images/slides/ocean-freight.jpg" alt="air freight los angeles" /></a>
                    <a href="/services/trucking"><img src="/images/slides/trucking-min.jpg" alt="Trucking Los Angeles" class="col-xs-12"/></a>
                    <a href="services/warehousing"><img src="/images/slides/warehousing-min.jpg" alt="freight forwarding company los angeles" /></a>
                    <!-- <a href="container-freight-station"><img src="images/slides/cfs.jpg" alt="" /></a>-->
                </div>
            </div>
        </div>



        <section class="y-mainwrap y-mainarrow" id="our-mission">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Our Mission</h1>
                    <p>DSD Trucking requires a specific set of industry-related certifications in order to effectively handle our customer’s worldwide freight and transportation needs. Creating an <strong><em>unbroken allegiance of trust, honesty and integrity in our ability to effectively provide flexible yet cost competitive rates, coupled with exemplary levels of customer service</em></strong>, is what sets DSD apart.</p>
                    <div class="btn btn-default certificate"><a href="about">Learn More</a></div>
                </div>
                <img src="images/our-mission-min.png" class="col-sm-4" alt="freight transport">
            </div>

        </section>

        <section class="row-fluid" id="services">
            <div class="container" >
                <h1 class="row-centered">Our Services</h1>
                <div class="row row-centered">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                                <img src="images/services-icons/air-freight.png" width="150" alt="ccsf los angeles">
                                <h4>Air Freight</h4>
                                <p>We have two <a href="facilities">warehouse locations</a> totalling 150k square feet, one at Bellanca within a mile of LAX, and the other in Redondo Beach, less than four miles from LAX.</p>
                                <div class="btn btn-warning"><a href="air-freight">Read More</a></div></div></div></div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">

                                <img src="images/services-icons/ocean-freight.png" width="150" alt="intermodal freight los angeles">
                                <h4>Ocean Freight</h4>
                                <p>DSD has 25 power units dedicated to the ocean container drayage operation. We dray 20, 40, &amp; 45 ft containers to and from the <a href="https://en.wikipedia.org/wiki/Port_of_Long_Beach" target="_blank">Port of Long Beach</a> and the <a href="https://en.wikipedia.org/wiki/Port_of_Los_Angeles" target="_blank">Port of Los Angeles</a></p>
                                <div class="btn btn-warning"><a href="ocean-freight">Read More</a></div></div></div></div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">

                                <img src="images/services-icons/trucking.png" width="150" alt="trucking company southern california">
                                <h4>Trucking</h4>
                                <p>DSD has over 50 straight trucks, 25 power units, and 15 trailers dedicated to the <a href="trucking">pick up and delivery</a> operation. We pick up and deliver to any location as far north as Santa Maria and as far south as the border with Mexico.</p>
                                <div class="btn btn-warning"><a href="trucking">Read More</a></div></div></div></div>

                    <!-- </div>

                     <div class="row row-centered">-->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                                <img src="images/services-icons/hot-shot.png" width="150" alt="hot shot delivery">
                                <h4>Hot Shot Service</h4>
                                <p>Fulfills the need for overnight, critical service for anywhere within a 600 mile radius from either one of our current locations.</p>
                                <div class="btn btn-warning"><a href="hot-shot">Read More</a></div></div></div></div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                                <img src="images/services-icons/warehousing.png" width="150" alt="bonded warehouse los angeles">
                                <h4>Warehousing</h4><p>All of DSD's locations utilize the newest available technology in our <a href="https://en.wikipedia.org/wiki/Closed-circuit_television" target="_blank">CCTV systems</a>, which is visible from any remote location we choose.</p>

                                <div class="btn btn-warning"><a href="warehousing">Read More</a></div></div></div></div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-centered"><div class="item"><div class="content">
                                <img src="images/services-icons/cargo-screening.png" width="150" alt="ccsf los angeles">
                                <h4>Cargo Screening</h4>
                                <p>DSD CCSF was established with and remains in compliance of the <a href="https://en.wikipedia.org/wiki/Transportation_Security_Administration" target="_blank">TSA</a> Order under authority of the United States Congress.
                                </p>
                                <div class="btn btn-warning"><a href="cargo-screening">Read More</a></div></div></div></div>
                    <!--</div>-->
                </div>
            </div>
        </section>

        <section class="row-fluid" id="sustainability" style="margin-bottom:-50px;">
            <div class="container">
                <img src="images/sustainability/eco-friendly-min.png" class="col-sm-4" alt="freight quote">
                <div class="col-sm-8">
                    <h1>Sustainability</h1>
                    <p>DSD continues to <strong><em>simultaneously work to improve the environmental, social and economic aspects of the world in which we live and work, while continuing to support new and innovative ways to perpetuate environmentally conscious behavior</em></strong> as we continue to move towards the future evolution of continued sustainability.</p>
                    <div class="btn btn-default certificate"><a href="about#about-sustainability">Learn More</a></div>
                </div>
            </div>
        </section>

    </div>


    {{--<script src="js/jquery-1.9.0.min.js" type="text/javascript"></script>--}}


@endsection

