<link rel="preload" type="text/css" href="css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Trucking Deliveries</div>

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
                            <h4>Recently Deleted Transactions</h4>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Ref/Load No.</th>
                                    <th class="hidden-xs">MAWB</th>
                                    <th class="hidden-xs">HAWB</th>
                                    <th class="hidden-xs">Type</th>
                                    <th>Status</th>
                                    <th>Deleted At</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($truckingDeliveries as $truckingDelivery)
                                    <tr>
                                        <td>
                                            <a href="/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->ref_no}}</a>
                                            {{--<a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a>--}}
                                            {{--                                                        <a href="">{{$account->name}}</a>--}}
                                        </td>
                                        <td class="hidden-xs">{{$truckingDelivery->mawb}}</td>
                                        <td class="hidden-xs">{{$truckingDelivery->hawb}}</td>
                                        <td class="hidden-xs">{{$truckingDelivery->trans_type}}</td>
                                        <td>{{$truckingDelivery->availability}}</td>
                                        <td>{{$truckingDelivery->deleted_at}}</td>
                                        <td>

                                            <a role="button" class="btn btn-primary" href="{{ url('/trucking/'.$truckingDelivery->id.'/restore') }}">
                                                Restore
                                            </a>
                                        </td>

                                        <td>

                                            <a role="button" class="btn btn-primary" href="{{ url('/trucking/'.$truckingDelivery->id.'/permDelete') }}">
                                                Delete
                                            </a>

                                        </td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>

                        </div>
                            <div class="row">
                                <hr/>
                                <div class="col-xs-12">
                                    {!! $truckingDeliveries->render() !!}
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