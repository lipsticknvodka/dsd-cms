@extends('layouts.app')



@section('content')

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">
                                <div class="arrow-steps clearfix">
                                    <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                                    <div class="step"> <div class="glyphicon glyphicon-credit-card"></div><span>Billing</span> </div>
                                    <div class="step"> <div class="glyphicon glyphicon-phone-alt"></div><span>Contact</span> </div>
                                </div>

                        @include('errors.list')


                        {!! Form::model($account) !!}

<div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group col-xs-12">
                            {!! Form::label('account_no','Account Number')  !!}
                            {!! Form::text('account_no', null, ['class'=>'form-control']) !!}

                            {{csrf_field()}}
                        </div>

                        <div class="form-group col-xs-12">
                            {!! Form::label('name','Account Name')  !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}

                        </div>

                        <div class="form-group col-xs-12">
                            {!! Form::label('acct_type','Account Type')  !!}
                            {!! Form::select('acct_type', ['CFS' => 'CFS', 'Trucking' => 'Trucking', 'CFS & Trucking' => 'CFS & Trucking'], null, ['class'=>'form-control']) !!}
                        </div>

                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-warning pull-right">Continue</button>
                            </div>
</div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

