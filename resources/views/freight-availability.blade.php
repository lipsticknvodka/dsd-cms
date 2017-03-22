@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>Freight Availability</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Freight Availability</li>
            </ol>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Search Freight Availability</div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#trucking-search">Trucking</a></li>
                            <li><a href="#cfs-search">CFS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="trucking-search" class="tab-pane fade in active">
                                <h3>Welcome to DSD Trucking Inc. Tracking</h3>
                                <p>We have designed  this free cargo tracking section in our website, it will allow you to see the progress of your shipments.  You can search your shipments by entering your reference number and/or load number as shown on your Delivery Order.  Once your shipment is completed you will be able to download a Proof of Delivery for your records. </p>


                                <form action="/freight-availability/trucking" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group col-xs-12">
                                    {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}

                                    {!! Form::label('truckingQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}
                                    <input type="text" class="form-control" name="truckingQuery"
                                    placeholder=" "> <span class="input-group-btn">
                                    <button type="submit" id='search' class="btn btn-warning">
                                    <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    </span>
                                    {{Form::close()}}
                                </div>
                                </form>

                                <p>If you would prefer to speak to our Dispatch Team about your shipment please contact DSD Trucking Division at the main number <a href="tel:+13107251999">310-725-1999</a>.</p>

                                {{--Display results--}}
                            </div>
                            <div id="cfs-search" class="tab-pane fade">
                                <h3>Welcome to DSD Container Freight Station Cargo Tracking!</h3>
                                <p>We have designed this free cargo tracking section in our website that will allow you to check the status of your shipments.  You can search your shipments by entering the Master number and/or HAWB number, please include all dashes and spaces as they appear on your manifest.</p>



                             {{--<div class="row">--}}
                                 {{--<div class="col-xs-6">--}}
                                     <form action="/freight-availability/cfs" method="POST" role="search">
                                         {{ csrf_field() }}
                                         <div class="input-group col-xs-12">
{{--                                             {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}--}}

                                             <div class="input-group">
                                             {!! Form::label('cfsQuery','Search by MAWB or HAWB')  !!}
                                             <input type="text" class="form-control" name="cfsQuery"
                                                    placeholder="">
                                                 {{--{!! Form::label('cfsQuery','Search by MAWB and/or HAWB')  !!}--}}
                                                 {{--<input type="text" class="form-control" name="cfsQuery2"--}}
                                                        {{--placeholder="xxx-xxxx xxxx, xxxxxxxxxxx, or xxxxxxxxxx">--}}
                                                 <span class="input-group-btn">
                                        <button type="submit" id='search' class="btn btn-warning">
                                        <span class="glyphicon glyphicon-search"></span>
                                        </button>
                                        </span>
                                             {{--</div>--}}
                                             {{Form::close()}}
                                         {{--</div>--}}
                                     {{--</form>--}}
                                                 <p>If you prefer to speak to one of our CFS representatives about your shipment please contact DSD Container Freight Station at <a href="tel:+13107251999">310-725-1999</a>.</p>
                                 </div>


                             {{--</div>--}}
                            </div>
                        </div>

                        {{--<form action="/search" method="POST" role="search">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="input-group">--}}
                                {{--{{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}--}}

                                {{--{!! Form::label('q','Search by MAWB, HAWB, or Reference/Load #')  !!}--}}
                                {{--<input type="text" class="form-control" name="q"--}}
                                               {{--placeholder="xxx-xxxx xxxx, xxxxxxxxxxx, or xxxxxxxxxx"> <span class="input-group-btn">--}}
                    {{--<button type="submit" id='search' class="btn btn-default">--}}
                        {{--<span class="glyphicon glyphicon-search"></span>--}}
                    {{--</button>--}}
        {{--</span>--}}
                                {{--{{Form::close()}}--}}
                            {{--</div>--}}
                        {{--</form>--}}

                        {{--Display results--}}


<hr/>
                        <small><strong>Terms & Conditions</strong></small><br/>
                        <small>You are authorized to use this tracking system solely to track your shipments.  No other use may be made of the tracking system and information without DSD Container Freight Station's written consent.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#myTab a").click(function(e){
                e.preventDefault();
                $(this).tab('show');
            });
        });
    </script>
@endsection
