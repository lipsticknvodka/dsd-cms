<link rel="stylesheet" type="text/css" href="css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Accounts</div>

                    <div class="panel-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <h4>Add New Account</h4>
                        @include('errors.list')

                        {{--@if (!empty($success))--}}
                            {{--<h1>{{$success}}</h1>--}}
                        {{--@endif--}}



                        {{--
                                          {!! Form::open()!!}--}}


                        {!! Form::open(['files'=>'true', 'multiple' => 'multiple']) !!}
{{--                        {!! Form::open(array('url' => '/uploadfile','files'=>'true'))!!}--}}
                                     {!! Form::label('account_no', 'Account Number') !!}<br>
                                <div class="input-group col-xs-12">
                                    {!! Form::text('account_no', null, ['class'=>'form-control']) !!}

                                    <span class="input-group-btn">
                                         <button type="submit" class="btn btn-warning pull-right">Submit</button>
                                    </span>
                                </div>

                        {!! Form::close() !!}

                            <hr/>

                                <div class="table-responsive">
                                    <div class="row">
                                        <h4 class="col-sm-6">Recently Added Accounts</h4>

                                        <div class="col-sm-6">
                                            <a href="{{ URL::to('/account/downloadExcel/xls') }}"><button class="btn btn-warning pull-right">Download XLS</button></a>
                                            <a href="{{ URL::to('/account/downloadExcel/csv') }}"><button class="btn btn-warning pull-right">Download CSV</button></a>
                                        </div>


                                        {{--<div class="col-sm-6">--}}
                                            {{--<a href="{{ URL::to('/account/downloadExcel/xls') }}"><button class="btn btn-warning pull-right"><span class="glyphicon glyphicon-cloud-download "></span> XLS</button></a>--}}
                                            {{--<a href="{{ URL::to('/account/downloadExcel/csv') }}"><button class="btn btn-warning pull-right"><span class="glyphicon glyphicon-cloud-download "></span> CSV</button></a>--}}
                                        {{--</div>--}}
                                    </div>


                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Account Name</th>
                                            <th>Account No.</th>
                                            <th>Account Type</th>
                                            <th>Primary Contact</th>
                                            <th>Phone</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($accounts as $account)
                                                <tr>
                                                    <td>
                                                        <a href="/account/{{$account->id}}">{{$account->name}}</a>
                                                        {{--<a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a>--}}
{{--                                                        <a href="">{{$account->name}}</a>--}}
                                                    </td>
                                                    <td>{{$account->account_no}}</td>
                                                    <td>{{$account->acct_type}}</td>
                                                    <td>{{$account->primary_contact}}</td>
                                                    <td>{{$account->phone}}</td>
                                                    <td><div class="dropdown">
                                                            <a class="btn btn-danger dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                               <li><a class="dropdown-item" href="/account/{{ $account->id }}/edit">Edit</a></li>
                                                                {{--<li> <a class="dropdown-item" href="account/destroy">Delete</a></li>--}}
                                                                {{ Form::open(['method' => 'DELETE', 'route' => ['account.destroy', $account->id]]) }}
                                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                                {{ Form::close() }}
                                                            </div>
                                                        </div></td>

                                                {{--<li><a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a></li>--}}
                                                {{--                                            <li><a href="{{route('account.show', $account->id)}}">{{$account->name}}</a></li>--}}
                                                </tr>

                                            @endforeach


{{--                                            {!! $accounts->forumindex->render() !!}--}}
                                        </tbody>
                                    </table>

                                </div>
                        <div class="row">
                            <hr/>
                            <div class="col-xs-12">
                                {!! $accounts->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript">


    $('[data-method]').append(function(){
        return "\n"+
                "<form action='"+$(this).attr('href')+"' method='POST' name='delete_item' style='display:none'>\n"+
                "   <input type='hidden' name='_method' value='"+$(this).attr('data-method')+"'>\n"+
                "   <input type='hidden' name='_token' value='"+$('meta[name="_token"]').attr('content')+"'>\n"+
                "</form>\n"
    })
            .removeAttr('href')
            .attr('style','cursor:pointer;')
            .attr('onclick','$(this).find("form").submit();');

    /*
     Generic are you sure dialog
     */
    $('form[name="delete_item"]').submit(function(){
        return confirm("Are you sure you want to delete this item?");
    });
</script>