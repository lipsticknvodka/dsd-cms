<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">

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
                            <div class="step"> <div class="glyphicon glyphicon-home"></div><span>House</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-sm-offset-3 hidden-xs">
                            @include('errors.list')
                        </div>

                        <div class="visible-xs">
                            @include('errors.list')
                        </div>

                        {!! Form::model($cfs) !!}


                        <h4 class="col-xs-12">Master</h4>
                        {{--<div class='col-sm-6'>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class='input-group date' id='datetimepicker1'>--}}
                                    {{--<input type='text' class="form-control" />--}}
                                    {{--<span class="input-group-addon">--}}
                        {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                    {{--</span>--}}
                                {{--</div>--}}

                        <div class="row">
                                <div class="form-group col-xs-6 col-sm-3">
                                    {!! Form::label('arrival_date','Arrival at DSD')  !!}
                                    {!! Form::text('arrival_date', null, ['class'=>'date form-control']) !!}

                                </div>

                                <div class="form-group col-xs-6 col-sm-3">
                                    {!! Form::label('arrival_time','Time')  !!}
                                    {!! Form::text('arrival_time', null, ['placeholder'=>'12:00 AM', 'class'=>'form-control em-time-input em-time-single']) !!}

                                </div>

                                <div class="form-group col-xs-6 col-sm-3">
                                    {!! Form::label('last_free_day','LFD')  !!}
                                    {!! Form::text('last_free_day', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-6 col-sm-3">
                                    {!! Form::label('general_order','GO')  !!}
                                    {!! Form::text('general_order', null, ['class'=>'date form-control']) !!}
                                </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                {!! Form::label('availability','Status')  !!}
                                {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not Ready for pick up' => 'Not Ready for pick up', 'Cargo Has been picked up' => 'Cargo Has been picked up'], null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                {!! Form::label('est_avail_date','Availability Date')  !!}
                                {!! Form::text('est_avail_date', null, ['class'=>'date form-control']) !!}

                            </div>

                            <div class="form-group col-xs-6 col-sm-3">
                                {!! Form::label('est_avail_time','Time')  !!}
                                {!! Form::text('est_avail_time', null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-4">
                                {!! Form::label('us_customs_code','US Customs Code')  !!}
                                {!! Form::select('us_customs_code', [''=>'Select Customs Code','Cleared' => '1C / 1D - CLEARED', 'hold' => 'HOLD / NO 1C'], null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-xs-6 col-sm-2">
                                {!! Form::label('piece_ct','Pieces')  !!}
                                {!! Form::text('piece_ct', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-xs-6 col-sm-2">
                                {!! Form::label('pallet_ct','Pallets')  !!}
                                {!! Form::text('pallet_ct', null, ['class'=>'form-control']) !!}
                            </div>
                            {{--<div class="row-fluid">--}}
                            <div class="form-group col-xs-6 col-sm-2">
                                {!! Form::label('master_weight','Weight')  !!}
                                {!! Form::text('master_weight', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-xs-6 col-sm-2">
                                {!! Form::label('master_weight_type','Type')  !!}
                                {!! Form::select('master_weight_type', ['lb' => 'lb', 'kg' => 'kg'], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            {{--<div class="col-sm-6">--}}
                            <div class="form-group col-xs-6 col-sm-3">
                                {!! Form::label('pick_up_date','Pick Up Date')  !!}
                                {!! Form::text('pick_up_date', null, ['class'=>'date form-control']) !!}

                            </div>

                                <div class="form-group col-xs-6 col-sm-3">
                                    {!! Form::label('pick_up_time','Time')  !!}
                                    {!! Form::text('pick_up_time', null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}

                                </div>
                            <div class="form-group col-xs-12 col-sm-3">
                                {!! Form::label('master_driver','Driver Name')  !!}
                                {!! Form::text('master_driver', null, ['class'=>'form-control']) !!}
                            </div>
                                <div class="form-group col-xs-12 col-sm-3">
                                    {!! Form::label('master_company','Company Name')  !!}
                                    {!! Form::text('master_company', null, ['class'=>'form-control']) !!}
                                </div>
                            <div class="col-xs-12">
                                <div class="input-group-md pull-right">
                                    <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </div>
                        </div>



                            </div>
                        </div>


                        {!! Form::close() !!}


                                                </div>
                                            </div>
@endsection
