@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New CFS Delivery</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix hidden-xs" id="three-arrows">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step"> <div class="glyphicon glyphicon-list"></div><span>Master</span> </div>
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

                        <div class="form-group col-xs-12 col-sm-8 col-sm-offset-2">
                            {!! Form::label('mawb','MAWB')  !!}
                            {!! Form::text('mawb', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group col-xs-12 col-sm-8 col-sm-offset-2">
                            {!! Form::label('account_id','Account')  !!}
{{--                            {{ Form::select('account_id', $account, old('account_id'), ['class' => 'form-control']) }}--}}
                            {{ Form::select('account_id', [''=>'Select account'] + $account, null,  ['class' => 'form-control']) }}
                        </div>

                        <div class=" col-sm-8 col-sm-offset-2">

                        <div class="row">
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('received_date','Received Date')  !!}
                                        {!! Form::text('received_date', null, ['class'=>'date form-control']) !!}
                                    </div>


                                    <div class="form-group col-xs-6">
                                        {!! Form::label('received_time','Time')  !!}
                                        {!! Form::text('received_time',  null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}
                                    </div>

                        </div>



                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-warning pull-right">Submit</button>

                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            {{--</div>--}}
        </div>
    </div>
@endsection

