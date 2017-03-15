<base href="{{url('/')}}" />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DSD Companies</title>
    {{--    {{ HTML::style('css/style.css') }}--}}

    <link rel="stylesheet" type="text/css" href="/css/style.css" >

    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >--}}

    {{--<link type="text/css" href="css/bootstrap-timepicker.min.css" />--}}

    {{--<link rel="stylesheet" type="text/css" href="/css/lity.css" >--}}


    {{--LIGHTBOX --}}
    <link rel="stylesheet" type="text/css" href="/css/lightbox.css">
    <script src="/js/lightbox.min.js" type="text/javascript"></script>
    {{--END LIGHTBOX --}}

    <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">


    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{--<link rel="preload" type="text/css" href="../css/style.css" as="style" onload="this.rel='stylesheet'">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" >

    {{--="{{ elixir('css/app.css') }}" rel="stylesheet">--}}

    <style>

        .clearfix:after {
            clear: both;
            content: "";
            display: block;
            height: 0;
        }

        /*.container {*/
        /*font-family: 'Lato', sans-serif;*/
        /*width: 1000px;*/
        /*margin: 0 auto;*/
        /*}*/

        /*.wrapper {*/
        /*display: table-cell;*/
        /*height: 400px;*/
        /*vertical-align: middle;*/
        /*}*/

        #search-bar {
            background-color: #960a0a !important;
            padding: 0px 10px;
            top: 81px;
            height: 55px;
            position: fixed;
            width: 100%;

        }
        /*.nav {*/
            /*margin-top: 40px;*/
        /*}*/

        .pull-right {
            float: right;
        }

        a, a:active {
            color: #333;
            text-decoration: none;
        }

        a:hover {
            color: #999;
        }

        /* Breadcrups CSS */

        .arrow-steps{
            margin-left: auto;
            margin-right: auto;
            width:90%;
        }
        .arrow-steps .step {
            text-align: center;
            color: #fff;
            cursor: default;
            margin: 0 3px;
            padding: 10px 10px 10px 20px;
            width: 180px;
            font-size: 16px;
            letter-spacing: 2px;
            font-weight: bold;
            float: left;
            position: relative;
            background-color: #ccc;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            transition: background-color 0.2s ease;
        }

        .arrow-steps .step:after,
        .arrow-steps .step:before {
            content: " ";
            position: absolute;
            top: 0;
            right: -17px;
            width: 0;
            height: 0;
            border-top: 45px solid transparent;
            border-bottom: 45px solid transparent;
            border-left: 17px solid #ccc;
            z-index: 2;
            transition: border-color 0.2s ease;
        }

        .arrow-steps .step:before {
            right: auto;
            left: 0;
            border-left: 17px solid #fff;
            z-index: 0;
        }

        .arrow-steps .step:first-child:before {
            border: none;
        }

        .arrow-steps .step:first-child {
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .arrow-steps .step span {
            position: relative;
        }

        .arrow-steps .step span:before {
            opacity: 0;
            content: "✔";
            position: absolute;
            top: -2px;
            left: -20px;
        }

        .arrow-steps .step.done span:before {
            opacity: 1;
            -webkit-transition: opacity 0.3s ease 0.5s;
            -moz-transition: opacity 0.3s ease 0.5s;
            -ms-transition: opacity 0.3s ease 0.5s;
            transition: opacity 0.3s ease 0.5s;
        }

        .arrow-steps .step.current {
            color: #fff;
            background-color: #960a0a;
        }

        .arrow-steps .step.current:after {
            border-left: 17px solid #960a0a;
        }

        .arrow-steps .glyphicon.glyphicon {
            display: block;
            font-size: 25px;
            line-height: 2;
        }


        nav.sidebar, .main{
            margin-top:135px;
            -webkit-transition: margin 200ms ease-out;
            -moz-transition: margin 200ms ease-out;
            -o-transition: margin 200ms ease-out;
            transition: margin 200ms ease-out;
        }

        .main{
            padding: 10px 10px 0 10px;
        }

        nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
            color: #CCC;
            background-color: transparent;
            margin-left:15px;
        }

        /*nav:hover .forAnimate{*/
        /*opacity: 1;*/
        /*}*/



        /*@media (min-width: 765px) {*/


        /*.navbar-nav>li {*/
        /*float: left;*/
        /*!* width: 10; *!*/
        /*width: 200px;*/
        /*}*/
        .main{
            position: absolute;
            width: calc(100% - 40px);
            margin-left: 40px;
            float: right;
        }

        nav.sidebar:hover + .main{
            margin-left: 200px;
        }

        nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }

        nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        nav.sidebar a{
            padding-right: 13px;
        }

        nav.sidebar .navbar-nav > li:first-child{
            border-top: 1px #e5e5e5 solid;
        }

        nav.sidebar .navbar-nav > li{
            border-bottom: 1px #e5e5e5 solid;
            margin-bottom: 0px;
        }

        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
            padding: 0 0px 0 0px;
        }

        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        nav.sidebar{
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            margin-bottom: 0px;
        }

        nav.sidebar li {
            width: 100%;
        }



        .forAnimate{
            opacity: 0;
        }
        /*}*/

        /*@media (min-width: 330px) {*/

        .main{
            width: calc(100% - 200px);
            margin-left: 200px;
        }

        nav.sidebar{
            margin-left: 0px;
            float: left;
        }

        nav.sidebar .forAnimate{
            opacity: 1;
        }
        /*}*/

    </style>
