@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix" id="three-arrows">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-credit-card"></div><span>Billing</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-phone-alt"></div><span>Contact</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($account)!!}


                        <div class="row-fluid">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('phone','Phone')  !!}
                                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                                    {{csrf_field()}}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('fax','Fax')  !!}
                                    {!! Form::text('fax', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    {!! Form::label('primary_contact','Primary Contact')  !!}
                                    {!! Form::text('primary_contact', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('email','Email')  !!}
                                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12">
                            <div class="input-group-md pull-right">
                                <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                                <button type="submit" class="btn btn-warning">Submit</button>
                            </div>

                        </div>


                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


