@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Trucking Delivery Details</div>

                    <div class="panel-body">
                        <div class="row">
                            {{--<h3 class="col-xs-12">{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected"}}</h3>--}}
                            <h3 class="col-xs-12"><strong>Ref./Load No.</strong> {{$truckingDelivery->ref_no}}</h3>


                            <h4 class="col-xs-12"><strong>MAWB</strong> {{$truckingDelivery->mawb ? $truckingDelivery->mawb : 'No MAWB entered.'}} | <strong>HAWB</strong> {{$truckingDelivery->hawb ? $truckingDelivery->mawh : 'No HAWB entered.'}}</h4>

                            <div class="col-sm-4">

                                <h4><strong>Type </strong> </h4><p>{{$truckingDelivery->trans_type ? $truckingDelivery->trans_type : ' No transaction type selected.' }}</p>
                                <h4><strong>Received Date</strong></h4>
                                @if($truckingDelivery->received_date)
                                    <p>{{$truckingDelivery->received_date}} @ {{$truckingDelivery->received_time}}</p>
                                @else
                                    No received date entered.
                                @endif


                                <h4><strong>Signed By </strong></h4><p>{{$truckingDelivery->received_by ? $truckingDelivery->received_by : 'No signed by name entered.'}}</p>

                                <h4><strong>Driver </strong></h4> <p>{{ $truckingDelivery->driver ? $truckingDelivery->driver : 'No driver name entered.'}}</p>
                            </div>

                            <div class="col-sm-4">
                                <h4><strong>Cargo Status</strong></h4>
                                <h5>{{$truckingDelivery->cargo_status ? $truckingDelivery->cargo_status : 'No status available at this time.'}}</h5>

                                @if(!empty($truckingDelivery->pick_up_date))
                                    <hr class="hidden-xs"/>
                                    <h4><strong>Picked up on</strong></h4> <p>{{$truckingDelivery->pick_up_date }}</p>
                                    <hr/>
                                @endif

                                @if(!empty($truckingDelivery->at_dsd_date))
                                    <h4><strong>At DSD on</strong></h4><p>{{$truckingDelivery->at_dsd_date}}</>
                                    <hr/>
                                @endif

                                @if(!empty($truckingDelivery->out_for_delivery_date))
                                    <h4><strong>Out for delivery on</strong></h4> <p>{{$truckingDelivery->out_for_delivery_date}}</p>
                                    <hr/>
                                @endif
                            </div>


                            <div class="col-sm-4">
                                @if($truckingDelivery->availability == "Closed")
                                    <h4><strong><span class="closed">{{$truckingDelivery->availability}}</span></strong></h4>

                                    <p><strong>Transaction Closed </strong>{{$truckingDelivery->trans_closed_date}} @ {{$truckingDelivery->trans_closed_time}}</p>
                                @else

                                    <h4><strong><span class="Open">Open</span></strong></h4>
                                @endif


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

                            </div>

                            {{--<a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>--}}
                            {{--<a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>--}}
                            {{--<a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>--}}

                        </div>

                        <hr />

                        <div class="row">
                            <div class="col-sm-4">
                                <h3>Shipper Details</h3>
                                <p>{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected."}}</p>
                                {{--                                        <h4>{{$truckingDelivery->shipper_name}}</h4>--}}

                                <p>{{$truckingDelivery->shipper_address_1}}</p>
                                @if($truckingDelivery->shipper_address_2)
                                    <h5>{{$truckingDelivery->shipper_address_2}}</h5>
                                    <p>{{$truckingDelivery->shipper_city}}, {{$truckingDelivery->shipper_state}} {{$truckingDelivery->shipper_zip}}</p>
                                @else
                                    No shipper address entered.
                                @endif
                                @if($truckingDelivery->shipper_contact)
                                    <p><strong>Contact</strong> {{$truckingDelivery->shipper_contact}} | {{$truckingDelivery->shipper_phone}}</p>
                                @else
                                    No shipper contact entered.
                                @endif
                            </div>

                            <div class="col-sm-4">
                                <h3>Destination Details</h3>
                                <p>{{$truckingDelivery->destination_address_1}}</p>
                                @if($truckingDelivery->destination_address_2)
                                    <p>{{$truckingDelivery->destination_address_2}}</p>
                                    <p>{{$truckingDelivery->destination_city}}, {{$truckingDelivery->destination_state}} {{$truckingDelivery->destination_zip}}</p>
                                @else
                                    No destination address entered.

                                @endif
                            </div>

                            <div class="col-sm-4">
                                <h3>Cargo Location</h3>
                                @if($truckingDelivery->location_address_1)
                                    <p>{{$truckingDelivery->location_address_1}}</p>
                                    @if($truckingDelivery->location_address_2)
                                        <h5>{{$truckingDelivery->location_address_2}}</h5>
                                    @endif
                                    <p>{{$truckingDelivery->location_city}}, {{$truckingDelivery->location_state}} {{$truckingDelivery->location_zip}}</p>
                                @else
                                    No cargo location details entered.
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

                            <div class="col-xs-8">
                                <h3>Overs/Shorts/Damages</h3>
                                <p>{{$truckingDelivery->overs_shorts_damages ? $truckingDelivery->overs_shorts_damages : 'N/A'}}</p>
                            </div>


                        </div>

                        <hr/>



                        {{--<hr/>--}}

                        <div class="row gallery">
                            <h3 class="col-xs-12">Photos</h3>

                            @if (count($truckingDelivery->photos))

                                <ul>
                                    @foreach($truckingDelivery->photos->chunk(4) as $set)
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