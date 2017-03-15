@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                     <div class="row">
                        <div class="col-xs-12 col-sm-10">
                            <div class="row title-button-row">
                                <h3 class="col-sm-9">CFS Deliveries</h3>
                                {{--<a class="btn btn-warning pull-right" href="cfs/step/1">Add New</a>--}}
                            </div>
                            @include('errors.list')
                        </div>

                        <div class="col-xs-12">
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

                            <div class="row">
                                <hr/>
                                <div class="col-xs-12">
                                    {{$cfsDeliveries->render()}}
                                </div>
                            </div>

                            </div>



                        </div>



                    </div>

                        <hr/>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row title-button-row">
                                    <h3 class="col-sm-9">Trucking Deliveries</h3>
                                    {{--<a class="btn btn-warning pull-right" href="trucking/step/1">Add New</a>--}}
                                </div>

                            </div>

                            <div class="col-xs-12">
                                <div class="table-responsive">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Ref/Load No.</th>
                                            <th>MAWB</th>
                                            <th class="hidden-xs">HAWB</th>
                                            <th class="hidden-xs">Type</th>
                                            <th class="hidden-xs">Destination</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($truckingDeliveries as $truckingDelivery)
                                            <tr>
                                                <td>
                                                    <a href="/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->mawb}}</a>
                                                    {{--<a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a>--}}
                                                                                                            {{--<a href="">{{$account->name}}</a>--}}
                                                </td>
                                                <td>{{$truckingDelivery->mawb}}</td>
                                                <td class="hidden-xs">{{$truckingDelivery->hawb}}</td>
                                                <td class="hidden-xs">{{$truckingDelivery->trans_type}}</td>
                                                <td class="hidden-xs">{{$truckingDelivery->destination_city}}, {{$truckingDelivery->destination_state}}</td>
                                                <td>{{$truckingDelivery->availability}}</td>
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
{{--                                                                                            <li><a href="{{route('account.show', $account->id)}}">{{$account->name}}</a></li>--}}
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                    <div class="row">
                                        <hr/>
                                        <div class="col-xs-12">
                                            {{$truckingDeliveries->render()}}
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
