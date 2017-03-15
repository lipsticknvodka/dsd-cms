<link rel="preload" type="text/css" href="css/style.css" as="style" onload="this.rel='stylesheet'">

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">Trucking</div>



                    <div class="panel-body">
                        @include('errors.list')

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <h4>Add New Trucking Delivery</h4>

                        {!! Form::open(['files'=>true]) !!}

                        {{--{!! Form::label('mawb', 'MAWB') !!}<br>--}}
                        {{--<div class="input-group">--}}
                            {{--{!! Form::text('mawb', null, ['class'=>'form-control']) !!}--}}
                        {!! Form::label('ref_no', 'Reference/Load No.') !!}<br>
                        <div class="input-group col-xs-12">
                            {!! Form::text('ref_no', null, ['class'=>'form-control']) !!}

                            <span class="input-group-btn">
                                         <button type="submit" class="btn btn-warning pull-right">Submit</button>
                                    </span>
                        </div>

                        {!! Form::close() !!}

                        <hr/>

                        <div class="row">
                            <h4 class="col-sm-6">Recent Trucking Deliveries</h4>

                            <div class="col-sm-6">
                                <a href="{{ URL::to('/trucking/downloadExcel/xls') }}"><button class="btn btn-warning pull-right">Download XLS</button></a>
                                <a href="{{ URL::to('/trucking/downloadExcel/csv') }}"><button class="btn btn-warning pull-right">Download CSV</button></a>
                            </div>
                        </div>

                        {{--<div class="row">--}}
                            {{--<div class="form-group col-xs-3">--}}
                                {{--{!! Form::label('filterBy','Filter by')  !!}--}}
                                {{--{!! Form::select('filterBy', ['Pick up date' => 'Pick up date', 'Delivery date' => 'Delivery date'], null, ['class'=>'form-control'],['id'=>'filterBy']) !!}--}}
                            {{--</div>--}}

                            {{--<div class="form-group col-xs-3">--}}
                                {{--{!! Form::label('From','From')  !!}--}}
                                {{--{!! Form::text('From', null, ['class'=>'date form-control'],['id'=>'From']) !!}--}}
                            {{--</div>--}}

                            {{--<div class="form-group col-xs-3">--}}
                                {{--{!! Form::label('to','To')  !!}--}}
                                {{--{!! Form::text('to', null, ['class'=>'date form-control'],['id'=>'to']) !!}--}}
                            {{--</div>--}}

                            {{--<input type="button" name="range" id="range"  value="Filter" class="btn btn-warning col-xs-2">--}}
                        {{--</div>--}}





                        <div class="table-responsive">

                            <table class="table table-striped" id="purchase_order">
                                <thead>
                                <tr>
                                    <th>Ref/Load No.</th>
                                    {{--<th>MAWB</th>--}}
                                    {{--<th>HAWB</th>--}}
                                    <th>Type</th>
                                    <th>Picked Up</th>
                                    <th>Out for Delivery</th>
                                    {{--<th>Destination</th>--}}
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($truckingDeliveries as $truckingDelivery)
                                    <tr>
                                        <td>
                                            <a href="/trucking/{{$truckingDelivery->id}}">{{$truckingDelivery->ref_no}}</a>
                                        </td>
                                        {{--<td>{{$cfsDelivery->account ? $cfsDelivery->account->name : "No account selected"}}</td>--}}
{{--                                        <td>{{$truckingDelivery->account ? $truckingDelivery->account->name : "No account selected"}}</td>--}}
                                        {{--<td>{{$truckingDelivery->mawb}}</td>--}}
                                        {{--<td>{{$truckingDelivery->hawb}}</td>--}}
                                        <td>{{$truckingDelivery->trans_type}}</td>
                                        <td>{{$truckingDelivery->pick_up_date}}</td>
                                        <td>{{$truckingDelivery->out_for_delivery_date}}</td>
{{--                                        <td>{{$truckingDelivery->destination_city}}, {{$truckingDelivery->destination_state}}</td>--}}
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

                                        {{--<li><a href="{‌{route('account.show', ['id' => $account->id])}}">{‌{$account->name}}</a></li>--}}
                                                                                    {{--<li><a href="{{route('account.show', $account->id)}}">{{$account->name}}</a></li>--}}
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

    {{--<script type="text/javascript">--}}
        {{--$(document).ready(function () {--}}
            {{--$.datepicker.setDefaults({--}}
                {{--dateFormat: 'yy-mm-dd'--}}
            {{--});--}}
            {{--$function(){--}}
                {{--$("#From").datepicker();--}}
                {{--$("#to").datepicker;--}}

        {{--});--}}
        {{--$('#range').click(function(){--}}
            {{--var From = $('#From').val();--}}
            {{--var to = $('#tc').val();--}}
            {{--if(From != '' && to != '')--}}
            {{--{--}}
                {{--$.ajax({--}}
                    {{--url:"range.php",--}}
                    {{--method:"POST",--}}
                    {{--data:{From:From, to:to},--}}
                    {{--success:function(data)--}}
                    {{--{--}}
                        {{--$('purchase_order').html(data);--}}
                    {{--}--}}

                {{--});--}}
            {{--}else{--}}
                {{--alert("Please select date");--}}
            {{--}--}}

        {{--})--}}

        {{--$("#startDate").datepicker({--}}
            {{--changeMonth:true,--}}
{{--//            changeMonth:true,--}}
            {{--changeYear:true,--}}
            {{--yearRange:"1970:+0",--}}
            {{--dateFormat: 'yy/mm/dd',--}}
            {{--onSelect:function(dateText){--}}
                {{--var DateRegistered = $('#startDate').val();--}}
                {{--var endDate = $('#endDate').val();--}}
{{--//                var AcademicID = $('#AcademicID').val();--}}
{{--//                listStudent(DateRegistered, endDate, AcademicID);--}}
                {{--listStudent(DateRegistered, endDate);--}}
            {{--}--}}

        {{--});--}}

        {{--$("#endDate").datepicker({--}}
            {{--changeMonth:true,--}}
{{--//            changeMonth:true,--}}
            {{--changeYear:true,--}}
            {{--yearRange:"1970:+0",--}}
            {{--dateFormat: 'yy/mm/dd',--}}
            {{--onSelect:function(dateText){--}}
                {{--var DateRegistered = $('#startDate').val();--}}
                {{--var endDate = $('#endDate').val();--}}
{{--//                var AcademicID = $('#AcademicID').val();--}}
{{--//                listStudent(DateRegistered, endDate, AcademicID);--}}
                {{--listStudent(DateRegistered, endDate);--}}
            {{--}--}}
        {{--});--}}

        {{--function listStudent(criteria1, criteria2, criteria3){--}}
            {{--$.ajax({--}}
                {{--type:'get',--}}
                {{--url: "{!! url('trucking.index') !!}",--}}
{{--data: {DateRegistered:criteria1,startDate:criteria2,endDate:criteria3},--}}
{{--//                data: {DateRegistered:criteria1,endDate:criteria2,AcademicID:criteria3},--}}
                {{--success:function(data){--}}

                    {{--$('trucking.index').empty().html(data);--}}
                {{--}--}}

            {{--})--}}

        {{--}--}}
{{--//    </script>--}}
@endsection