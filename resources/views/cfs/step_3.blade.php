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

                        <div class="form-group col-xs-12 col-sm-6 col-sm-offset-3 hidden-xs">
                            @include('errors.list')
                        </div>

                        <div class="visible-xs">
                            @include('errors.list')
                        </div>

                        {!! Form::model($cfs) !!}



                        <div class="row-fluid">
                            {{--<div class="col-xs-12">--}}
                                <a href="#addHawb" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add HAWB</a>
                            {{--</div>--}}




                                    @if(!empty($cfs->hawbs))
                                        <h3>HOUSES</h3>

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
                                                <td>
                                                    <div id="{{$hawb->hawb}}" class="collapse">
                                                        Insert more info here
                                                    </div>
                                                </td>
                                            </tr>


                                        @endforeach

                                        </tbody>
                                            </table>
                                        </div>
                                        {{--@foreach($cfs->hawbs as $hawb)--}}

                                            {{--<div class="row" id="{{$hawb->id}}">--}}
                                                {{--<div class="col-xs-1">--}}
                                                    {{--<form method="POST" action="/hawb/{{$hawb->id}}" class="col-xs-1">--}}
                                                        {{--                                <form method="POST" action="{{route('deleteException')}}">--}}
                                                        {{--{!! csrf_field() !!}--}}

                                                        {{--<input type="hidden" name="_method" value="DELETE">--}}

                                                        {{--<button type="submit" class="fa fa-times" id="deleteFileButton"></button>--}}
                                                    {{--</form>--}}
                                                {{--</div>--}}

                                                {{--<div class="col-xs-11">--}}
                                                    {{--<h4><strong>HAWB </strong>{{$hawb->hawb}}</h4>--}}
                                                    {{--@if($hawb->status == "Closed")--}}
                                                        {{--<h4>Transaction <strong><span class="closed">{{$hawb->status}}</span></strong> </h4>--}}
                                                        {{--<p>on {{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>--}}
                                                        {{--<p><strong>Company </strong>{{$hawb->co_name}}</p>--}}
                                                        {{--<p><strong>Driver </strong>{{$hawb->driver}}</p>--}}
                                                        {{--<p><strong>Transaction <span class="closed">Closed</span> </strong>{{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>--}}
                                                    {{--@else--}}
                                                        {{--<h4>Transaction <strong><span class="Open">{{$hawb->status}}</span></strong></h4>--}}
                                                    {{--@endif--}}
                                                    {{--<h4>{{$hawb->availability}}</h4>--}}

                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-xs-7">--}}
                                                            {{--<p><strong>Weight</strong> {{$hawb->weight_no}} {{$hawb->weight_type}}</p>--}}
                                                            {{--<p><strong>Pallet Count</strong> {{$hawb->pallet_ct}}</p>--}}
                                                            {{--<p><strong>Piece Count</strong> {{$hawb->piece_ct}}</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-xs-5">--}}
                                                            {{--<p><strong>Driver</strong> {{$hawb->driver_name or 'No driver entered.'}}</p>--}}
                                                            {{--<p><strong>Company </strong> {{$hawb->company_name or 'No company entered.'}}</p>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-xs-4">--}}
                                                        {{--<p><strong>Closed</strong> {{$hawb->closed_date}} @ {{$hawb->closed_time}}</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}

                                                    {{--<hr/>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                        {{--@endforeach--}}
                                        @endif










                        <div class="input-group-md pull-right">
                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                            <button type="submit" class="btn btn-warning">Submit</button>
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




