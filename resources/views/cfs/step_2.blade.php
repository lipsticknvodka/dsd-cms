<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Master</span> </div>
                            <div class="step"> <div class="glyphicon glyphicon-home"></div><span>House</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($cfs) !!}


                        <h4 class="col-xs-12">Master Level</h4>
                        {{--<div class='col-sm-6'>--}}
                            {{--<div class="form-group">--}}
                                {{--<div class='input-group date' id='datetimepicker1'>--}}
                                    {{--<input type='text' class="form-control" />--}}
                                    {{--<span class="input-group-addon">--}}
                        {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                    {{--</span>--}}
                                {{--</div>--}}

                        <div class="row">
                                <div class="form-group col-xs-3">
                                    {!! Form::label('arrival_date','Arrival at DSD')  !!}
                                    {!! Form::text('arrival_date', null, ['class'=>'date form-control']) !!}

                                </div>

                                <div class="form-group col-xs-3">
                                    {!! Form::label('arrival_time','Time')  !!}
                                    {!! Form::select('arrival_time',array(

                                            '12:00am'=>'12:00 am',
                                            '12:30am'=>'12:30 am',
                                            '1:00am'=>'1:00 am',
                                            '1:30am'=>'1:30 am',
                                            '2:00am'=>'2:00 am',
                                            '2:30am'=>'2:30 am',
                                            '3:00am'=>'3:00 am',
                                            '3:30am'=>'3:30 am',
                                            '4:00am'=>'4:00 am',
                                            '4:30am'=>'4:30 am',
                                            '5:00am'=>'5:00 am',
                                            '5:30am'=>'5:30 am',
                                            '6:00am'=>'6:00 am',
                                            '6:30am'=>'6:30 am',
                                            '7:00am'=>'7:00 am',
                                            '7:30am'=>'7:30 am',
                                            '8:00am'=>'8:00 am',
                                            '8:30am'=>'8:30 am',
                                            '9:00am'=>'9:00 am',
                                            '9:30am'=>'9:30 am',
                                            '10:00am'=>'10:00 am',
                                            '10:30am'=>'10:30 am',
                                            '11:00am'=>'11:00 am',
                                            '11:30am'=>'11:30 am',
                                            '12:00pm'=>'12:00 pm',
                                            '12:30pm'=>'12:30 pm',
                                            '1:00pm'=>'1:00 pm',
                                            '1:30pm'=>'1:30 pm',
                                            '2:00pm'=>'2:00 pm',
                                            '2:30pm'=>'2:30 pm',
                                            '3:00pm'=>'3:00 pm',
                                            '3:30pm'=>'3:30 pm',
                                            '4:00pm'=>'4:00 pm',
                                            '4:30pm'=>'4:30 pm',
                                            '5:00pm'=>'5:00 pm',
                                            '5:30pm'=>'5:30 pm',
                                            '6:00pm'=>'6:00 pm',
                                            '6:30pm'=>'6:30 pm',
                                            '7:00pm'=>'7:00 pm',
                                            '7:30pm'=>'7:30 pm',
                                            '8:00pm'=>'8:00 pm',
                                            '8:30pm'=>'8:30 pm',
                                            '9:00pm'=>'9:00 pm',
                                            '9:30pm'=>'9:30 pm',
                                            '10:00pm'=>'10:00 pm',
                                            '10:30pm'=>'10:30 pm',
                                            '11:00pm'=>'11:00 pm',
                                            '11:30pm'=>'11:30 pm',

                                ),null, ['class'=>'form-control col-xs-6'])
                                 !!}
                                </div>

                                <div class="form-group col-xs-3">
                                    {!! Form::label('last_free_day','LFD')  !!}
                                    {!! Form::text('last_free_day', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-3">
                                    {!! Form::label('general_order','GO')  !!}
                                    {!! Form::text('general_order', null, ['class'=>'date form-control']) !!}
                                </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                {!! Form::label('availability','Status')  !!}
                                {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not Ready for pick up' => 'Not Ready for pick up'], null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="col-xs-6 col-sm-3">
                                {!! Form::label('est_avail_date','Estimated Availability')  !!}
                                {!! Form::text('est_avail_date', null, ['class'=>'date form-control']) !!}

                            </div>

                            <div class="form-group col-xs-6 col-sm-3">
                                {!! Form::label('est_avail_time','Time')  !!}
                                {!! Form::select('est_avail_time',array(

                                    '12:00am'=>'12:00 am',
                                    '12:30am'=>'12:30 am',
                                    '1:00am'=>'1:00 am',
                                    '1:30am'=>'1:30 am',
                                    '2:00am'=>'2:00 am',
                                    '2:30am'=>'2:30 am',
                                    '3:00am'=>'3:00 am',
                                    '3:30am'=>'3:30 am',
                                    '4:00am'=>'4:00 am',
                                    '4:30am'=>'4:30 am',
                                    '5:00am'=>'5:00 am',
                                    '5:30am'=>'5:30 am',
                                    '6:00am'=>'6:00 am',
                                    '6:30am'=>'6:30 am',
                                    '7:00am'=>'7:00 am',
                                    '7:30am'=>'7:30 am',
                                    '8:00am'=>'8:00 am',
                                    '8:30am'=>'8:30 am',
                                    '9:00am'=>'9:00 am',
                                    '9:30am'=>'9:30 am',
                                    '10:00am'=>'10:00 am',
                                    '10:30am'=>'10:30 am',
                                    '11:00am'=>'11:00 am',
                                    '11:30am'=>'11:30 am',
                                    '12:00pm'=>'12:00 pm',
                                    '12:30pm'=>'12:30 pm',
                                    '1:00pm'=>'1:00 pm',
                                    '1:30pm'=>'1:30 pm',
                                    '2:00pm'=>'2:00 pm',
                                    '2:30pm'=>'2:30 pm',
                                    '3:00pm'=>'3:00 pm',
                                    '3:30pm'=>'3:30 pm',
                                    '4:00pm'=>'4:00 pm',
                                    '4:30pm'=>'4:30 pm',
                                    '5:00pm'=>'5:00 pm',
                                    '5:30pm'=>'5:30 pm',
                                    '6:00pm'=>'6:00 pm',
                                    '6:30pm'=>'6:30 pm',
                                    '7:00pm'=>'7:00 pm',
                                    '7:30pm'=>'7:30 pm',
                                    '8:00pm'=>'8:00 pm',
                                    '8:30pm'=>'8:30 pm',
                                    '9:00pm'=>'9:00 pm',
                                    '9:30pm'=>'9:30 pm',
                                    '10:00pm'=>'10:00 pm',
                                    '10:30pm'=>'10:30 pm',
                                    '11:00pm'=>'11:00 pm',
                                    '11:30pm'=>'11:30 pm',

                        ),null, ['class'=>'form-control col-xs-6'])
                         !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                {!! Form::label('us_customs_code','US Customs Code')  !!}
                                {!! Form::select('us_customs_code', ['Cleared' => '1C / 1D - CLEARED', 'hold' => 'HOLD / NO 1C'], null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group col-xs-2">
                                {!! Form::label('pallet_ct','Pallet Count')  !!}
                                {!! Form::text('pallet_ct', null, ['class'=>'form-control']) !!}
                            </div>
                            {{--<div class="row-fluid">--}}
                            <div class="form-group col-xs-2">
                                {!! Form::label('master_weight','Weight')  !!}
                                {!! Form::text('master_weight', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group col-xs-2">
                                {!! Form::label('master_weight_type','Type')  !!}
                                {!! Form::select('master_weight_type', ['lb' => 'lb', 'kg' => 'kg'], null, ['class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group col-xs-6">
                                {!! Form::label('pick_up_date','Pick Up')  !!}
                                {!! Form::text('pick_up_date', null, ['class'=>'date form-control']) !!}

                            </div>

                                <div class="form-group col-xs-6">
                                    {!! Form::label('pick_up_time','Time')  !!}
                                    {!! Form::select('pick_up_time',array(

                                             '12:00am'=>'12:00 am',
                                             '12:30am'=>'12:30 am',
                                             '1:00am'=>'1:00 am',
                                             '1:30am'=>'1:30 am',
                                             '2:00am'=>'2:00 am',
                                             '2:30am'=>'2:30 am',
                                             '3:00am'=>'3:00 am',
                                             '3:30am'=>'3:30 am',
                                             '4:00am'=>'4:00 am',
                                             '4:30am'=>'4:30 am',
                                             '5:00am'=>'5:00 am',
                                             '5:30am'=>'5:30 am',
                                             '6:00am'=>'6:00 am',
                                             '6:30am'=>'6:30 am',
                                             '7:00am'=>'7:00 am',
                                             '7:30am'=>'7:30 am',
                                             '8:00am'=>'8:00 am',
                                             '8:30am'=>'8:30 am',
                                             '9:00am'=>'9:00 am',
                                             '9:30am'=>'9:30 am',
                                             '10:00am'=>'10:00 am',
                                             '10:30am'=>'10:30 am',
                                             '11:00am'=>'11:00 am',
                                             '11:30am'=>'11:30 am',
                                             '12:00pm'=>'12:00 pm',
                                             '12:30pm'=>'12:30 pm',
                                             '1:00pm'=>'1:00 pm',
                                             '1:30pm'=>'1:30 pm',
                                             '2:00pm'=>'2:00 pm',
                                             '2:30pm'=>'2:30 pm',
                                             '3:00pm'=>'3:00 pm',
                                             '3:30pm'=>'3:30 pm',
                                             '4:00pm'=>'4:00 pm',
                                             '4:30pm'=>'4:30 pm',
                                             '5:00pm'=>'5:00 pm',
                                             '5:30pm'=>'5:30 pm',
                                             '6:00pm'=>'6:00 pm',
                                             '6:30pm'=>'6:30 pm',
                                             '7:00pm'=>'7:00 pm',
                                             '7:30pm'=>'7:30 pm',
                                             '8:00pm'=>'8:00 pm',
                                             '8:30pm'=>'8:30 pm',
                                             '9:00pm'=>'9:00 pm',
                                             '9:30pm'=>'9:30 pm',
                                             '10:00pm'=>'10:00 pm',
                                             '10:30pm'=>'10:30 pm',
                                             '11:00pm'=>'11:00 pm',
                                             '11:30pm'=>'11:30 pm',

                                 ),null, ['class'=>'form-control col-xs-6'])
                                  !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
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
