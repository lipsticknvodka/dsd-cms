@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>CFS Search Results</h4>
            <ol class="breadcrumb">
                <li><a href="home">Home</a></li>
                <li><a href="freight-availability">Freight Availability </a></li>
                <li><a href="freight-availability/cfs">CFS </a></li>
                <li class="active">{{$cfsDelivery->mawb}}</li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default">

                            <div class="panel-heading">CFS Delivery Details</div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>MASTER</h3>

                                        <h4><strong>MAWB</strong> {{$cfsDelivery->mawb}}</h4>

                                        @if($cfsDelivery->status == "Closed")
                                            <h4>Transaction <strong><span class="closed">{{$cfsDelivery->status}}</span></strong></h4>
                                            {{--                                <p><strong>Company Name </strong>{{$cfsDelivery->co_name}}</p>--}}
                                            {{--<p><strong>Driver </strong>{{$cfsDelivery->driver}}</p>--}}
                                            {{--<p><strong>Transaction Closed </strong>{{$cfsDelivery->closed_date}} @ {{$cfsDelivery->close_time}}</p>--}}
                                        @else
                                            <h4>Transaction <strong><span class="Open">{{$hawb->status}}</span></strong></h4>
                                        @endif
                                        <p><strong>Availability</strong> {{$cfsDelivery->availability}}</p>
                                        <p><strong>Estimated Availability </strong>  {{$cfsDelivery->est_avail_date}} @ {{$cfsDelivery->est_avail_time}}</p>
                                        <hr/>
                                    </div>

                                    {{--<h3 class="col-xs-12">Master</h3>--}}
                                    <div class="col-xs-7">
                                        <p><strong>Account</strong> {{$cfsDelivery->account->name}} </p>
                                        {{--<p><strong>Estimated Availability </strong> {{$cfsDelivery->est_avail_time}}</p>--}}
                                        <p><strong>US Customs Code </strong> {{$cfsDelivery->us_customs_code}}</p>
                                        {{--<p><strong>Availability</strong> {{$cfsDelivery->availability}}</p>--}}
                                        {{--<p><strong>Received</strong> {{$truckingDelivery->received_date}} @ {{$truckingDelivery->received_time}}</p>--}}
                                        <p><strong>Pallet Count</strong> {{$cfsDelivery->pallet_ct}}</p>
                                        <p><strong>Weight</strong> {{$cfsDelivery->master_weight}} {{$cfsDelivery->master_weight_type}}</p>
                                    </div>

                                    <div class="col-xs-5">
                                        <p><strong>Arrival at DSD</strong> {{$cfsDelivery->arrival_date}} @ {{$cfsDelivery->arrival_time}}</p>
                                        <p><strong>Pick Up Date</strong> {{$cfsDelivery->pick_up_date}} @ {{$cfsDelivery->pick_up_time}}</p>
                                        <p><strong>Last Free Day</strong> {{$cfsDelivery->last_free_day}}</p>
                                        <p><strong>General Order</strong> {{$cfsDelivery->general_order}}</p>
                                    </div>
                                </div>

                                <hr/>



                                <div class="table-responsive">

                                    @if(!empty($cfsDelivery->hawbs))
                                        <h3>HOUSES</h3>
                                        @foreach($cfsDelivery->hawbs as $hawb)

                                            <div class="row" id="{{$hawb->id}}">
                                                <div class="col-xs-1">
                                                    <form method="POST" action="/hawb/{{$hawb->id}}" class="col-xs-1">
                                                        {{--                                <form method="POST" action="{{route('deleteException')}}">--}}
                                                        {!! csrf_field() !!}

                                                        <input type="hidden" name="_method" value="DELETE">

                                                        <button type="submit" class="fa fa-times" id="deleteFileButton"></button>
                                                    </form>
                                                </div>

                                                <div class="col-xs-11">
                                                    <h4><strong>HAWB </strong>{{$hawb->hawb}}</h4>
                                                    @if($hawb->status == "Closed")
                                                        <h4>Transaction <strong><span class="closed">{{$hawb->status}}</span></strong> </h4>
                                                        <p>on {{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>
                                                        <p><strong>Company </strong>{{$hawb->co_name}}</p>
                                                        <p><strong>Driver </strong>{{$hawb->driver}}</p>
                                                        <p><strong>Transaction <span class="closed">Closed</span> </strong>{{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>
                                                    @else
                                                        <h4>Transaction <strong><span class="Open">{{$hawb->status}}</span></strong></h4>
                                                    @endif
                                                    <h4>{{$hawb->availability}}</h4>

                                                    <div class="row">
                                                        <div class="col-xs-7">
                                                            <p><strong>Weight</strong> {{$hawb->weight_no}} {{$hawb->weight_type}}</p>
                                                            <p><strong>Pallet Count</strong> {{$hawb->pallet_ct}}</p>
                                                            <p><strong>Piece Count</strong> {{$hawb->piece_ct}}</p>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <p><strong>Driver</strong> {{$hawb->driver_name}}</p>
                                                            <p><strong>Company </strong> {{$hawb->company_name}}</p>
                                                        </div>
                                                        {{--<div class="col-xs-4">--}}
                                                        {{--<p><strong>Closed</strong> {{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>--}}
                                                        {{--</div>--}}
                                                    </div>

                                                    <hr/>
                                                </div>
                                            </div>

                                        @endforeach


                                        {{--@else--}}

                                        {{--'No HAWBS entered.'--}}


                                    @endif


                                    {{--</div>--}}



                                    {{--<div class="btn-group-md pull-right">--}}
                                        {{--<a href="/cfs/{{ $cfsDelivery->id }}/edit" class="btn btn-danger">Edit</a>--}}
                                        {{--{{ Form::open(['method' => 'DELETE', 'route' => ['cfs.destroy', $cfsDelivery->id]]) }}--}}
                                        {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
                                        {{--{{ Form::close() }}--}}
                                    {{--</div>--}}

                                </div>

                            </div>

                        </div>

                </div>
            </div>
@endsection