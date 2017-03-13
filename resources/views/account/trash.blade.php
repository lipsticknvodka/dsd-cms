<link rel="preload" type="text/css" href="css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Accounts</div>

                    <div class="panel-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


                        @include('errors.list')

                        {{--@if (!empty($success))--}}
                        {{--<h1>{{$success}}</h1>--}}
                        {{--@endif--}}

                        <div class="table-responsive">
                            <h4>Recently Deleted Accounts</h4>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Account Name</th>
                                    <th>Account No.</th>
                                    <th>Account Type</th>
                                    <th>Deleted At</th>
                                    <th></th>
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
                                        <td>{{$account->deleted_at}}</td>
                                        <td>
                                            <a role="button" class="btn btn-primary" href="{{ url('/account/'.$account->id.'/restore') }}">
                                                Restore
                                            </a>
                                        </td>

                                        <td>

                                            <a role="button" class="btn btn-primary" href="{{ url('/account/'.$account->id.'/permDelete') }}">
                                               Delete
                                            </a>

                                            {{--{!! Form::open(['method'=>'DELETE'],[url('/account/'.{$account->id}.'/permDelete)]) !!}--}}

                                            {{--<button type="submit" value="Delete">Delete</button>--}}
                                            {{--{!! Form::close() !!}--}}

                                        </td>

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