@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Open Trucking Deliveries</div>



                    <div class="panel-body">
                        @include('errors.list')

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <h3>Open Trucking Deliveries</h3>

                                <div class="table-responsive">

                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Ref/Load No.</th>
                                            <th>MAWB</th>
                                            <th class="hidden-xs">HAWB</th>
                                            <th class="hidden-xs">Type</th>
                                            {{--<th class="hidden-xs">Destination</th>--}}
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($truckingDeliveries as $truckingDelivery)

                                            @if($truckingDelivery->availability == "Open")
                                            <tr>
                                                <td>
                                                    <a href="/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->ref_no}}</a>
                                                </td>
                                                <td>{{$truckingDelivery->mawb}}</td>
                                                <td class="hidden-xs">{{$truckingDelivery->hawb}}</td>
                                                <td class="hidden-xs">{{$truckingDelivery->trans_type}}</td>
{{--                                                <td class="hidden-xs">{{$truckingDelivery->destination_city}}, {{$truckingDelivery->destination_state}}</td>--}}
                                                <td>{{$truckingDelivery->availability}}</td>
                                                <td><div class="dropdown pull-right">
                                                        <a class="btn btn-danger dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action <span class="caret"></span>
                                                        </a>

                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item" href="/trucking/{{ $truckingDelivery->id }}/edit">Edit</a></li>
                                                            {{--<li> <a class="dropdown-item" href="account/destroy">Delete</a></li>--}}
                                                            {{ Form::open(['method' => 'DELETE', 'route' => ['trucking.destroy', $truckingDelivery->id]]) }}
                                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                                            {{ Form::close() }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                    @else
                                        {{--<h4>There are no open trucking deliveries.</h4>--}}
                                    @endif
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