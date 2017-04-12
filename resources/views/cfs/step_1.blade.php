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
                            {!! Form::label('account_id','Customer')  !!}
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
                                        {!! Form::select('received_time',array(

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

