<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Edit Account</div>

                    <div class="panel-body">
                        @include('errors.list')

                        {!! Form::model($account) !!}

                        {{--<form method="post" action="/account/{{$account->id}}/step/{step}">--}}

                            <input type="hidden" name="_method" name="PUT">

                            <div class="row" id="progress-bar">

                                <img src="/images/dsd-admin-icons/progress-bars/new-acct-1.png" class="img-responsive">

                            </div>
                            <div class="form-group">
                                {!! Form::label('account_no','Account Number')  !!}
                                {{--                            {!! Form::text('account_no', null, ['class'=>'form-control'], Input::old('account_no'))!!}--}}
                                {!! Form::text('account_no', null, ['class'=>'form-control'],['value'=>'{{$account->account_no}}' ]) !!}
{{--<input type="text" name="title" value--}}
                                {{csrf_field()}}
                            </div>

                            <div class="form-group">
                                {!! Form::label('name','Customer Name')  !!}
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}

                            </div>

                            <div class="form-group">
                                {!! Form::label('acct_type','Account Type')  !!}
                                {!! Form::select('acct_type', ['cfs' => 'CFS', 'trucking' => 'Trucking'], null, ['class'=>'form-control']) !!}
                            </div>

                            <button type="submit" class="btn btn-warning pull-right">Submit</button>
                                                    {!! Form::close() !!}

                        {{--</form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

