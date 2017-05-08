@extends('layouts.customer')

@section('content')
<div id="page-wrapper" class="container-fluid">
    <div class="container" id="page-header">
        <h4>Freight Availability</h4>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="freight-availability">Freight Availability </a></li>
            <li class="active">CFS </li>
            {{--<li class="active">{{$truckingDelivery->ref_no}}</li>--}}
        </ol>
    </div>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">CFS Search Results</div>

                    <div class="panel-body">
                        <form action="/freight-availability/cfs" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group col-xs-12">
                                {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}

                                {!! Form::label('cfsQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}
                                <input type="text" class="form-control" name="cfsQuery"
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
                                <th>MAWB</th>
                                {{--<th>HAWB</th>--}}
                                <th>Weight</th>
                                <th>Arrival Date</th>
                                <th>Pieces</th>
                                <th>Pallets</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($details as $cfsDelivery)
{{--                            @foreach($cfsDelivery->hawbs as $hawb)--}}
                            <tr>
                                <td><a href="/freight-availability/cfs/{{$cfsDelivery->cfs_delivery_id}}">{{$cfsDelivery->hawb}}</a></td>
{{--                                <td>{{$cfsDelivery->mawb}}</td>--}}
                                <td>{{$cfsDelivery->arrival_date}}</td>
                                <td>{{$cfsDelivery->weight_no}}<small>{{$cfsDelivery->weight_type}}</small></td>
                                <td>{{$cfsDelivery->piece_ct}}</td>
                                <td>{{$cfsDelivery->pallet_ct}}</td>
                                <td>{{$cfsDelivery->status}}</td>
                            </tr>
                            {{--@endforeach--}}
                            @endforeach
                            </tbody>
                        </table>
                        @else
                        <h4>There are no results for {{$query}}. Please try your search again.</h4>
                        @endif


                        {{--WORKING CODE--}}

                        {{--@if(isset($details))--}}
                        {{--<p>Showing search results for <b> {{ $query }} </b> :</p>--}}

                        {{--<table class="table table-striped">--}}
                            {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th>MAWB</th>--}}
                                {{--<th>MAWB</th>--}}
                                {{--<th>HAWB</th>--}}
                                {{--<th>Status</th>--}}
                                {{--</tr>--}}
                            {{--</thead>--}}
                            {{--<tbody>--}}

                            {{--@foreach($details as $cfsDelivery)--}}
                            {{--<tr>--}}
                                {{--<td><a href="/freight-availability/cfs/{{$cfsDelivery->id}}">{{$cfsDelivery->mawb}}</a></td>--}}
                                {{--<td>{{$cfsDelivery->mawb}}</td>--}}
                                {{--<td>{{$cfsDelivery->hawb}}</td>--}}
                                {{--<td>{{$cfsDelivery->availability}}</td>--}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}
                            {{--</table>--}}
                        {{--@else--}}
                        {{--<h4>There are no results for {{$query}}. Please try your search again.</h4>--}}
                        {{--@endif--}}


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
