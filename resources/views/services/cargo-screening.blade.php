@extends('layouts.customer')

@section('content')

    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>Cargo Screening</h4>
            <ol class="breadcrumb pull-left">
                <li><a href="home">Home</a></li>
                <li><a href="services">Services</a></li>
                <li class="active">Cargo Screening</li>
            </ol>
            <p class="pull-right service-nav"><a href="warehousing">Warehousing</a> <!--| <a href="hot-shot">Next</a></p>--></p>
        </div>
        <div class="container">
            <img src="images/cargo-screening/hero-image.jpg" class="col-xs-12 img-responsive hidden-xs" alt="cargo screening facility LAX">
            <img src="images/mobile/cargo-screening/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="certified cargo screening facility los angeles">
            <h1 class="col-xs-12">Cargo Screening</h1>

            <h4 class="col-xs-12 no-margin-bottom">TSA Compliance</h4>
            <p class="col-xs-12">DSD CCSF was established with and remains in compliance of the <a href="https://en.wikipedia.org/wiki/Transportation_Security_Administration" target="_blank">TSA Order</a> under authority of the United States Congress. Our facility conducts all cargo screening activities in accordance to rules and regulations of the Certified Cargo Screening Program.</p>



            <h4 class="col-xs-12 no-margin-bottom">Personnel</h4>
            <p class="col-xs-12">DSD CCSF has 15 personnel covering our 24/7 operation. All personnel are trained and certified in accordance with TSA regulation. They all have STA numbers.</p>



            <h4 class="col-xs-12 no-margin-bottom">Cargo and Information Security</h4>
            <p class="col-xs-12">The Designated Screening Area (DSA) is a 15,000 square foot high security warehouse space within a highly secure warehouse (24/7 guarded entry) in Redondo Beach, California. The <a href="https://en.wikipedia.org/wiki/Transportation_Security_Administration" target="_blank">TSA</a> is under full, state of the art color video surveillance cameras. Access to the TSA secured areas requires having a combination protected by a coded access panel for entrance into the facility, which automatically closes 10 seconds after entrance is granted. In addition, the entire TSA secured area is protected by TSA-approved sprinkler systems.</p>
            <p class="col-xs-12">Electronic information and data is stored on password protected computer systems, with access limited to managerial and supervisory personnel only, with the additional requirement of updating passwords every thirty days. All TSA Certified Screening Documentation is kept in an on-site, secured office, which remains locked at all times.</p>



            <h4 class="col-xs-12 no-margin-bottom">Equipment</h4>
            <p class="col-xs-12">DSD CCSF has a 632 DV x-ray machine built by Rapiscan, and an Itemizer DX built by General Electric. The x-ray machine has a large aperture that allows skid-level screening (maximum skid height of 64 inches), while the Itemizer DX is used for chemical detection.</p>



            <h4 class="col-xs-12 no-margin-bottom">Process</h4>
            <p class="col-xs-12">
                Unscreened cargo is dropped off at DSD CCSF (at least 6 hours before cut off, depending on the volume) by either the customer’s trucker of choice, or DSD Trucking. Upon unloading cargo, all cargo is checked for damage, notating any EXCEPTIONS. In the event there is any damage noticed, such as, water damage, crushed boxes, opened boxes etc., the customer is immediately notified via phone, e-mail or both, with pictures (if possible) accompanying any e-mail. The freight is then weighed and dimmed, and an on-hand created with the appropriate reference number attached to each piece or pallet, along with the appropriate CCSF stickers attached. At the direction of the customer, the cargo is then screened, labeled, and loaded on ULDs or sent loose, per the customer’s request. Additionally, all required and TSA mandated CCSF certification and documentation is prepared. Only drivers that are TSA certified are eligible to deliver freight to the airlines, and eligibility is verified on the TSA website for verification. The airline then signs off on the receipt of the freight and the CCSF certification. A copy of certification is then returned to DSD CCSF, whereby, a copy of certification scanned to each customer.</p>



            <p class="col-xs-12">Contact <strong>Ed Buccio</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13107251999"> 310-725–1999</a> | <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto: edbuccio@dsdcompanies.com"> edbuccio@dsdcompanies.com</a>.
            </p>

            <!-- GALLERY --->
            <!--------	WAITING ON IMAGES FROM FAUSTO----------->
            <div class="container">
                <div class="gallery" id="services-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/cargo-screening/cargo-screening3.jpg" data-title="The x-ray machine has a large aperture that allows skid-level screening." data-lightbox="cargo-screening">
                                <img src="images/cargo-screening/cargo-screening3-thumb.jpg" class="img-thumbnail img-responsive" alt="cargo screening los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/cargo-screening/cargo-screening2.jpg" data-title="At the direction of the customer, the cargo is then screened, labeled, and loaded on ULDs or sent loose, per the customer’s request." data-lightbox="cargo-screening">
                                <img src="images/cargo-screening/cargo-screening2-thumb.jpg"class="img-thumbnail img-responsive" alt="ccsf los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/cargo-screening/cfs-screening-facility.jpg" data-title="The Designated Screening Area (DSA) is a 15,000 square foot high security warehouse space within a highly secure warehouse (24/7 guarded entry) in Redondo Beach, California." data-lightbox="cargo-screening">
                                <img src="images/cargo-screening/cfs-screening-facility-thumb.jpg"class="img-thumbnail img-responsive" alt="ccsf southern california">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/cargo-screening/cargo-screening.jpg" data-title="632 DV x-ray machine built by Rapiscan" data-lightbox="cargo-screening">
                                <img src="images/cargo-screening/cargo-screening-thumb.jpg"class="img-thumbnail img-responsive" alt="ccsf">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
