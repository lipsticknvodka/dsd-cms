@extends('layouts.customer')

@section('content')
    <div id="page-wrapper" class="container-fluid">
        <div class="container" id="page-header">
            <h4>Freight Availability</h4>
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="freight-availability">Freight Availability </a></li>
                <li class="active">Trucking </li>
                {{--<li class="active">{{$truckingDelivery->ref_no}}</li>--}}
            </ol>
        </div>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Trucking Search Results</div>

                    <div class="panel-body">
                        <form action="/freight-availability/trucking" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group col-xs-12">
                                {{Form::open(['method'=>'GET','url'=>'search-results', 'role'=>'search'])}}

                                {!! Form::label('truckingQuery','Search by MAWB, HAWB, or Reference/Load #')  !!}
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
                                    <th>Ref/Load #</th>
                                    <th>MAWB</th>
                                    <th>HAWB</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($details as $truckingDelivery)

                                    <tr>
                                        <td><a href="/freight-availability/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->ref_no}}</a></td>
                                        <td>{{$truckingDelivery->mawb}}</td>
                                        <td>{{$truckingDelivery->hawb}}</td>
                                        <td>{{$truckingDelivery->availability}}</td>
                                    </tr>
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
@endsection
