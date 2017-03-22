@extends('layouts.customer')

@section('content')

    <div class="container">
        <div class="row" id="content-wrapper">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="customer-content">
                    <div class="panel-heading">Error 503</div>

                    <div class="panel-body">
                        <h3>Error 503</h3>
                        <h4>The page your are looking for cannot be found. </h4>
                        {{--<a href="{{ URL::previous() }}">Return to previous page.</a>--}}

                        <a href="{{ URL::previous() }}">Return to git addhome page.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection