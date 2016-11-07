{{--@extends('layouts.app')--}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Account</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/') }}">
                            {{ csrf_field() }}

                            <div class="collapse in" id="account">
                                <div class="row" class="progress-bar">
                                    INSERT PROGRESS BAR HERE
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Account Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('acct-type') ? ' has-error' : '' }}">
                                    <label for="acct-type" class="col-md-4 control-label">Account Type</label>

                                    <div class="col-md-6">
                                        <input id="acct-type" type="text" class="form-control" name="acct-type" value="{{ old('acct-type') }}">

                                        @if ($errors->has('acct-type'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('acct-type') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {{--<a href="#account" class="btn btn-default" data-toggle="collapse">Account</a>--}}
                                        <button href="#billing" class="btn btn-default" data-target="#billing" data-toggle="collapse">Continue</button>
                                    </div>
                                </div>
                            </div>


                            <div class="collapse" id="billing">
                                <div class="row" class="progress-bar">
                                    INSERT PROGRESS BAR HERE
                                </div>

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Account Name</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('acct-type') ? ' has-error' : '' }}">
                                    <label for="acct-type" class="col-md-4 control-label">Account Type</label>

                                    <div class="col-md-6">
                                        <input id="acct-type" type="text" class="form-control" name="acct-type" value="{{ old('acct-type') }}">

                                        @if ($errors->has('acct-type'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('acct-type') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {{--<a href="#account" class="btn btn-default" data-toggle="collapse">Account</a>--}}
                                        <button href="#billing" class="btn btn-default" data-target="#billing" data-toggle="collapse">Continue</button>
                                    </div>
                                </div>
                            </div>
                  </form>  </div>
            </div>
        </div>
    </div>
<script>
        $('#account').collapse({
        toggle: false
        })</script>
@endsection