</head>
<body id="app-layout">
{{--<div class="wrapper">--}}


<header>
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="row hidden-xs" id="user-links">
                <div class="pull-right" role="group" aria-label="">
                    {{--<img src="/images/dsd-admin-icons/user-loggedin.png">--}}
                    {{--<p>Welcome, {‌{ Auth::user()->name }} --}}
                    <div class="user-loggedIn" style="display:flex;">
                        @if(Auth::check())
                            <img src="/images/dsd-admin-icons/user-loggedin.png" height="22px" style="padding-right:5px;"><p>Welcome, {{Auth::user()->name}} | {{link_to_route('logout', 'Logout')}}</p>

                        @else
                            {{--                                                          {{link_to_route('login', 'Login')}}--}}
                            {{--<a href="/login">Login</a>--}}

                        @endif
                    </div>
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
                {{--<!-- <div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-horizonal cbp-spmenu-top navHeaderCollapse">-->--}}
                {{--<div class="visible-xs row" id="header-buttons">--}}
                {{--<div class="btn-group" role="group" aria-label="">--}}
                {{--<a href="/request-quote"><button type="button" class="btn btn-warning">Request Quote</button></a>--}}
                {{--<a href="/request-account"><button type="button" class="btn btn-warning" href="request-account.php">Request Account</button></a>--}}
                {{--</div>--}}

                <div class="row visible-xs" id="user-links">
                    <div class="pull-left" role="group" aria-label="">
                        {{--<img src="/images/dsd-admin-icons/user-loggedin.png">--}}
                        {{--<p>Welcome, {‌{ Auth::user()->name }} --}}
                        <div class=" col-xs-12 user-loggedIn" style="display:flex;">
                            @if(Auth::check())
                                <img src="/images/dsd-admin-icons/user-loggedin.png" height="22px" style="padding-right:5px;"><p>Welcome, {{Auth::user()->name}} | {{link_to_route('logout', 'Logout')}}</p>

                            @else
                                {{--<li>{{link_to_route('login', 'Login')}}</li>--}}

                            @endif
                        </div>
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
                            <li><a href="/services/air-freight">Air Freight</a></li>
                            <li><a href="/services/ocean-freight">Ocean Freight</a></li>
                            <li><a href="/services/trucking">Trucking</a></li>
                            <li><a href="/services/hot-shot">Hot Shot Service</a></li>
                            <li><a href="/services/warehousing">Warehousing</a></li>
                            <li><a href="/services/cargo-screening">Cargo Screening</a></li>
                        </ul>
                    </li>
                    <li><a href="freight-availability">Freight Availability</a></li>
                    <li class="last-item"><a href="contact">Contact</a></li>

                </ul>
            </div>
        </div>


        <div class="row-fluid" id="search-bar">
            <div class="container">
                <form action="/search-results-admin" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="col-xs-12 col-sm-6">
                        {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}

{{--                        {!! Form::label('adminQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}--}}
                        <input type="text" class="form-control" name="adminQuery" id="search-input"
                               placeholder="Search all accounts, CFS, and trucking deliveries">
                                    <button type="submit" type="hidden" id='search' class="hidden"/>
                        {{Form::close()}}
                    </div>
                </form>

                {{--<div class="form-group col-sm-4" id="search-input">--}}
                {{--<div class="icon-addon addon-sm">--}}
                {{--<input type="text" placeholder="Search by MAWB or Reference No." class="form-control" id="search">--}}
                {{--<label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>--}}
                {{--<input type="submit" type="hidden"/>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</header>


<section class="row-fluid">
    <nav class="navbar navbar-default sidebar" role="navigation">
        {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">--}}
        {{--<span class="sr-only">Toggle navigation</span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--<span class="icon-bar"></span>--}}
        {{--</button>--}}
        {{--</div>--}}
        {{--<div class="container">--}}
        {{--<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">--}}

        <ul class="nav navbar-nav">
            <li class="panel panel-default"><a href="/dashboard">Dashboard<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-dashboard"></span></a></li>
            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-accounts">
                    Accounts <span class="caret"></span> <span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-user"></span>
                </a>

                <div id="dropdown-accounts" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="/account">View All<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-list"></span></a></li>
                            {{--<li><a href="/account/step/1">Add New<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-plus"></span></a></li>--}}
                            <li><a href="/account/trash">Trash<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-trash"></span></a></li>
                            {{--<li><a href="/account/history"> History<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-time"></span></a></li>--}}
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-cfs">
                    CFS <span class="caret"></span> <span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-plane"></span>
                </a>

                <div id="dropdown-cfs" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="/cfs">View All <span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-list"></span></a></li>
                            <li><a href="/cfs/open">Open Transactions<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-plus"></span></a></li>
                            <li><a href="/cfs/trash">Trash<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-trash"></span></a></li>
                            {{--<li><a href="/cfs/history"> History<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-time"></span></a></li>--}}
                        </ul>
                    </div>
                </div><!-- /.navbar-collapse -->
            </li>

            <!-- Dropdown-->
            <li class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-trucking">
                    Trucking <span class="caret"></span> <span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-road"></span>
                </a>

                <div id="dropdown-trucking" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class="nav navbar-nav">
                            <li><a href="/trucking">View All<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-list"></span></a></li>
                            <li><a href="/trucking/open">Open Transactions<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-plus"></span></a></li>
                            <li><a href="/trucking/trash">Trash<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-trash"></span></a></li>
                            {{--<li><a href="/trucking/history"> History<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-time"></span></a></li>--}}
                        </ul>
                    </div>

                </div><!-- /.navbar-collapse -->
            </li>

            <li class="panel panel-default"><a href="history"> History<span style="font-size:16px;" class="pull-right showopacity glyphicon glyphicon-time"></span></a></li>

        </ul>
        </div>
        </div>
    </nav>

</section>




<!-- Main Content -->
<div class="container-fluid">
    <div class="side-body">
        @yield('content')

    </div>
</div>
{{--</div>--}}

{{--<div class="push"></div>--}}

<footer>
    <div class="row-fluid" id="footer">
        <div class="container">
            <div class="col-xs-12 col-sm-5">
                <h4>Vision</h4> <p>To create an enduring, people-centered partnership, founded on basis of trust and respect, which has been earned through cultivating a consistent delivery of superior services, to a worldwide base of customers, creating a Global reach, with a Local Touch.</p>
                <p class="copy"><a href="home"><img src="images/logo.png" id="footer-logo" class="img-responsive hidden-xs" alt="dsd trucking" width="50"></a>&copy; Copyright 2015 DSD Trucking</p>
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
    </div>
    {{--<div class="push"></div>--}}
    {{--</div>--}}

    {{--</div>--}}


</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script>--}}

<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="https://raw.githubusercontent.com/moment/moment/develop/min/moment-with-locales.min.js"></script>

<script src="https://raw.githubusercontent.com/Eonasdan/bootstrap-datetimepicker/master/build/js/bootstrap-datetimepicker.min.js"></script>


<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


<script type="text/javascript">
    $('.date').datepicker({
        format: 'mm-dd-yyyy'
    });
</script>


{{--<script type="application/javascript">--}}
{{--$(function () {--}}
{{--$('.navbar-toggle').click(function () {--}}
{{--$('.navbar-nav').toggleClass('slide-in');--}}
{{--$('.side-body').toggleClass('body-slide-in');--}}
{{--$('#search').removeClass('in').addClass('collapse').slideUp(200);--}}

{{--/// uncomment code for absolute positioning tweek see top comment in css--}}
{{--//$('.absolute-wrapper').toggleClass('slide-in');--}}

{{--});--}}



{{--// Remove menu for searching--}}
{{--$('#search-trigger').click(function () {--}}
{{--$('.navbar-nav').removeClass('slide-in');--}}
{{--$('.side-body').removeClass('body-slide-in');--}}

{{--/// uncomment code for absolute positioning tweek see top comment in css--}}
{{--//$('.absolute-wrapper').removeClass('slide-in');--}}

{{--});--}}
{{--});--}}


{{--</script>--}}
<script src="/js/lightbox.min.js"></script>
</body>

</html>

