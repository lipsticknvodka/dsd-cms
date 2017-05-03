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
                            <div class="step"> <div class="glyphicon glyphicon-hourglass"></div><span>Availability</span> </div>
                        </div>

                        <div class="form-group col-xs-12 col-sm-6 col-sm-offset-3 hidden-xs">
                            @include('errors.list')
                        </div>

                        <div class="visible-xs">
                            @include('errors.list')
                        </div>

                        {!! Form::model($trucking) !!}

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="col-xs-12">
                            {{--<div class="row">--}}

                                {{--<div class="col-xs-6">--}}
                                    {{--<h4 class="col-xs-12">Pallets</h4>--}}
                                    <div class="form-group col-xs-6 col-sm-3">
                                        {!! Form::label('pallet_exchange_qty','Exchange')  !!}
                                        {!! Form::text('pallet_exchange_qty', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-xs-6 col-sm-3">
                                        {!! Form::label('pallet_shipper_qty','Shipper')  !!}
                                        {!! Form::text('pallet_shipper_qty', null, ['class'=>'form-control']) !!}
                                    </div>


                                {{--</div>--}}

                                {{--</div>--}}

                                {{--<div class="row-fluid">--}}

                                {{--<div class="col-xs-6">--}}
                                    {{--<h4 class="col-xs-12">Breakdown</h4>--}}
                                    <div class="form-group col-xs-4 col-sm-2">
                                        {!! Form::label('piece_ct','Pieces')  !!}
                                        {!! Form::text('piece_ct', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-xs-4 col-sm-2">
                                        {!! Form::label('weight_no','Weight')  !!}
                                        {!! Form::text('weight_no', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-xs-4 col-sm-2">
                                        {!! Form::label('weight_type','Type')  !!}
                                        {{--{!! Form::text('weight_type', null, ['class'=>'form-control']) !!}--}}
                                        {!! Form::select('weight_type', ['lb' => 'lb', 'kg' => 'kg'], null, ['class'=>'form-control']) !!}
                                    </div>
                                {{--</div>--}}
                            {{--</div>--}}


                        </div>

                        <hr/>

                        <div class="form-group col-xs-12">
                            {!! Form::label('overs_shorts_damages','Overs/Shortages/Damages')  !!}
                            {!! Form::textarea('overs_shorts_damages', null, ['class'=>'form-control']) !!}
                        </div>

                        <div class="row-fluid">

                            <div class="col-xs-4 col-sm-3">
                                <h4><strong>Exception</strong></h4>
                                <ul>

                                    {{--<li>{{$trucking->exception->path}}</li>--}}
                                    {{--<form method="POST" action="exception/{{$trucking->exception->id}}">--}}

                                    {{--{!! csrf_field() !!}--}}

                                    {{--<input type="hidden" name="_method" value="DELETE">--}}

                                    {{--<button type="submit" class="btn btn-danger">Delete</button>--}}

                                    {{--</form>--}}
                                </ul>
                                <a href="#exceptionsUpload" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add Exception</a>
                            </div>
                        </div>

                        <div class="row-fluid">

                            <div class="col-xs-12">
                                <h4><strong>Photos</strong></h4>
                                <ul>
                                    {{--@foreach($trucking->photos as $photo)--}}
                                    {{--<li>{{$photo->path}}</li>--}}
                                    {{--<form method="POST" action="file/{{$photo->id}}">--}}

                                    {{--{!! csrf_field() !!}--}}

                                    {{--<input type="hidden" name="_method" value="DELETE">--}}

                                    {{--<button type="submit" class="btn btn-danger">Delete</button>--}}

                                    {{--</form>--}}
                                    {{--@endforeach--}}
                                </ul>
                                <a href="#photosUpload" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add Photos</a>
                            </div>

                        </div>





                        {{--<div class="form-group">--}}
                            {{--{!! Form::label('exception','Exception')  !!}--}}
                            {{--<input type="file" name="attachments[]" multiple/>--}}
{{--                            {!! Form::file('exception', ['class'=>'form-control']) !!}--}}
                        {{--</div>--}}



                        <div class="input-group-md pull-right">
                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>

                        {!! Form::close() !!}

                        <div id="photosUpload" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Upload Photos</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="/trucking/{{$trucking->id}}/photos" method="POST" id="photoUpload" class="dropzone">
                                            {{csrf_field()}}
                                        </form>
                                        <div class="row">
                                            <p class="text-warning col-xs-10"><small>Drag and drop JPG, PNG, BMP, or GIF files in the area above.</small></p>
                                            <div class="col-xs-2">
                                                <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div id="exceptionsUpload" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Upload Exception</h4>
                                        </div>
                                        <div class="modal-body">

                                            <form action="/trucking/{{$trucking->id}}/exception" method="POST" id="exceptionUpload" class="dropzone">
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
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>



    <script type="text/javascript">
        Dropzone.options.photoUpload = {
//            paramName:'photo',
            maxFilesize: 2, // MB
            maxFiles:5,
            addRemoveLinks:true,
            acceptedFiles:".jpg,.jpeg,.png,.bmp,.gif",
        };

        Dropzone.options.exceptionUpload = {
            maxFilesize: 3, // MB
            maxFiles:2,
            addRemoveLinks:true,
            acceptedFiles:"application/pdf",
        };
    </script>
@endsection

