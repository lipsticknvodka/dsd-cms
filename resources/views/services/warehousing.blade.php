@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Warehousing</h4>
            <ol class="breadcrumb pull-left">
                <li><a href="home">Home</a></li>
                <li><a href="services">Services</a></li>
                <li class="active">Warehousing</li>
            </ol>
            <p class="pull-right service-nav"><a href="hot-shot">Hot Shot Service</a> | <a href="cargo-screening">Cargo Screening</a></p>
        </div>
        <div class="container">
            <img src="images/warehousing/hero-image.jpg" class="col-xs-12 img-responsive hidden-xs" alt="trucking company">
            <img src="images/mobile/warehousing/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="ccsf los angeles">
            <h1 class="col-xs-12">Warehousing</h1>
            <h4 class="col-xs-12 no-margin-bottom no-margin-top">Video Surveillance Systems </h4>
            <strong class="col-xs-12" id="serving-both">Serving Both locations</strong>
            <p class="col-xs-12">
                We have two warehouse locations totaling 150k square feet, our general warehouse, which offers a wide variety of services for our customers requiring non-bonded freight, located at 8820 Bellanca Ave, which is within one mile of <a href="https://en.wikipedia.org/wiki/Los_Angeles_International_Airport" target="_blank">LAX</a>. Our other primary CFS location, which handles our customers' US Customs Bonded Freight, located in Redondo Beach, CA, less than four miles from <a href="https://en.wikipedia.org/wiki/Los_Angeles_International_Airport" target="_blank">LAX</a>. Combined, over 75 million kilos of <a href="https://en.wikipedia.org/wiki/Air_cargo" target="_blank">air freight</a> pass through these locations annually. Our customer base includes numerous small to mid-size <a href="https://en.wikipedia.org/wiki/Freight_forwarder" target="_blank">freight forwarding</a> companies, however, we are also capable, and do perform CFS <a href="https://en.wikipedia.org/wiki/Air_cargo" target="_blank">air freight </a>services for some of the largest, dominant <a href="https://en.wikipedia.org/wiki/Freight_forwarder" target="_blank">freight forwarders</a> in the world, such as; expeditors, FedEx FTN, UPS Supply Chain Solutions, DHL Global Forwarding, Damco, JAS and SDV.</p>
            <p class="col-xs-12">
                DSD understands the value of having a state of the art video surveillance system, therefore, all of our locations utilize the newest available technology in our <a href="https://en.wikipedia.org/wiki/Closed-circuit_television" target="_blank">CCTV systems</a>, which is visible from any remote location we choose to access our personnel, go back and clarify any previous issues that may have surfaced. We have designated personnel that oversee our video surveillance systems. DSD exemplifies its company mantra, provide our customers with the most cost-effective and exemplary levels of customer service in this industry. With DSD having one of the highest employee tenure rates in the industry, with the average tenure of each DSD employee, person at DSD being here a minimum of 10 years.</p>

            <p class="col-xs-12"><strong>Fausto Amigon</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13107251999"> 310-725–1999</a> | <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto: fausto@dsdcompanies.com "> fausto@dsdcompanies.com </a>.
            </p>

            <!--<h4 class="col-xs-12 no-margin-bottom">DSD CFS, Intermodal, SCCF & Trucking Inc.</h4>
        <address class="col-xs-12" class="facility-address"><strong>2411 Santa Fe. Ave. Redondo Beach, CA 90278</strong></address>
        <h4 class="col-xs-12 no-margin-bottom">DSD Corporate & Distribution Center</h4>
        <address class="col-xs-12" class="facility-address"><strong>8820 Bellanca Ave. Los Angeles, CA 90045</strong></address>-->

            <!-- GALLERY --->

            <div class="container">
                <div class="gallery" id="services-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/cfs-front-docks.jpg" data-title="Container freight station front docks." data-lightbox="warehousing">
                                <img src="images/warehousing/cfs-front-docks-thumb.jpg" class="img-thumbnail img-responsive" alt="freight fowarding company redondo beach">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/cfs-security-cage.jpg" data-title="In order to service our global customers, it requires us to run a fully staffed and secure, 24/7 operations, including 24/7 security guard service at all times." data-lightbox="warehousing">
                                <img src="images/warehousing/cfs-security-cage-thumb.jpg" class="img-thumbnail img-responsive" alt="freight fowarding company los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/cfs1.JPG" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/cfs1-thumb.JPG" class="img-thumbnail img-responsive" alt="freight forwarding companies">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/cfs2.JPG" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/cfs2-thumb.JPG"class="img-thumbnail img-responsive" alt="bonded warehouse">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/dsd-warehousing.jpg" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/dsd-warehousing-thumb.jpg"class="img-thumbnail img-responsive" alt="logistic distribution los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/sort-and-segregate.jpg" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/sort-and-segregate-thumb.jpg"class="img-thumbnail img-responsive" alt="freight transport los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/dsd-warehouse-2.jpg" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/dsd-warehouse-2-thumb.jpg"class="img-thumbnail img-responsive" alt="bonded warehouse los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/warehousing/dsd-warehouse-3.jpg" data-title="Tamper Evident" data-lightbox="warehousing">
                                <img src="images/warehousing/dsd-warehouse-3-thumb.jpg"class="img-thumbnail img-responsive" alt="hot shot delivery">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
