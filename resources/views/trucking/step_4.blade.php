{{--<link rel="preload" type="text/css" href="/css/style.css" as="style" onload="this.rel='stylesheet'">--}}

@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Trucking Delivery</div>--}}

                    <div class="content-body">

                        <div id="four-arrows" class="arrow-steps clearfix hidden-xs">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-map-marker"></div><span>Location</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-list"></div><span>Breakdown</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-hourglass"></div><span>Availability</span> </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-sm-offset-3 hidden-xs">
                            @include('errors.list')
                        </div>

                        <div class="visible-xs">
                            @include('errors.list')
                        </div>


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
                                    {!! Form::text('out_for_delivery_date', null, ['class'=>'date form-control']) !!}
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
                                    {!! Form::label('trans_closed_date','Closed')  !!}
                                    {!! Form::text('trans_closed_date', null, ['class'=>'date form-control']) !!}
                                </div>

                                <div class="form-group col-xs-3">
                                    {!! Form::label('trans_closed_time','Time')  !!}
                                    {!! Form::text('trans_closed_time', null, ['placeholder'=>'12:00 AM','class'=>'form-control em-time-input em-time-single']) !!}

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
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>

    <script type="text/javascript">
        Dropzone.options.podUpload = {
            maxFilesize: 3, // MB
            maxFiles:5,
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

