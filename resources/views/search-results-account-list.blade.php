@extends('layouts.app')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        {{--<div class="container" id="page-header">--}}
            {{--<h4>Freight Availability</h4>--}}
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="home">Home</a></li>--}}
                {{--<li><a href="freight-availability">Freight Availability </a></li>--}}
                {{--<li class="active">CFS </li>--}}
                {{--<li class="active">{{$truckingDelivery->ref_no}}</li>--}}
            {{--</ol>--}}
        {{--</div>--}}
        <div class="container">
            <div class="row-fluid">
                <div class="col-xs-12">
                    <div class="panel panel-default" id="content">
                        <div class="panel-heading">Search Results</div>

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
                                        <th>Account Name</th>
                                        <th>Account No.</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($details as $account)
{{--                                        @foreach($account->hawbs as $hawb)--}}
                                            <tr>
                                                <td><a href="/account/{{$account->id}}">{{$account->name}}</a></td>
                                                <td>{{$account->account_no}}</td>
                                                {{--<td>{{$cfsDelivery->arrival_date}}</td>--}}
{{--                                                <td>{{$cfsDelivery->status}}</td>--}}
                                            </tr>
                                        {{--@endforeach--}}
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h4>There are no results for {{$query}}. Please try your search again.</h4>
                            @endif
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
