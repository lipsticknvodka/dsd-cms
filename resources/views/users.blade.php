@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">

                        <div class="row">
                            <a href="/register">+ Add New User</a>
                        </div>

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
                                                <td>{{$user->created_at}}</td>
                                                <td> <form method="POST" action="/user/{{$user->id}}" class="col-xs-1">
                                                        {{--                                <form method="POST" action="{{route('deleteException')}}">--}}
                                                        {!! csrf_field() !!}

                                                        <input type="hidden" name="_method" value="DELETE">

                                                        <button type="submit" class="fa fa-times" id="deleteFileButton"></button>
                                                    </form></td>

{{--

                                                <td><div class="dropdown">
                                                        <a class="btn btn-danger dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li> <a class="dropdown-item" href="#">Delete</a></li>

                                                        </div>
                                                    </div></td>

                                                {{--<li><a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a></li>--}}
                                                {{--                                            <li><a href="{{route('account.show', $account->id)}}">{{$account->name}}</a></li>--}}
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
