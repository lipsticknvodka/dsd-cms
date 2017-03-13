<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix">
                            <div class="step current"><div class="glyphicon glyphicon-list-alt"></div><span>Master Details</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list-alt"></div><span>Breakdown</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-home"></div><span>House Details</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($cfs) !!}



                        <div class="row-fluid">
                            <div class="col-sm-6">
                                <div class="form-group col-xs-12">
                                    {!! Form::label('us_customs_code','US Customs Code')  !!}
                                    {!! Form::select('us_customs_code', ['Cleared' => '1C / 1D - CLEARED', 'hold' => 'HOLD / NO 1C'], null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-xs-12">
                                    {!! Form::label('availability','Availability')  !!}
                                    {!! Form::select('availability', ['Ready for pick up' => 'Ready for pick up', 'Not Ready for pick up' => 'Not Ready for pick up'], null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>


                        <div class="row-fluid">
                            <div class="col-sm-6">
                                <div class="form-group col-xs-6">
                                    {!! Form::label('last_free_day','LFD')  !!}
                                    {!! Form::text('last_free_day', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-6">
                                    {!! Form::label('general_order','GO')  !!}
                                    {!! Form::text('general_order', null, ['class'=>'date form-control']) !!}
                                </div>
                            </div>

                        </div>

                        <div class="input-group-md pull-right">
                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>



                        {{--<div class="row">--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('arrival_date','Arrival Date')  !!}--}}
                            {{--{!! Form::text('arrival_date', null, ['class'=>'date form-control']) !!}--}}
                            {{--<input class="date form-control" style="width: 300px;" type="text">--}}
                        {{--</div>--}}




                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('availability','Availability')  !!}--}}
                            {{--{!! Form::select('availability', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}


                        {!! Form::close() !!}

                        {{--{!! Form::model($account) !!}--}}
                        {{--{!! Form::label('name', 'What is your name?') !!}<br>--}}
                        {{--{!! Form::text('name') !!}<br>--}}

                    </div>
                </div>
            </div>
        {{--</div>--}}
    </div>
@endsection




