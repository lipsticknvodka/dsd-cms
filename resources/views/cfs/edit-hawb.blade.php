@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
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

{{--                    {!! Form::model($hawb, ['method'=>'PATCH', 'route'=>['/cfs/editHawb/{$hawb->id}']]) !!}--}}
                    {!! Form::model($hawb, ['method'=>'POST', 'action'=>['CfsDeliveryController@updateHawb', $hawb->id]]) !!}

                    {{--                                                                {!! Form::model($hawb, ['action'=>'/cfs/{{$cfs->id}}/editHawb/{{$hawb->id}}', $hawb->id]) !!}--}}
                    {{--                    <form action="/cfs/{{$hawb->id}}/editHawb" method="POST">--}}
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
                        {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not ready for pick up' => 'Not ready for pick up', 'Cargo Has been picked up' => 'Cargo Has been picked up'], null, ['class'=>'form-control']) !!}
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
                   {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
    </div>





    <div id="editHawb" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit HAWB</h4>
                </div>
                <div class="modal-body">
                    {!! Form::model($hawb, ['method'=>'PATCH', 'url'=>['CfsDeliveryController@editHawb', $hawb->id]]) !!}
                    {{--                                                                {!! Form::model($hawb, ['action'=>'/cfs/{{$cfs->id}}/editHawb/{{$hawb->id}}', $hawb->id]) !!}--}}
                    {{--                    <form action="/cfs/{{$hawb->id}}/editHawb" method="POST">--}}
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




