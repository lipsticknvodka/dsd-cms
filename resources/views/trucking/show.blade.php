@extends('layouts.app')

@section('content')

    <style>

        #exception_list_single{

            display:-webkit-inline-box;
            text-align: left;
        }


    </style>


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Trucking Delivery Details</div>

                    <div class="panel-body">

                        <div class="row">
                            {{--<h3 class="col-xs-12">{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected"}}</h3>--}}
                            <h3 class="col-xs-12"><strong>Load No.</strong> {{$truckingDelivery->ref_no}}</h3>
                            <h4 class="col-xs-12"><strong>MAWB</strong> {{$truckingDelivery->mawb}} | <strong>HAWB</strong> {{$truckingDelivery->hawb}}</h4>

                            <div class="col-sm-8">
                                <div class="col-xs-6">

                                     <h4>{{$truckingDelivery->trans_type}}</h4>
                                     <p><strong>Received</strong> {{$truckingDelivery->received_date}} @ {{$truckingDelivery->received_time}}</p>

                                    {{--<h4>Cargo Status</h4>--}}

                                    {{--@if(!empty($truckingDelivery->pick_up_date))--}}
                                        {{--<p><strong>Picked up on</strong> {{$truckingDelivery->pick_up_date}}</p>--}}
                                     {{--@endif--}}

                                    {{--@if(!empty($truckingDelivery->at_dsd_date))--}}
                                        {{--<p><strong>At DSD on</strong> {{$truckingDelivery->at_dsd_date}}</p>--}}
                                    {{--@endif--}}

                                    {{--@if(!empty($truckingDelivery->out_for_delivery_date))--}}
                                        {{--<p><strong>Out for delivery on</strong> {{$truckingDelivery->out_for_delivery_date}}</p>--}}
                                    {{--@endif--}}
                                </div>

                                    <div class="col-xs-6">

                                    @if($truckingDelivery->availability == "Closed")
                                        <h4>Transaction <strong><span class="closed">{{$truckingDelivery->availability}}</span></strong></h4>

                                        <p><strong>Signed By </strong>{{$truckingDelivery->received_by}}</p>
                                        <p><strong>Transaction Closed </strong>{{$truckingDelivery->trans_closed_date}} @ {{$truckingDelivery->trans_closed_time}}</p>
                                        @if($truckingDelivery->pod)
                                            <div class="row">
                                                <form class="col-xs-2" method="POST" action="/pod/{{$truckingDelivery->pod->id}}">

                                                    {!! csrf_field() !!}

                                                    <input type="hidden" name="_method" value="DELETE">

                                                    <button type="submit" class="fa fa-times pull-left" id="deleteFileButton"></button>
                                                </form>

                                                <a class="col-xs-10" href="{{$truckingDelivery->pod->path}}" target="_blank">View POD</a>
                                            </div>
                                        @endif
                                    @else
                                        <h4>Transaction <strong><span class="Open">{{$truckingDelivery->availability}}</span></strong></h4>
                                    @endif
                                    <p><strong>Driver </strong> {{ $truckingDelivery->driver}}</p>
                                </div>

                            </div>

                            <hr/>
                            <div class="col-xs-12 col-sm-4">
                                <h4>Cargo Status</h4>
                                <h5>{{$truckingDelivery->cargo_status}}</h5>

                                <hr class="hidden-xs"/>

                                @if(!empty($truckingDelivery->pick_up_date))
                                    <p><strong>Picked up on</strong> {{$truckingDelivery->pick_up_date}}</p>
                                @endif

                                @if(!empty($truckingDelivery->at_dsd_date))
                                    <p><strong>At DSD on</strong> {{$truckingDelivery->at_dsd_date}}</p>
                                @endif

                                @if(!empty($truckingDelivery->out_for_delivery_date))
                                    <p><strong>Out for delivery on</strong> {{$truckingDelivery->out_for_delivery_date}}</p>
                                @endif
                            </div>

                            {{--<div class="col-xs-4">--}}

                               {{--<h4>Shipper Details</h4>--}}
                                {{--<h4>{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected"}}</h4>--}}
                                {{--<h4>{{$truckingDelivery->shipper_name}}</h4>--}}

                                {{--<p>{{$truckingDelivery->shipper_address_1}}</p>--}}
                                {{--@if($truckingDelivery->shipper_address_2)--}}
                                    {{--<p>{{$truckingDelivery->shipper_address_2}}</p>--}}
                                {{--@endif--}}
                                {{--<p>{{$truckingDelivery->shipper_city}}, {{$truckingDelivery->shipper_state}} {{$truckingDelivery->shipper_zip}}</p>--}}
                                {{--@if($truckingDelivery->shipper_contact)--}}
                                    {{--<p><strong>Contact</strong> {{$truckingDelivery->shipper_contact}} | {{$truckingDelivery->shipper_phone}}</p>--}}
                                {{--@endif--}}


{{--                                {{$exception->path}}--}}
                                {{--@if($truckingDelivery->exception)--}}
                                    {{--<div class="row">--}}
                                        {{--<form method="POST" action="/exception/{{$truckingDelivery->exception->id}}">--}}

                                            {{--{!! csrf_field() !!}--}}

                                            {{--<input type="hidden" name="_method" value="DELETE">--}}

                                            {{--<button type="submit" class="fa fa-times pull-left" id="deleteFileButton"></button>--}}
                                        {{--</form>--}}

                                        {{--<a class="col-xs-10" href="{{$truckingDelivery->exception->path}}" target="_blank">View Exception</a>--}}
                                    {{--</div>--}}

                                {{--@endif--}}
                                {{--<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>--}}
                                {{--<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>--}}
                                {{--<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>--}}


                            {{--</div>--}}
                        </div>

                        <hr/>


                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Shipper Details</h3>
                                        <h4>{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected"}}</h4>
{{--                                        <h4>{{$truckingDelivery->shipper_name}}</h4>--}}

                                        <p>{{$truckingDelivery->shipper_address_1}}</p>
                                        @if($truckingDelivery->shipper_address_2)
                                            <h5><strong>Apt/Suite No. </strong>{{$truckingDelivery->shipper_address_2}}</h5>
                                        @endif
                                        <p>{{$truckingDelivery->shipper_city}}, {{$truckingDelivery->shipper_state}} {{$truckingDelivery->shipper_zip}}</p>
                                        @if($truckingDelivery->shipper_contact)
                                            <p><strong>Contact</strong> {{$truckingDelivery->shipper_contact}} | {{$truckingDelivery->shipper_phone}}</p>
                                        @endif
                            </div>

                            <div class="col-sm-4">
                                <h3>Destination Details</h3>
                                <p>{{$truckingDelivery->destination_address_1}}</p>
                                @if($truckingDelivery->destination_address_2)
                                    <p>{{$truckingDelivery->destination_address_2}}</p>
                                @endif
                                <p>{{$truckingDelivery->destination_city}}, {{$truckingDelivery->destination_state}} {{$truckingDelivery->destination_zip}}</p>
                            </div>

                            <div class="col-sm-4">
                                @if($truckingDelivery->location_address_1)
                                    <h3>Cargo Location</h3>
                                    <p>{{$truckingDelivery->location_address_1}}</p>
                                    @if($truckingDelivery->location_address_2)
                                        <h5><strong>Apt/Suite No. </strong>{{$truckingDelivery->location_address_2}}</h5>
                                    @endif
                                    <p>{{$truckingDelivery->location_city}}, {{$truckingDelivery->location_state}} {{$truckingDelivery->location_zip}}</p>
                                @endif

                            </div>
                    </div>

                        <hr/>

                        <div class="row">

                            <div class="col-sm-4">
                                <h3>Pallet Breakdown</h3>
                                <p><strong>Exchange </strong> {{ $truckingDelivery->exchange_pallet_qty ? $truckingDelivery->exchange_pallet_qty :0}} | <strong>Shipper </strong> {{$truckingDelivery->shipper_pallet_qty ? $truckingDelivery->shipper_pallet_qty : 0}}</p>

                                <p><strong>Piece Count </strong>{{$truckingDelivery->piece_ct}}</p>

                                <p><strong>Weight </strong>{{$truckingDelivery->weight_no}} {{$truckingDelivery->weight_type}}</p>

                            </div>

                            <div class="col-sm-4">
                                <h3>O/S/D</h3>
                                <p>{{$truckingDelivery->overs_shorts_damages}}</p>
                            </div>

                            <div class="col-sm-4">
                                <h3>Exception</h3>

                                @if($truckingDelivery->exception)
                                    <div class="row">
                                        <form class="col-xs-2" method="POST" action="/exception/{{$truckingDelivery->exception->id}}">

                                            {!! csrf_field() !!}

                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="fa fa-times pull-left" id="deleteFileButton"></button>
                                        </form>

                                        <a class="col-xs-10" href="{{$truckingDelivery->exception->path}}" target="_blank">View Exception</a>
                                    </div>
                               @else
                                <p>No exception uploaded.</p>
                                @endif


                            </div>
                    </div>
                        <hr/>

{{--@endforeach--}}

                        {{--<hr/> --}}

                        <div class="row gallery">
                            <h3 class="col-xs-12">Photos</h3>

                            @if (count($truckingDelivery->photos))

                                <ul>
                                    @foreach($truckingDelivery->photos->chunk(5) as $set)
                                            <div class="row">
                                                @foreach($set as $photo)
                                                    <div class="col-xs-6 col-md-3">
                                                        <form method="POST" action="/photo/{{$photo->id}}">

                                                            {!! csrf_field() !!}

                                                            <input type="hidden" name="_method" value="DELETE">

                                                            <button type="submit" class="fa fa-times pull-left" id="deleteFileButton"></button>
                                                        </form>

                                                        <a href="{{$photo->path}}"  data-lightbox="air-freight">
                                                            <img src="{{$photo->thumbnail_path}}" class="img-thumbnail" alt="{{$photo->name}}">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                    @endforeach
                                </ul>
                            @else
                                <p class="col-xs-12">No photos uploaded.</p>
                            @endif
                        </div>

                        <hr/>

                        {{--<div class="row">--}}
                            {{--<h3 class="col-xs-12">Exception</h3>--}}
                            {{--@if ($truckingDelivery->exception)--}}
                                {{--<ul>--}}
                                    {{--{{ ($truckingDelivery->exception->path or 'No exceptions uploaded.') }}--}}
                                    {{--@foreach($truckingDelivery->exception as $set)--}}
                                        {{--<div class="row">--}}
                                            {{--@foreach($set as $exception)--}}
                                                {{--<div class="col-xs-6 col-md-3">--}}
                                                    {{--<form method="POST" action="/exception/{{$exception->id}}">--}}

                                                        {{--{!! csrf_field() !!}--}}

                                                        {{--<input type="hidden" name="_method" value="DELETE">--}}

                                                        {{--<button type="submit" class="fa fa-times pull-right" id="deleteFileButton"></button>--}}
                                                    {{--</form>--}}
                                                    {{--{{$truckingDelivery->exception->path}}--}}
                                                    {{--<a href="{{$exception->path}}" target="_blank">--}}
                                                        {{--{{$exception->path}}--}}
                                                    {{--</a>--}}
                                                {{--</div>--}}
                                            {{--@endforeach--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}

                                {{--</ul>--}}

                            {{--@endif--}}

                        {{--</div>--}}

                        {{--<div class="input-group-md pull-right">--}}
                            {{--<a id="back-btn" class="btn btn-warning" href="/trucking/{{ $truckingDelivery->id }}/edit">Edit</a>--}}


                            {{--{{ Form::open(['method' => 'DELETE', 'route' => ['trucking.destroy', $truckingDelivery->id]]) }}--}}
                            {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
                            {{--{{ Form::close() }}--}}
                        {{--</div>--}}

                            <div class="input-group-md pull-right">
                                <a href="/trucking/{{ $truckingDelivery->id }}/edit" class="btn btn-danger">Edit</a>

                                {{ Form::open(['method' => 'DELETE', 'route' => ['trucking.destroy', $truckingDelivery->id]]) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection