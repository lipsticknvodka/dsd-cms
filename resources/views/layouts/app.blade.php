<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DSD Companies</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{--<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">--}}

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .side-menu {
            position: fixed;
            width: 300px;
            height: 100%;
            background-color: #f8f8f8;
            border-right: 1px solid #e7e7e7;
        }
        .side-menu .navbar {
            border: none;
        }
        .side-menu .navbar-header {
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu .navbar-nav .active a {
            background-color: transparent;
            margin-right: -1px;
            border-right: 5px solid #e7e7e7;
        }
        .side-menu .navbar-nav li {
            display: block;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu .navbar-nav li a {
            padding: 15px 75px;
        }
        .side-menu .navbar-nav li a .glyphicon {
            padding-right: 25px;
        }
        .side-menu #dropdown {
            border: 0;
            margin-bottom: 0;
            border-radius: 0;
            background-color: transparent;
            box-shadow: none;
        }
        .side-menu #dropdown .caret {
            float: right;
            margin: 9px 5px 0;
        }
        .side-menu #dropdown .indicator {
            float: right;
        }
        .side-menu #dropdown > a {
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #dropdown .panel-body {
            padding: 0;
            background-color: #f3f3f3;
        }
        .side-menu #dropdown .panel-body .navbar-nav {
            width: 100%;
        }
        .side-menu #dropdown .panel-body .navbar-nav li {
            padding-left: 15px;
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #dropdown .panel-body .navbar-nav li:last-child {
            border-bottom: none;
        }
        .side-menu #dropdown .panel-body .panel > a {
            margin-left: -20px;
            padding-left: 35px;
        }
        .side-menu #dropdown .panel-body .panel-body {
            margin-left: -15px;
        }
        .side-menu #dropdown .panel-body .panel-body li {
            padding-left: 30px;
        }
        .side-menu #dropdown .panel-body .panel-body li:last-child {
            border-bottom: 1px solid #e7e7e7;
        }
        .side-menu #search-trigger {
            background-color: #f3f3f3;
            border: 0;
            border-radius: 0;
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px 18px;
        }
        .side-menu .brand-name-wrapper {
            min-height: 50px;
        }
        .side-menu .brand-name-wrapper .navbar-brand {
            display: block;
        }
        .side-menu #search {
            position: relative;
            z-index: 1000;
        }
        .side-menu #search .panel-body {
            padding: 0;
        }
        .side-menu #search .panel-body .navbar-form {
            padding: 0;
            padding-right: 50px;
            width: 100%;
            margin: 0;
            position: relative;
            border-top: 1px solid #e7e7e7;
        }
        .side-menu #search .panel-body .navbar-form .form-group {
            width: 100%;
            position: relative;
        }
        .side-menu #search .panel-body .navbar-form input {
            border: 0;
            border-radius: 0;
            box-shadow: none;
            width: 100%;
            height: 50px;
        }
        .side-menu #search .panel-body .navbar-form .btn {
            position: absolute;
            right: 0;
            top: 0;
            border: 0;
            border-radius: 0;
            background-color: #f3f3f3;
            padding: 15px 18px;
        }
        /* Main body section */
        .side-body {
            /*margin-left: 310px;*/
            margin-left: 287px;
        }


        .center-block {
            float: none;
            margin-left: auto;
            margin-right: auto;
        }

        .input-group .icon-addon .form-control {
            border-radius: 0;
        }

        .icon-addon {
            position: relative;
            color: #555;
            display: block;
        }

        .icon-addon:after,
        .icon-addon:before {
            display: table;
            content: " ";
        }

        .icon-addon:after {
            clear: both;
        }

        .icon-addon.addon-md .glyphicon,
        .icon-addon .glyphicon,
        .icon-addon.addon-md .fa,
        .icon-addon .fa {
            position: absolute;
            z-index: 2;
            left: 10px;
            font-size: 14px;
            width: 20px;
            margin-left: -2.5px;
            text-align: center;
            padding: 10px 0;
            top: 1px
        }

        .icon-addon.addon-md .form-control,
        .icon-addon .form-control {
            padding-left: 30px;
            float: left;
            font-weight: normal;
        }

        #search-bar {
            background-color: #960a0a;
            padding: 0px 10px;
        }

        #search-input {
            margin-bottom:0px;
            padding:10px 0px;

        }

        #admin-nav{
            margin-bottom:0px;

        }

        .image-swap{
            width: 27px;
            height: 37px;
            background-image: url('/images/dsd-admin-icons/trucking-hover.png');
            background-repeat: no-repeat;
            background-position: 0 0;
        }

        .image-swap:hover {
            background-position: 0 100%;
            padding:0;
            font-color:#fff;
        }

        #progress-bar img{

            max-width: 363px;
            margin: 15px auto 25px auto;
        }

        /* small screen */
        @media (max-width: 768px) {
            .side-menu {
                position: relative;
                width: 100%;
                height: 0;
                border-right: 0;
                border-bottom: 1px solid #e7e7e7;
            }
            .side-menu .brand-name-wrapper .navbar-brand {
                display: inline-block;
            }
            /* Slide in animation */
            @-moz-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-webkit-keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @keyframes slidein {
                0% {
                    left: -300px;
                }
                100% {
                    left: 10px;
                }
            }
            @-moz-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @-webkit-keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            @keyframes slideout {
                0% {
                    left: 0;
                }
                100% {
                    left: -300px;
                }
            }
            /* Slide side menu*/
            /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
            .side-menu-container > .navbar-nav.slide-in {
                -moz-animation: slidein 300ms forwards;
                -o-animation: slidein 300ms forwards;
                -webkit-animation: slidein 300ms forwards;
                animation: slidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            .side-menu-container > .navbar-nav {
                /* Add position:absolute for scrollable menu -> see top comment */
                position: fixed;
                left: -300px;
                width: 300px;
                top: 43px;
                height: 100%;
                border-right: 1px solid #e7e7e7;
                background-color: #f8f8f8;
                -moz-animation: slideout 300ms forwards;
                -o-animation: slideout 300ms forwards;
                -webkit-animation: slideout 300ms forwards;
                animation: slideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            /* Uncomment for scrollable menu -> see top comment */
            /*.absolute-wrapper{
                  width:285px;
                  -moz-animation: slideout 300ms forwards;
                  -o-animation: slideout 300ms forwards;
                  -webkit-animation: slideout 300ms forwards;
                  animation: slideout 300ms forwards;
                  -webkit-transform-style: preserve-3d;
                  transform-style: preserve-3d;
              }*/
            @-moz-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-webkit-keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @keyframes bodyslidein {
                0% {
                    left: 0;
                }
                100% {
                    left: 300px;
                }
            }
            @-moz-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @-webkit-keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            @keyframes bodyslideout {
                0% {
                    left: 300px;
                }
                100% {
                    left: 0;
                }
            }
            /* Slide side body*/
            .side-body {
                margin-left: 5px;
                margin-top: 70px;
                position: relative;
                -moz-animation: bodyslideout 300ms forwards;
                -o-animation: bodyslideout 300ms forwards;
                -webkit-animation: bodyslideout 300ms forwards;
                animation: bodyslideout 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            .body-slide-in {
                -moz-animation: bodyslidein 300ms forwards;
                -o-animation: bodyslidein 300ms forwards;
                -webkit-animation: bodyslidein 300ms forwards;
                animation: bodyslidein 300ms forwards;
                -webkit-transform-style: preserve-3d;
                transform-style: preserve-3d;
            }
            /* Hamburger */
            .navbar-toggle {
                border: 0;
                float: left;
                padding: 18px;
                margin: 0;
                border-radius: 0;
                background-color: #f3f3f3;
            }
            /* Search */
            #search .panel-body .navbar-form {
                border-bottom: 0;
            }
            #search .panel-body .navbar-form .form-group {
                margin: 0;
            }


            .navbar-header {
                /* this is probably redundant */
                position: fixed;
                z-index: 3;
                background-color: #f8f8f8;
            }
            /* Dropdown tweek */
            #dropdown .panel-body .navbar-nav {
                margin: 0;
            }
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top" id="admin-nav">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--<img src="/images/logo.png" width="50px">--> DSD Companies
                </a>

                {{--<!-- Search -->--}}
                {{--<a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">--}}
                    {{--<span class="glyphicon glyphicon-search"></span>--}}
                {{--</a>--}}



            </div>

                <!-- Search body -->
                {{--<div id="search" class="panel-collapse collapse">--}}
                    {{--<div class="panel-body">--}}
                        {{--<form class="navbar-form" role="search">--}}
                            {{--<div class="form-group">--}}
                                {{--<input type="text" class="form-control" placeholder="Search by MAWB or Reference No.">--}}
                            {{--</div>--}}
                            {{--<button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-search"></span></button>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/home') }}">About</a></li>
                    <li><a href="{{ url('/home') }}">Services</a></li>
                    <li><a href="{{ url('/home') }}">Freight Availability</a></li>
                    <li><a href="{{ url('/home') }}">Contact</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    @else
                        <li> <a href="#"><img src="/images/dsd-admin-icons/user-loggedin.png" width="20px">Welcome,    {{ Auth::user()->name }} |</a></li>
                       <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    <div class="row" id="search-bar">
        <div class="container">
               <div class="form-group col-sm-4" id="search-input">
                   <div class="icon-addon addon-sm">
                       <input type="text" placeholder="Search by MAWB or Reference No." class="form-control" id="search">
                       <label for="search" class="glyphicon glyphicon-search" rel="tooltip" title="search"></label>
                   </div>
               </div>
        </div>
    </div>

    </div>

        </div>

    </div>

    <div class="row">
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <!-- <div class="absolute-wrapper"> </div> -->
        <!-- Menu -->
        <div class="side-menu">

            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <div class="brand-wrapper">
                        <!-- Hamburger -->
                        <button type="button" class="navbar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                    </div>

                </div>

                <!-- Main Menu -->
                <div class="side-menu-container">
                    <ul class="nav navbar-nav">

                        <li><a href="#"><span class="glyphicon"><img src="/images/dsd-admin-icons/dash.png"> </span> Dashboard</a></li>

                        <!-- Dropdown-->
                            <li class="panel panel-default" id="dropdown">
                                <a data-toggle="collapse" href="#dropdown-accounts">
                                    <span class="glyphicon"><img src="/images/dsd-admin-icons/accounts.png"></span> Accounts <span class="caret"></span>
                                </a>

                                <div id="dropdown-accounts" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="nav navbar-nav">
                                            <li><a href="#">View All</a></li>
                                            <li><a href="/new-account">Add New</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.navbar-collapse -->
                            </li>

                        <!-- Dropdown-->
                        <li class="panel panel-default" id="dropdown">
                            <a data-toggle="collapse" href="#dropdown-cfs">
                                <span class="glyphicon"><img src="/images/dsd-admin-icons/cfs.png"></span> CFS <span class="caret"></span>
                            </a>

                            <div id="dropdown-cfs" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">View All</a></li>
                                        <li><a href="#">Add New</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </li>

                        <!-- Dropdown-->
                        <li class="panel panel-default" id="dropdown">
                            <a data-toggle="collapse" href="#dropdown-trucking">
                       <span class="glyphicon"> <div  class="image-swap"></div></span>Trucking<span class="caret"></span>
                                {{--<span class="glyphicon"><img src="/images/dsd-admin-icons/trucking.png"></span> Trucking <span class="caret"></span>--}}
                            </a>

                            <div id="dropdown-trucking" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#">View All</a></li>
                                        <li><a href="#">Add New</a></li>
                                    </ul>
                                </div>
                            </div><!-- /.navbar-collapse -->
                        </li>
                    </ul>
                    </div>
            </nav>

        </div>

        <!-- Main Content -->
        <div class="container-fluid">
            <div class="side-body">
                @yield('content')

            </div>
        </div>
    </div>

    {{--<footer>--}}
        {{--<div class="row-fluid" id="footer">--}}
            {{--<div class="container">--}}
                {{--<div class="col-xs-12 col-sm-5">--}}
                    {{--<h4>Vision</h4> <p>To create an enduring, people-centered partnership, founded on basis of trust and respect, which has been earned through cultivating a consistent delivery of superior services, to a worldwide base of customers, creating a Global reach, with a Local Touch.</p>--}}
                    {{--<p class="copy"><a href="index.php"><img src="images/logo.png" id="footer-logo" class="img-responsive hidden-xs" alt="dsd trucking" width="50"></a>&copy; Copyright 2015 DSD Trucking</p>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="row">--}}
                        {{--<h4>CFS, Intermodal, CCSF, Trucking &amp; Bonded Warehouse</h4>--}}
                        {{--<address>--}}
                            {{--<p>2411 Santa Fe Ave.</p>--}}
                            {{--<p>Redondo Beach, CA 90278</p>--}}
                            {{--<p><strong>Operating 24/7</strong></p>--}}
                            {{--<!--<p><i class="fa fa-phone 2x"></i> <a href="tel:+13107251999">310-725-1999</a></p>--}}
                            {{--<p><i class="fa fa-print"></i> <a href="tel:+13107251996">310-725-1996</a></p>-->--}}
                        {{--</address>--}}
                    {{--</div>--}}

                    {{--<div class="row">--}}
                        {{--<h4>Corporate &amp; Distribution Center</h4>--}}
                        {{--<address>--}}
                            {{--<p>8820 Bellanca Ave.</p>--}}
                            {{--<p>Los Angeles, CA 90045</p>--}}

                            {{--<p><strong>M-F</strong> 8am-10pm</p>--}}
                            {{--<!--<p><i class="fa fa-phone 2x"></i> <a href="tel:+13103383395">310-338-3395</a></p>--}}
                            {{--<p><i class="fa fa-print"></i> <a href="tel:+13103384177">310-338-4177</a></p>-->--}}
                        {{--</address>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-3">--}}
                    {{--<div class="row">--}}
                        {{--<p id="footer-contact">If you have any questions, please visit our <a href="faq.php">FAQ</a> page. You may also send DSD a message by visiting our <a href="contact.php">contact page</a>.</p>--}}
                        {{--<!--<div class="btn btn-warning"><a href="#footer-contact" data-toggle="modal">Contact DSD</a></div>-->--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<h4 class="no-margin-bottom">Social</h4>--}}
                        {{--<a href="https://www.facebook.com/profile.php?id=100010145826646" target="_blank"><i class="col-xs-3 col-xs-offset-2 col-sm-offset-0 fa fa-facebook-square"></i></a><a href="https://twitter.com/dsdcompanies" target="_blank"><i class="col-xs-3 fa fa-twitter"></i></a>--}}
                        {{--<a href="https://plus.google.com/+Dsdcompanies2411" target="_blank"><i class="col-xs-3 fa fa-google-plus"></i></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</footer>--}}


    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<script type="application/javascript">
    $(function () {
        $('.navbar-toggle').click(function () {
            $('.navbar-nav').toggleClass('slide-in');
            $('.side-body').toggleClass('body-slide-in');
            $('#search').removeClass('in').addClass('collapse').slideUp(200);

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').toggleClass('slide-in');

        });

        // Remove menu for searching
        $('#search-trigger').click(function () {
            $('.navbar-nav').removeClass('slide-in');
            $('.side-body').removeClass('body-slide-in');

            /// uncomment code for absolute positioning tweek see top comment in css
            //$('.absolute-wrapper').removeClass('slide-in');

        });
    });
</script>
</body>
</html>
