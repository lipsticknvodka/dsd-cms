@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>Services</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Services</li>
            </ol>
        </div>

        <section class="y-mainwrap y-mainarrow services" id="services-air-freight">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Air Freight</h1>
                    <p>We have two warehouse locations totaling 150k sqft, one at 8820 Bellanca Ave, which is within one mile of LAX. Our other primary CFS location, dedicated the Airfreight Business is located in Redondo Beach, CA, which is less than four miles from LAX International Airport. </p>
                    <a href="/services/air-freight"><button type="button" class="btn btn-default">Learn More</button></a>
                </div>
                <img src="images/services/plane.png" class="col-sm-4" alt="freight shipping service">
            </div>
        </section>

        <section class="services" id="services-ocean-freight">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Ocean Freight</h1>
                    <p>DSD has 25 power units dedicated to the ocean container drayage operation. On a daily basis we move Ocean Containers of all sizes, including 20, 40 &amp; 45 feet having a company-owned tri-axle chassis, we are able to handle extra heavy loads as well. We recover containers from both, the Port of Los Angeles and the Port of Long Beach, offering services throughout the day and evening utilizing our night-gate services, (where &amp; When available).</p>
                    <a href="/services/ocean-freight"><button type="button" class="btn btn-warning">Learn More</button></a>
                </div>
                <img src="images/services/super-container-ship.png" class="col-sm-4" alt="ccsf">
            </div>
        </section>

        <section class="row r-mainwrap r-mainarrow services" id="services-trucking">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Trucking</h1>
                    <p>DSD has 50 plus straight trucks, in excess of 25 Tractor power units. We are currently in the process of not only adding to our existing fleet, but also upgrading our fleet as well, with 8 New, 2016, on order, with the tractors, scheduled for delivery in mid to late September.</p>
                    <a href="/services/trucking"><button type="button" class="btn btn-default">Learn More</button></a>
                </div>
                <img src="images/services/dsd-truck-cropped.png" class="col-sm-4" alt="trucking company los angeles">
            </div>
        </section>

        <section class="row-fluid services" id="services-warehousing">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Warehousing</h1>
                    <p>DSD understands the value of having a state of the art video surveillance system, therefore, all of our locations utilize the newest available technology in our CCTV systems, which is visible from any remote location we choose to access our personnel.</p>
                    <a href="/services/warehousing"><button type="button" class="btn btn-warning">Learn More</button></a>
                </div>
                <img src="images/services/forklift.png" class="col-sm-4" alt="bonded warehouse">
            </div>
        </section>

        <section class="row-fluid services" id="services-cargo-screening">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Cargo Screening</h1>
                    <p>The Designated Screening Area (DSA) is a 15,000 square foot high security warehouse space within a highly secure warehouse (24/7 guarded entry) in Redondo Beach, California. The TSA is under full, State of the Art Color Video Surveillance cameras.</p>
                    <a href="/services/cargo-screening"><button type="button" class="btn btn-default">Learn More</button></a>
                </div>
                <img src="images/services/cargo-screening.png" class="col-sm-4" alt="ccsf los angeles">
            </div>
        </section>

        <section class="row-fluid services" id="services-hot-shot">
            <div class="container">
                <div class="col-sm-8">
                    <h1>Hot Shot Service</h1>
                    <p>In continually focusing on the needs of our Customers, DSD, has discovered a new service, that is continually growing, and we (DSD) will continue to stay in close contact with our customers. A big part of Customer Relations and providing our customers with every available type of service they require. Over the last couple of years we have seen the request for a new type of service becomes a necessity, that being, a HOT-SHOT SERVICE.</p>
                    <a href="/services/hot-shot"><button type="button" class="btn btn-warning">Learn More</button></a>
                </div>
                <img src="images/services/cargo-van.png" class="col-sm-4" alt="hot shot delivery">
            </div>
        </section>
    </div>
@endsection