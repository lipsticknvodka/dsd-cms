@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <form action="/freight-availability/trucking" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group col-xs-12">
                                {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}

                                {!! Form::label('cfsQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}
                                <input type="text" class="form-control" name="truckingQuery"
                                       placeholder="{{$query}}"> <span class="input-group-btn">
                                    <button type="submit" id='search' class="btn btn-warning">
                                    <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                    </span>
                                {{Form::close()}}
                            </div>
                        </form>


                        @if(isset($details))
                            <p>Showing search results for <b> {{ $query }} </b> :</p>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>HAWB</th>
                                    <th>MAWB</th>
                                    {{--<th>Ref/Load #</th>--}}
                                    {{--<th>Status</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $cfsDelivery)

                                    <tr>
                                        <td><a href="/cfs/{{$cfsDelivery->id}}">{{$cfsDelivery->hawb}}</a></td>
                                        <td>{{$cfsDelivery->mawb}}</td>
                                        {{--                                        <td>{{$cfsDelivery->ref_no}}</td>--}}
                                        {{--                                        <td>{{$cfsDelivery->availability}}</td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4>There are no results for {{$query}}. Please try your search again.</h4>
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
