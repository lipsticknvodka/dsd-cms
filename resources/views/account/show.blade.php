@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-xl-8 col-xl-offset-2">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Account Details</div>

                    <div class="panel-body">
                        <div class="row">
                            <h3>{{$account->name}}</h3>
                            <h4>Account No. {{$account->account_no}}</h4>
                            <h4>{{$account->acct_type}}</h4>
                            {{--<div class="col-sm-8">--}}
                                {{--<a href="{{ URL::to('/account/downloadExcel/xls') }}"><button class="btn btn-warning">Download xls</button></a>--}}
                                {{--<a href="{{ URL::to('/account/downloadExcel/csv') }}"><button class="btn btn-warning">Download CSV</button></a>--}}
                            {{--</div>--}}
                        </div>

                        <hr/>

                            {{--<div class="col-sm-6">--}}


                            {{--</div>--}}

                            {{--<div class="col-sm-6">--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="row">

                            <div class="col-xs-12 col-sm-4">
                                <h3>Contact </h3>
                                <p><strong>Phone </strong> {{$account->phone}}</p>
                                <p><strong>Fax</strong> {{$account->fax}}</p>
                                <p><strong>Primary Contact</strong> {{$account->primary_contact}}</p>
                                <p>{{$account->email}}</p>
                            </div>

                            <hr class="visible-xs"/>

                            <div class="col-xs-12 col-sm-3">
                                <h3>Billing </h3>
                                @if($account)
                                    <p><strong>Bill To</strong></p> {{$account->bill_to}}</p>
                                    <p>{{$account->address_1}}</p>
                                    @if($account->address_2)
                                        <p><strong>Apt/Suite No. </strong>{{$account->address_2}}</p>
                                    @endif
                                    <p>{{$account->city}}, {{$account->state}} {{$account->zip}}</p>
                                    <p><strong>Attn. To</strong> {{$account->attn_to}}</p>
                                @else
                                    'No address entered';
                                @endif
                            </div>

                            <hr class="visible-xs"/>

                            <div class="col-xs-12 col-sm-5">
                                <h3>Rates</h3>
                                @if (count($account->rates) === 1)

                                    {{--<ul>--}}
                                    @foreach($account->rates as $rate)
                                        <div class="row">
                                            {{--<div class="col-xs-1 pull-left">--}}
                                            <form method="POST" action="/rate/{{$rate->id}}" class="col-xs-1">
                                                {{--                                <form method="POST" action="{{route('deleteException')}}">--}}
                                                {!! csrf_field() !!}

                                                <input type="hidden" name="_method" value="DELETE">

                                                <button type="submit" class="fa fa-times" id="deleteFileButton"></button>
                                            </form>
                                            {{--</div>--}}

                                            <div class="col-xs-11" >

                                                <a href="{{$rate->path}}" target="_blank">
                                                    {{$rate->name}}
                                                </a>

                                            </div>
                                        </div>
                                    @endforeach
                                    {{--</ul>--}}
                                @else
                                    No rates uploaded.
                                @endif
                            </div>
                        </div>

                        <hr/>

                        <div class="input-group-md pull-right">
                            <a href="/account/{{ $account->id }}/edit"><button class="btn btn-danger">Edit</button></a>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['account.destroy', $account->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>

                    </div>
                        </div>



                        {{--<hr/>--}}

                        {{--<div class="row">--}}
                            {{--<div class="col-xs-12">--}}
                                {{--<h4><strong>Rates</strong></h4>--}}
                                {{--@if (count($account->rates) === 1)--}}

                                    {{--<ul>--}}
                                    {{--@foreach($account->rates as $rate)--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-xs-1 pull-left">--}}
                                            {{--<form method="POST" action="/rate/{{$rate->id}}" class="col-xs-1">--}}
                                                {{--                                <form method="POST" action="{{route('deleteException')}}">--}}
                                                {{--{!! csrf_field() !!}--}}

                                                {{--<input type="hidden" name="_method" value="DELETE">--}}

                                                {{--<button type="submit" class="fa fa-times" id="deleteFileButton"></button>--}}
                                            {{--</form>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-xs-11" >--}}

                                                {{--<a href="{{$rate->path}}" target="_blank">--}}
                                                    {{--{{$rate->name}}--}}
                                                {{--</a>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}
                                    {{--</ul>--}}
                                {{--@else--}}
                                    {{--No rates uploaded.--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="btn-group-md pull-right">--}}
                            {{--<a href="/account/{{ $account->id }}/edit"><button class="btn btn-danger">Edit</button></a>--}}
                            {{--{{ Form::open(['method' => 'DELETE', 'route' => ['account.destroy', $account->id]]) }}--}}
                            {{--{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}--}}
                            {{--{{ Form::close() }}--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
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
    $('form[name=delete_item]').submit(function(){
        return confirm("Are you sure you want to delete this item?");
    });
</script>