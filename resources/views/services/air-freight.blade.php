@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="row-fluid">
        <div class="container" id="page-header">
            <h4>Air Freight</h4>
            <ol class="breadcrumb pull-left">
                <li><a href="/">Home</a></li>
                <li><a href="services">Services</a></li>
                <li class="active">Air Freight</li>
            </ol>
            <p class="pull-right service-nav"><!--<a href="air-freight">Prev</a> | --><a href="/services/ocean-freight">Ocean Freight</a></p>
        </div>
        <div class="container">
            <img src="images/air-freight/hero-image.jpg" class="col-xs-12 img-responsive hidden-xs"  alt="air freight LAX">
            <img src="images/mobile/air-freight/hero-image.jpg" class="col-xs-12 img-responsive visible-xs" alt="air freight LAX">

            <h1 class="col-xs-12">Air Freight</h1>
            <p class="col-xs-12">We have two warehouse locations totalling 150k square feet, our general warehouse, which offers a wide variety of services for our customers requiring non-bonded freight, located at 8820 Bellanca Ave, which is within one mile of <a href="https://en.wikipedia.org/wiki/Los_Angeles_International_Airport" target="_blank">LAX</a>. Our other primary <a href="facilities">CFS location</a>, which handles our customers' US Customs Bonded Freight, located in Redondo Beach, CA, less than four miles from <a href="https://en.wikipedia.org/wiki/Los_Angeles_International_Airport" target="_blank">LAX</a>. Combined, over 75 million kilos of <a href="https://en.wikipedia.org/wiki/Air_cargo" target="_blank">air cargo</a> pass through these locations anually. Our customer base includes numerous small to mid-size freight forwarding companies, however, we are also capable, and do perform CFS <a href="air-freight">air freight shipping</a> for some of the largest, dominant <a href="https://en.wikipedia.org/wiki/Freight_forwarder" target="_blank">freight forwarders</a> in the world, such as expeditors: FedEx FTN, UPS Supply Chain Solutions, DHL Global Forwarding, Damco, JAS and SDV.
            </p>
            <p class="col-xs-12">Throughout the course of the year, we are asked to handle large “full-plane” charters for many of our larger freight forwarding companies. We recover all the air cargo from the airport, break it down, sort and segregate based on the customer's directive, we then personally deliver all the freight to our customer's distribution centers (warehouses) within Southern California. We utilize a wide array of equipment when making recoveries, including tractors with flatbed trailers, enclosed roller-bed trailers, straight trucks, and utilize our specialized roller-bed trucks, specialized roller-bed flatbed trailers. We also offer extra heavy, oversize moves and transportation moves that requires escorting services. In order to service our global customers, it requires us to run a fully staffed and secure,  24/7 operations, including 24/7 security guard service at all times, providing the means to make our customers’ freight management top priority. To learn more about DSD's facilities, click <a href="facilities">here</a>.</p>
            <p class="col-xs-12">Contact <strong>Carlos Guerra</strong> <!--<i class="fa fa-phone 2x"></i>--><a href="tel:13107251995"> 310-725–1995</a> | <!--<i class="fa fa-envelope 2x"></i>--> <a href="mailto:carlos@dsdcompanies.com">carlos@dsdcompanies.com</a>.
            </p>

            <!-- GALLERY --->
            <div class="container">
                <div class="gallery" id="services-gallery">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <a href="images/air-freight/fork-lift.jpg" data-title="Forklift &amp; cargo" data-lightbox="air-freight">
                                <img src="images/air-freight/fork-lift-thumb.jpg" class="img-thumbnail img-responsive" alt="cfs los angeles">
                            </a>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <a href="images/air-freight/fed-ex-plane.jpg" data-title="Throughout the course of the year, we are asked to handle large “full-plane” charters for many of our larger freight-forwarding companies" data-lightbox="air-freight">
                                <img src="images/air-freight/fed-ex-plane-thumb.jpg" class="img-thumbnail img-responsive" alt="air freight los angeles">
                            </a>
                        </div>

                        <!-- <div class="col-xs-6 col-sm-3">
                              <a href="images/ocean-freight/super-container-ship-2.jpg" data-title="Super container ships" data-lightbox="air-freight">
                              <img src="images/ocean-freight/super-container-ship-2.jpg" width="200px" class="img-thumbnail" alt="super container ships los angeles">
                             </a>
                         </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
