@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Admin Search</div>

                    <div class="panel-body">
                        {{--<form action="/freight-availability/trucking" method="POST" role="search">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<div class="input-group col-xs-12">--}}
                                {{--{{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}--}}

                                {{--{!! Form::label('truckingQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}--}}
                                {{--<input type="text" class="form-control" name="truckingQuery"--}}
                                       {{--placeholder="{{$query}}"> <span class="input-group-btn">--}}
                                    {{--<button type="submit" id='search' class="btn btn-warning">--}}
                                    {{--<span class="glyphicon glyphicon-search"></span>--}}
                                    {{--</button>--}}
                                    {{--</span>--}}
                                {{--{{Form::close()}}--}}
                            {{--</div>--}}
                        {{--</form>--}}


                        @if(isset($details))
{{--                        @if(!empty($query))--}}
                            <p>Showing search results for <b> {{ $query }} </b> :</p>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>MAWB</th>
                                    <th>HAWB</th>
                                    <th>Ref/Load #</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $truckingDelivery)

                                    <tr>
                                        <td><a href="/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->mawb}}</a></td>
                                        <td>{{$truckingDelivery->hawb}}</td>
                                        <td>{{$truckingDelivery->ref_no}}</td>
                                        <td>{{$truckingDelivery->availability}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            @if(!empty($query))
                            <p>There are no results for <strong>{{$query}}</strong>. Please try your search again.</p>
                            @endif
                        @endif







                        {{--<div class="row">--}}
                                        {{--<hr/>--}}
                                        {{--<div class="col-xs-12">--}}
{{--                                            {{$truckingDeliveries->render()}}--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
