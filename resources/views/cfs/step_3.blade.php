@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix hidden-xs" id="three-arrows">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Master</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-home"></div><span>House</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        <div class="form-group row hidden-xs">
                            @include('errors.list')
                        </div>

                        <div class="visible-xs">
                            @include('errors.list')
                        </div>

                        {!! Form::model($cfs) !!}






                                    @if(!empty($cfs->hawbs))
                                        <h3>HOUSE LEVEL</h3>

                            @if(count($cfs->hawbs))
                                        <div class="table-responsive">
                                            {{--<h4 class="col-xs-12">Houses</h4>--}}
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>HAWB</th>
                                                    <th>Pallet Count</th>
                                                    <th>Piece Count</th>
                                                    <th>Weight</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                        @foreach($cfs->hawbs as $hawb)
                                            <tr>
                                                <td><a data-toggle="collapse" data-target="#{{$hawb->hawb}}">{{$hawb->hawb}}</a></td>

                                                <td>{{$hawb->pallet_ct}}</td>
                                                <td>{{$hawb->piece_ct}}</td>
                                                <td>{{$hawb->weight_no}} {{$hawb->weight_type}}</td>
                                                {{--<td><small><a href = "#editHawb" data-toggle="modal">Edit</a></small></td>--}}
                                            </tr>

                                            <tr>
                                                <div id="{{$hawb->hawb}}" class="collapse hawb-more-info">
                                                  <div class="row">
                                                    <div class="col-sm-6">
                                                        <h4>{{$hawb->hawb}}</h4>
                                                        <p>{{$hawb->status}}</p>
                                                        <p><strong>Pallet Count </strong>{{$hawb->pallet_ct}}</p>
                                                        <p><strong>Piece Count </strong>{{$hawb->piece_ct}}</p>
                                                        <p><strong>Weight </strong>{{$hawb->weight_no}}<small>{{$hawb->weight_type}}</small></p>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <h4>{{$hawb->availability}}</h4>
                                                        <p><strong>Company Name </strong>{{$hawb->co_name}}</p>
                                                        <p><strong>Driver Name </strong>{{$hawb->driver_name}}</p>
                                                        <p><strong>Pick Up </strong>{{$hawb->pick_up_date}} @ {{$hawb->pick_up_time}}</p>
                                                    </div>

                                               </div>
                                                    <hr />
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


                        <div class="col-xs-12">
                            {{--<div class="col-xs-12">--}}
                            <a href="#addHawb" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add HAWB</a>
                            <div class="input-group-md pull-right">
                                <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>










                        {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>


                <div id="addHawb" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add New HAWB</h4>
                            </div>
                            <div class="modal-body">
                                {{--                                            {!! Form::open(['action'=>'/cfs/{{$cfs->id}}/addHawb', $cfsDelivery->id]) !!}--}}
                                <form action="/cfs/{{$cfs->id}}/addHawb" method="POST">
                                    {{csrf_field()}}

                                    {{--<div class="row">--}}
                                    {{--<div class="row">--}}
                                    <div class="form-group col-xs-12">
                                        {!! Form::label('hawb','HAWB')  !!}
                                        {!! Form::text('hawb', null, ['class'=>'form-control']) !!}
                                    </div>
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                    <div class="form-group col-xs-3">
                                        {!! Form::label('weight','Weight')  !!}
                                        {!! Form::text('weight', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-xs-3">
                                        {!! Form::label('weight_type','')  !!}
                                        {{--{!! Form::text('weight_type', null, ['class'=>'form-control']) !!}--}}
                                        {{--                                                        {!! Form::select('weight_type', ['lb' => 'lb', 'kg' => 'kg'] , null, ['class'=>'form-control']) !!}--}}
                                        {!! Form::select('weight_type', ['lb' => 'lb', 'kg' => 'kg'], null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-xs-3">
                                        {!! Form::label('pallet_ct','Pallets')  !!}
                                        {!! Form::text('pallet_ct', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-xs-3">
                                        {!! Form::label('piece_ct','Pieces')  !!}
                                        {!! Form::text('piece_ct', null, ['class'=>'form-control']) !!}
                                    </div>
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                    <div class="form-group col-xs-12">
                                        {!! Form::label('availability','Availability')  !!}
                                        {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not ready for pick up' => 'Not ready for pick up'], null, ['class'=>'form-control']) !!}
                                    </div>
                                    {{--</div>--}}

                                    {{--<div class="row">--}}
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('co_name','Company Name')  !!}
                                        {!! Form::text('co_name', null, ['class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('driver_name','Driver Name')  !!}
                                        {!! Form::text('driver_name', null, ['class'=>'form-control']) !!}
                                    </div>
                                    {{--</div>--}}

                                    <div class="row">
                                        <div class="form-group col-xs-3" style="padding-left:30px;">
                                            {!! Form::label('closed_date','Closed Date')  !!}
                                            {!! Form::text('closed_date', null, ['class'=>'date form-control']) !!}
                                        </div>
                                        <div class="form-group col-xs-3">
                                            {!! Form::label('closed_time','Time')  !!}
                                            {!! Form::text('closed_time',  null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}

                                        </div>

                                        <div class="col-xs-6" style="padding-top: 35px;">
{{--                                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Close</a>--}}
                                            <button type="submit" class="btn btn-warning">Add HAWB</button>
                                        </div>
                                    </div>
                                        </form>
                                        {{--{!! Form::close() !!}--}}
                                        {{--<form action="{{ url('/closeHawb/' . $hawb->id) }}" method="POST">--}}
                                        {{--{!! csrf_field() !!}--}}
                                        {{--<button type="submit" class="btn btn-danger">Close</button>--}}
                                        {{--</form>--}}
                                        {{--<div class="col-xs-2">--}}
                                        {{--Add another HAWB--}}

                                    </div>


                </div>

            </div>

        {{--</div>--}}
    </div>



    <div id="editHawb" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit HAWB</h4>
                </div>
                <div class="modal-body">
                    {{--                                            {!! Form::open(['action'=>'/cfs/{{$cfs->id}}/addHawb', $cfsDelivery->id]) !!}--}}
                    <form action="/cfs/{{$hawb->id}}/editHawb" method="POST">
                        {{csrf_field()}}

                        {{--<div class="row">--}}
                        {{--<div class="row">--}}
                        <div class="form-group col-xs-12">
                            {!! Form::label('hawb','HAWB')  !!}
                            {!! Form::text('hawb', null, ['class'=>'form-control']) !!}
                        </div>
                        {{--</div>--}}

                        {{--<div class="row">--}}
                        <div class="form-group col-xs-3">
                            {!! Form::label('weight','Weight')  !!}
                            {!! Form::text('weight', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-3">
                            {!! Form::label('weight_type','')  !!}
                            {{--{!! Form::text('weight_type', null, ['class'=>'form-control']) !!}--}}
                            {{--                                                        {!! Form::select('weight_type', ['lb' => 'lb', 'kg' => 'kg'] , null, ['class'=>'form-control']) !!}--}}
                            {!! Form::select('weight_type', ['lb' => 'lb', 'kg' => 'kg'], null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-xs-3">
                            {!! Form::label('pallet_ct','Pallets')  !!}
                            {!! Form::text('pallet_ct', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-3">
                            {!! Form::label('piece_ct','Pieces')  !!}
                            {!! Form::text('piece_ct', null, ['class'=>'form-control']) !!}
                        </div>
                        {{--</div>--}}

                        {{--<div class="row">--}}
                        <div class="form-group col-xs-12">
                            {!! Form::label('availability','Availability')  !!}
                            {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not ready for pick up' => 'Not ready for pick up'], null, ['class'=>'form-control']) !!}
                        </div>
                        {{--</div>--}}

                        {{--<div class="row">--}}
                        <div class="form-group col-xs-6">
                            {!! Form::label('co_name','Company Name')  !!}
                            {!! Form::text('co_name', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group col-xs-6">
                            {!! Form::label('driver_name','Driver Name')  !!}
                            {!! Form::text('driver_name', null, ['class'=>'form-control']) !!}
                        </div>
                        {{--</div>--}}

                        <div class="row">
                            <div class="form-group col-xs-3" style="padding-left:30px;">
                                {!! Form::label('closed_date','Closed Date')  !!}
                                {!! Form::text('closed_date', null, ['class'=>'date form-control']) !!}
                            </div>
                            <div class="form-group col-xs-3">
                                {!! Form::label('closed_time','Time')  !!}
                                {!! Form::text('closed_time',  null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}

                            </div>

                            <div class="col-xs-6" style="padding-top: 35px;">
                                {{--                                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Close</a>--}}
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>
                        </div>
                    </form>
                    {{--{!! Form::close() !!}--}}
                    {{--<form action="{{ url('/closeHawb/' . $hawb->id) }}" method="POST">--}}
                    {{--{!! csrf_field() !!}--}}
                    {{--<button type="submit" class="btn btn-danger">Close</button>--}}
                    {{--</form>--}}
                    {{--<div class="col-xs-2">--}}
                    {{--Add another HAWB--}}

                </div>


            </div>

        </div>

        {{--</div>--}}
    </div>


@endsection




