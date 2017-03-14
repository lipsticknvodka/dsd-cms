{{--<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">--}}

@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Trucking Delivery</div>--}}

                    <div class="content-body">

                        <div id="trucking" class="arrow-steps clearfix">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-map-marker"></div><span>Location</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Breakdown</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-hourglass"></div><span>Availability</span> </div>
                        </div>

                        @include('errors.list')


                        {!! Form::model($trucking) !!}



                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <script>$(document).ready(function() {
                                $("select").change(function() {
                                    var cargoStatus = $(this).val();
                                    if  (cargoStatus == "At DSD location") {
                                        $(".hidden_input").not(".at_dsd").hide();
                                        $(".at_dsd").show();
                                    } else if (cargoStatus == "Out for delivery") {
                                        $(".hidden_input").not(".out_for_delivery").hide();
                                        $(".out_for_delivery").show();
//
                                    } else {
                                        $(".hidden_input").hide();
                                    }
                                });


                            });
                        </script>
                        <div>

                        <style>
                            .hidden_input{
                                display: none;
                            }
                        </style>


                                <div class="col-xs-9">
                                    {!! Form::label('cargo_status','Cargo Status')  !!}

                                    {!! Form::select('cargo_status', [''=>'Choose option','Picked Up' => 'Picked Up', 'At DSD location' => 'At DSD location', 'Out for delivery'=>'Out for delivery'], null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group col-xs-3 hidden_input at_dsd">
                                    {!! Form::label('at_dsd_date','Date')  !!}
                                    {!! Form::text('at_dsd_date', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-3 hidden_input out_for_delivery">
                                    {!! Form::label('out_for_delivery_date','Date')  !!}
                                    {!! Form::text('ougit lt_for_delivery_date', null, ['class'=>'date form-control']) !!}
                                </div>


                            </div>

                        </div>

                        {{--<div class="form-group col-xs-12">--}}
                            {{--{!! Form::label('pod','Upload POD')  !!}--}}
                            {{--{!! Form::text('pod', null, ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}


                        <div class="form-group col-xs-12">
                            {!! Form::label('driver','Driver')  !!}
                            {!! Form::text('driver', null, ['class'=>'form-control']) !!}
                        </div>


                        <div class="row-fluid">
                            <div class="form-group col-xs-6">
                                {!! Form::label('received_by','Received/Signed by')  !!}
                                {!! Form::text('received_by', null, ['class'=>'form-control']) !!}
                            </div>
                                <div class="form-group col-xs-3">
                                    {!! Form::label('trans_closed_date','Closed Date')  !!}
                                    {!! Form::text('trans_closed_date', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-3">
                                    {!! Form::label('trans_closed_time','Time')  !!}
                                    {!! Form::select('trans_closed_time',array(

                                        '12:00am'=>'12:00 am',
                                        '12:30am'=>'12:30 am',
                                        '1:00am'=>'1:00 am',
                                        '1:30am'=>'1:30 am',
                                        '2:00am'=>'2:00 am',
                                        '2:30am'=>'2:30 am',
                                        '3:00am'=>'3:00 am',
                                        '3:30am'=>'3:30 am',
                                        '4:00am'=>'4:00 am',
                                        '4:30am'=>'4:30 am',
                                        '5:00am'=>'5:00 am',
                                        '5:30am'=>'5:30 am',
                                        '6:00am'=>'6:00 am',
                                        '6:30am'=>'6:30 am',
                                        '7:00am'=>'7:00 am',
                                        '7:30am'=>'7:30 am',
                                        '8:00am'=>'8:00 am',
                                        '8:30am'=>'8:30 am',
                                        '9:00am'=>'9:00 am',
                                        '9:30am'=>'9:30 am',
                                        '10:00am'=>'10:00 am',
                                        '10:30am'=>'10:30 am',
                                        '11:00am'=>'11:00 am',
                                        '11:30am'=>'11:30 am',
                                        '12:00pm'=>'12:00 pm',
                                        '12:30pm'=>'12:30 pm',
                                        '1:00pm'=>'1:00 pm',
                                        '1:30pm'=>'1:30 pm',
                                        '2:00pm'=>'2:00 pm',
                                        '2:30pm'=>'2:30 pm',
                                        '3:00pm'=>'3:00 pm',
                                        '3:30pm'=>'3:30 pm',
                                        '4:00pm'=>'4:00 pm',
                                        '4:30pm'=>'4:30 pm',
                                        '5:00pm'=>'5:00 pm',
                                        '5:30pm'=>'5:30 pm',
                                        '6:00pm'=>'6:00 pm',
                                        '6:30pm'=>'6:30 pm',
                                        '7:00pm'=>'7:00 pm',
                                        '7:30pm'=>'7:30 pm',
                                        '8:00pm'=>'8:00 pm',
                                        '8:30pm'=>'8:30 pm',
                                        '9:00pm'=>'9:00 pm',
                                        '9:30pm'=>'9:30 pm',
                                        '10:00pm'=>'10:00 pm',
                                        '10:30pm'=>'10:30 pm',
                                        '11:00pm'=>'11:00 pm',
                                        '11:30pm'=>'11:30 pm',

                            ),null, ['class'=>'form-control col-xs-6'])
                             !!}

                             </div>
                        </div>


                            <div class="row-fluid">

                                <div class="col-xs-3" id="podUploadBtn">
                                    <a href="#podUpload" role="button" class="btn btn-large btn-primary pull-left" data-toggle="modal">Upload POD</a>
                                </div>

                            </div>

            </div>

{{--<div class="row">--}}
    <div class="input-group-md col-xs-4 pull-right">
        <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
        <button type="submit" class="btn btn-warning">Submit</button>
    </div>
            {{--</div>--}}





                        {!! Form::close() !!}

                        <div id="podUpload" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Upload POD</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="/trucking/{{$trucking->id}}/pod" method="POST" id="podUpload" class="dropzone">
                                            {{csrf_field()}}
                                        </form>
                                        <div class="row">
                                            <p class="text-warning col-xs-10"><small>Drag and drop PDF file in the area above.</small></p>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        {{--</div>--}}
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    <script type="text/javascript">
        Dropzone.options.podUpload = {
            maxFilesize: 1, // MB
            maxFiles:1,
            addRemoveLinks:true,
            acceptedFiles:"application/pdf",
        };


    </script>
    {{--<script src="jquery-1.12.0.min.js"></script>--}}
    {{--<script>--}}
        {{--$("input[type=text]").hide();--}}
        {{--$('#visit').live('change', function () {--}}
            {{--if ((this.value) == 4) {--}}
                {{--$("input[type=text]").show();--}}
            {{--}--}}
            {{--else{--}}
                {{--$("input[type=text]").hide();--}}
            {{--}--}}
        {{--});--}}
    {{--</script>--}}



    {{--<script>--}}

        {{--$(function() {--}}

            {{--// run on change for the selectbox--}}
            {{--$( "#frm_duration" ).change(function() {--}}
                {{--updateDurationDivs();--}}
            {{--});--}}

            {{--// handle the updating of the duration divs--}}
            {{--function updateDurationDivs() {--}}
                {{--// hide all form-duration-divs--}}
                {{--$('.form-duration-div').hide();--}}

                {{--var divKey = $( "#frm_duration option:selected" ).val();--}}
                {{--$('#divFrm'+divKey).show();--}}
            {{--}--}}

            {{--// run at load, for the currently selected div to show up--}}
            {{--updateDurationDivs();--}}

        {{--});--}}
    {{--</script>--}}

@endsection

