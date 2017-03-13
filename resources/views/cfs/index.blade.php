@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">CFS</div>

                    <div class="panel-body">
                        @include('errors.list')

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <h4>Add New CFS Delivery</h4>

                        {!! Form::open() !!}

                        {!! Form::label('mawb', 'MAWB') !!}<br>
                        {{--{!! Form::label('hawb', 'HAWB') !!}<br>--}}
                        <div class="input-group col-xs-12">
                            {{--{!! Form::text('hawb', null, ['class'=>'form-control']) !!}--}}
                            {!! Form::text('mawb', null, ['class'=>'form-control']) !!}
                            <span class="input-group-btn">
                                         <button type="submit" class="btn btn-warning pull-right">Submit</button>
                                    </span>
                        </div>

                        {!! Form::close() !!}


                        <hr/>

                        <div class="row">
                            <h4 class="col-sm-6">Recent CFS Deliveries</h4>

                            <div class="col-sm-6">
                                    <a href="{{ URL::to('/cfs/downloadExcel/xls') }}"><button class="btn btn-warning pull-right">Download xls</button></a>

                                    <a href="{{ URL::to('/cfs/downloadExcel/csv') }}"><button class="btn btn-warning pull-right">Download CSV</button></a>
                            </div>
                        </div>


                        <div class="table-responsive">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>MAWB</th>
                                    <th class="hidden-xs">Arrival</th>
                                    <th class="hidden-xs">L.F.D.</th>
                                    <th class="hidden-xs">G.O.</th>
                                    <th>Availability</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cfsDeliveries as $cfsDelivery)
                                    <tr>
                                        <td>
                                            <a href="/cfs/{{$cfsDelivery->id}}">{{$cfsDelivery->mawb}}</a>
                                            {{--<a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a>--}}
                                            {{--                                                        <a href="">{{$account->name}}</a>--}}
                                        </td>
{{--                                        <td>{{$cfsDelivery->account ? $cfsDelivery->account->name : "No account selected"}}</td>--}}
                                        <td class="hidden-xs">{{$cfsDelivery->arrival_date}}</td>
                                        <td class="hidden-xs">{{$cfsDelivery->last_free_day}}</td>
                                        <td class="hidden-xs">{{$cfsDelivery->general_order}}</td>
                                        <td>{{$cfsDelivery->availability}}</td>
                                        <td>{{$cfsDelivery->status}}</td>
                                        <td><div class="dropdown">
                                                <a class="btn btn-danger dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <li><a class="dropdown-item" href="/cfs/{{ $cfsDelivery->id }}/edit">Edit</a></li>
                                                    {{--<li> <a class="dropdown-item" href="account/destroy">Delete</a></li>--}}
                                                    {{ Form::open(['method' => 'DELETE', 'route' => ['cfs.destroy', $cfsDelivery->id]]) }}
                                                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                    {{ Form::close() }}
                                                </div>
                                            </div></td>

                                        {{--<li><a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a></li>--}}
                                        {{--                                            <li><a href="{{route('account.show', $account->id)}}">{{$account->name}}</a></li>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <hr/>
                            <div class="col-xs-12">
                                {!! $cfsDeliveries->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

