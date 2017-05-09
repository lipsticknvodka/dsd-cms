@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>CFS Search Results</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="freight-availability">Freight Availability </a></li>
                <li><a href="freight-availability/cfs">CFS </a></li>
                <li class="active">{{$cfsDelivery->mawb}}</li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="panel panel-default" id="content">

                            <div class="panel-heading">CFS Delivery Details</div>

                            <div class="panel-body">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-10">
                                            <h3>MASTER</h3>
                                            <h4><strong>MAWB</strong> {{$cfsDelivery->mawb}}</h4>
                                        </div>
                                        <div class="col-xs-2">
                                            @if($cfsDelivery->status == "Closed")
                                                <h3><strong><span class="closed">{{$cfsDelivery->status}}</span></strong></h3>
                                            @else
                                                <h3><strong><span class="Open">{{$cfsDelivery->status}}</span></strong></h3>
                                            @endif</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4><strong>Availability Status</strong></h4> <p>{{$cfsDelivery->availability ? $cfsDelivery->availability : 'No availability status entered.'}}</p>

                                            <hr />

                                            <h4><strong>Estimated Availability </strong></h4> <p>{{$cfsDelivery->est_avail_date ? $cfsDelivery->est_avail_date : 'No date entered.'}} {{$cfsDelivery->est_avail_time ? 'at '.$cfsDelivery->est_avail_time : ''}}</p>
                                        </div>

                                        <div class="col-sm-6">

                                            <h4><strong>Driver</strong> </h4><p>{{$cfsDelivery->master_driver ? $cfsDelivery->master_driver : 'No driver entered.'}}</p>

                                            <hr />

                                            <h4><strong>Company</strong> </h4><p>{{$cfsDelivery->master_company ? $cfsDelivery->master_company: 'No company entered.'}}</p>

                                            {{--</div>--}}
                                        </div>
                                    </div>
                                    <hr/>
                                    {{--<h3 class="col-xs-12">Master</h3>--}}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h4><strong>Account</strong></h4> <p>{{$cfsDelivery->account->name ? $cfsDelivery->account->name : 'No account selected'}} </p>
                                            {{--<p><strong>Estimated Availability </strong> {{$cfsDelivery->est_avail_time}}</p>--}}
                                            <hr />

                                            <h4><strong>US Customs Code </strong></h4> <p>{{$cfsDelivery->us_customs_code ? $cfsDelivery->us_customs_code : 'No code selected.'}}</p>
                                            {{--<p><strong>Availability</strong> {{$cfsDelivery->availability}}</p>--}}
                                            {{--<p><strong>Received</strong> {{$truckingDelivery->received_date}} @ {{$truckingDelivery->received_time}}</p>--}}
                                            <hr />

                                            <div class="row">
                                                <div class="col-xs-4"><h4><strong>Pallets</strong></h4> <p>{{$cfsDelivery->pallet_ct}}</p></div>

                                                <div class="col-xs-4"><h4><strong>Pieces</strong></h4> <p>{{$cfsDelivery->piece_ct}}</p></div>

                                                <div class="col-xs-4"><h4><strong>Weight</strong></h4> <p>{{$cfsDelivery->master_weight}}<small>{{$cfsDelivery->master_weight_type}}</small></p></div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <h4><strong>Arrival at DSD</strong></h4> <p>{{$cfsDelivery->arrival_date ?  $cfsDelivery->arrival_date : 'No arrival date entered.'}} {{$cfsDelivery->arrival_time ? 'at '.$cfsDelivery->arrival_time : ''}}</p>

                                            <hr />

                                            <h4><strong>Pick Up Date</strong></h4> <p>{{$cfsDelivery->pick_up_date ? $cfsDelivery->pick_up_date : 'No pick up date entered.'}}{{$cfsDelivery->pick_up_time ? ' at '.$cfsDelivery->pick_up_time : ''}}</p>

                                            <hr />

                                            <h4><strong>Last Free Day</strong></h4> <p>{{$cfsDelivery->last_free_day ? $cfsDelivery->last_free_day : 'No LFD entered.'}}</p>

                                            <hr />

                                            <h4><strong>General Order</strong></h4> <p>{{$cfsDelivery->general_order ? $cfsDelivery->general_order : 'No GO entered.'}}</p>
                                        </div>
                                    </div>
                                </div>

                                <hr/>

                                <h3>HOUSES</h3>
                                @if(!empty($cfsDelivery->hawbs))


                                    @if(count($cfsDelivery->hawbs))
                                        <div class="table-responsive">
                                            {{--<h4 class="col-xs-12">Houses</h4>--}}
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>HAWB</th>
                                                    <th>Pallets</th>
                                                    <th>Pieces</th>
                                                    <th>Weight</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cfsDelivery->hawbs as $hawb)
                                                    <tr>
                                                        <td><a data-toggle="collapse" data-target="#{{$hawb->id}}">{{$hawb->hawb}}</a></td>

                                                        <td>{{$hawb->pallet_ct}}</td>
                                                        <td>{{$hawb->piece_ct}}</td>
                                                        <td>{{$hawb->weight_no}} {{$hawb->weight_type}}</td>
                                                        <td>{{$hawb->status}}</td>
                                                        <td><small><a href="{{url('cfs/edit-hawb', $hawb->id)}}">Edit</a></small></td>
                                                        <td>
                                                            <small>
                                                                <form method="POST" action="/hawb/{{$hawb->id}}" >
                                                                    {!! csrf_field() !!}

                                                                    <input type="hidden" name="_method" value="DELETE">

                                                                    <input type="submit" class="deleteLink" value="Delete" >
                                                                </form>
                                                            </small>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <div id="{{$hawb->id}}" class="panel panel-hawb collapse hawb-more-info">
                                                            <div class="panel">
                                                                <div class="row">
                                                                    <h4 class="col-xs-10"><strong>HAWB</strong> {{$hawb->hawb}}</h4>
                                                                    <div class="col-xs-2">
                                                                        @if($hawb->status == "Closed")
                                                                            <h4><strong><span class="closed">{{$hawb->status}}</span></strong></h4>
                                                                            {{--                                <p><strong>Company Name </strong>{{$cfsDelivery->co_name}}</p>--}}
                                                                            {{--<p><strong>Driver </strong>{{$cfsDelivery->driver}}</p>--}}
                                                                            {{--<p><strong>Transaction Closed </strong>{{$cfsDelivery->closed_date}} @ {{$cfsDelivery->close_time}}</p>--}}
                                                                        @else
                                                                            <h4><strong><span class="Open">{{$hawb->status}}</span></strong></h4>
                                                                        @endif
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">


                                                                    {{--                                                            <p>{{$hawb->status}}</p>--}}
                                                                    {{--<hr />--}}

                                                                    <div class="row">

                                                                        <h4><strong>Availability Status</strong></h4> <p>{{$hawb->availability ? $hawb->availability : 'No availability status entered.'}}</p>

                                                                        <hr />

                                                                        <div class="row">
                                                                            <div class="col-xs-4"><h4><strong>Pallets </strong></h4><p>{{$hawb->pallet_ct}}</p></div>



                                                                            <div class="col-xs-4"><h4><strong>Pieces </strong></h4><p>{{$hawb->piece_ct}}</p></div>



                                                                            <div class="col-xs-4"><h4><strong>Weight </strong></h4><p>{{$hawb->weight_no}}<small>{{$hawb->weight_type}}</small></p></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">

                                                                    {{--<span class="pull-right clickable" data-effect="fadeOut" data-dismiss><i class="fa fa-times"></i></span>--}}


                                                                    <h4><strong>Company Name </strong></h4><p>{{$hawb->co_name ? $hawb->co_name : 'No company name entered.'}}</p>

                                                                    <hr />

                                                                    <h4><strong>Driver Name </strong></h4><p>{{$hawb->driver_name ? $hawb->driver_name : 'No driver name entered.'}}</p>

                                                                    <hr />

                                                                    <h4><strong>Pick Up </strong></h4><p>{{$hawb->pick_up_date ? $hawb->pick_up_date : 'No pick up date entered.'}} {{$hawb->pick_up_time ? 'at '.$hawb->pick_up_time : ''}}</p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p> No HAWBs entered.</p>
                                    @endif

                                @endif

                            </div>

                        </div>

                </div>
            </div>
@endsection