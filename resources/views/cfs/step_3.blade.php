@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix" id="three-arrows">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Master</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-home"></div><span>House</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($cfs) !!}



                        <div class="row-fluid">
                            <div class="col-xs-12">
                                <a href="#addHawb" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add HAWB</a>
                            </div>


                            <div class="table-responsive">
                                <h4 class="col-xs-12">Houses</h4>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>HAWB</th>
                                        <th>Pallet Count</th>
                                        <th>Piece Count</th>
                                        <th>Weight</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cfs->hawbs as $hawb)
                                        <tr>
                                            <td><a data-toggle="collapse" data-target="#{{$hawb->hawb}}">{{$hawb->hawb}}</a></td>

                                            <td>{{$hawb->pallet_ct}}</td>
                                            <td>{{$hawb->piece_ct}}</td>
                                            <td>{{$hawb->weight_no}} {{$hawb->weight_type}}</td>
                                            <td></td>
                                            <div id="{{$hawb->hawb}}" class="collapse">
                                                Insert more info here
                                            </div>

                                        </tr>


                                    @endforeach


                                    </tbody>
                                </table>
                            </div>

                            </div>
                        </div>




                        <div class="input-group-md pull-right">
                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>



                        {!! Form::close() !!}

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
                                        <div class="form-group col-xs-4">
                                            {!! Form::label('closed_date','Closed Date')  !!}
                                            {!! Form::text('closed_date', null, ['class'=>'date form-control']) !!}
                                        </div>
                                        <div class="form-group col-xs-4">
                                            {!! Form::label('closed_time','Time')  !!}
                                            {!! Form::select('Closed',array(

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

                                        <div class="col-xs-12">
                                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
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





@endsection




