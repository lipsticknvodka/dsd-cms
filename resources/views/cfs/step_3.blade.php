<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Master</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-home"></div><span>House</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($cfs) !!}



                        <div class="row-fluid">



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

                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="#addHawb" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add HAWB</a>
                                </div>
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




