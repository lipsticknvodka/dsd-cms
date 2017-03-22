@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">CFS</div>



                    <div class="panel-body">
                        @include('errors.list')


                        <h3>Open CFS Deliveries</h3>

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

                            @if($cfsDelivery->status == "Open")



                                        <tr>
                                            <td>
                                                <a href="/cfs/{{$cfsDelivery->id}}">{{$cfsDelivery->mawb}}</a>
                                            </td>

{{--                                            <td>{{$cfsDelivery->account->name}}</td>--}}
                                            <td class="hidden-xs">{{$cfsDelivery->arrival_date}}</td>
                                            <td class="hidden-xs">{{$cfsDelivery->last_free_day}}</td>
                                            <td class="hidden-xs">{{$cfsDelivery->general_order}}</td>
                                            <td>{{$cfsDelivery->availability}}</td>
                                            <td>{{$cfsDelivery->status}}</td>
                                            <td><div class="dropdown pull-right">
                                                    <a class="btn btn-danger dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <li><a class="dropdown-item" href="/cfs/{{ $cfsDelivery->id }}/edit">Edit</a></li>
                                                        <li> <a class="dropdown-item" href="account/destroy">Delete</a></li>
                                                        {{ Form::open(['method' => 'DELETE', 'route' => ['cfs.destroy', $cfsDelivery->id]]) }}
                                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                        {{ Form::close() }}
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                </tbody>

                                        {{--@else--}}
                                            {{--<p>No open CFS deliveries.</p>--}}
                                        @endif

                                        @endforeach

                            </table>

                            <hr/>
                                </div>

                                <div class="row">

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