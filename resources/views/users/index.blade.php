@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">

                        {{--<div class="row">--}}
                            {{--<a href="register">+ Add New User</a>--}}
                        {{--</div>--}}

                        <div class="row">
                            <div class="col-xs-12 col-sm-10">
                                <div class="row title-button-row">
                                    {{--<h3 class="col-sm-9">CFS Deliveries</h3>--}}
                                    {{--<a class="btn btn-warning pull-right" href="cfs/step/1">Add New</a>--}}
                                </div>
                                @include('errors.list')
                            </div>

                            <div class="col-xs-12">
                                <div class="table-responsive">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created</th>
                                            {{--<th>Last Log In</th>--}}
                                            {{--<th class="hidden-xs">G.O.</th>--}}
                                            {{--<th>Availability</th>--}}
                                            {{--<th>Status</th>--}}
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->created_at->diffForHumans()}}</td>
                                                {{--<td></td>--}}

                                                <td>
                                                    {{--<small>--}}
                                                    {{--<a href="{{ url('/user/'.$user->id.'/delete') }}">--}}
                                                    {{--Delete--}}
                                                    {{--</a>--}}
                                                    {{--</small>--}}

                                                    <form method="POST" action="/user/{{$user->id}}" >

                                                        {!! csrf_field() !!}

                                                        <input type="hidden" name="_method" value="DELETE">

                                                        <input type="submit" class="deleteLink" value="Delete" >
                                                    </form>
                                                </td>




                                                {{--<td>--}}
                                                {{--<small>--}}
                                                {{--{{ Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) }}--}}
                                                {{--{{ Form::submit('Delete', ['class'=>'deleteLink']) }}--}}
                                                {{--{{ Form::close() }}--}}
                                                {{--</small>--}}
                                                {{--</td>--}}

                                                {{--<td>--}}
                                                {{--{!! Form::open(['method'=>'DELETE', 'action'=>['UsersController@destroy', $user->id]])!!}--}}
                                                {{--<div class="form-group">--}}
                                                {{--{!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}--}}
                                                {{--</div>--}}
                                                {{--{!! Form::close() !!}--}}
                                                {{--</td>--}}



                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>

                                    {{--<div class="row">--}}
                                    {{--<hr/>--}}
                                    {{--<div class="col-xs-12">--}}
                                    {{--{{$users->render()}}--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
