@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Account</div>--}}

                    <div class="content-body">

                        <div class="arrow-steps clearfix">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-credit-card"></div><span>Billing</span> </div>
                            <div class="step"> <div class="glyphicon glyphicon-phone-alt"></div><span>Contact</span> </div>
                            {{--<div class="step"> <span>Step 4</span> </div>--}}
                        </div>

                        @include('errors.list')

                        {!! Form::model($account) !!}


                        <div class="row-fluid">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('bill_to','Bill To')  !!}
                                    {!! Form::text('bill_to', null, ['class'=>'form-control']) !!}
                                    {{csrf_field()}}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('attn_to','Attention')  !!}
                                    {!! Form::text('attn_to', null, ['class'=>'form-control']) !!}
                                    {{csrf_field()}}
                                </div>


                                <div class="row-fluid">
                                    <h4><strong>Rates</strong></h4>
                                    <ul>
                                        @foreach($account->rates as $rate)
                                            <li>{{$rate->path}}</li>
                                            {{--<form method="POST" action="file/{{$rate->id}}">--}}

                                            {{--{!! csrf_field() !!}--}}

                                            {{--<input type="hidden" name="_method" value="DELETE">--}}

                                            {{--<button type="submit" class="btn btn-danger">Delete</button>--}}

                                            {{--</form>--}}
                                        @endforeach
                                    </ul>
                                </div>

                                <a href="#ratesUpload" role="button" class="btn btn-large btn-primary" data-toggle="modal">Add Rates</a>

                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    {!! Form::label('address_1','Street Address')  !!}
                                    {!! Form::text('address_1', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('address_2','Apt/Suite No.')  !!}
                                    {!! Form::text('address_2', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('city','City')  !!}
                                    {!! Form::text('city', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('zip','Zip')  !!}
                                        {!! Form::text('zip', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group col-xs-6">
                                        {!! Form::label('state','State')  !!}
                                        {{--                                {!! Form::selectMonth('month'); !!}--}}
                                        {{--{!! Form::text('state', null, ['class'=>'form-control']) !!}--}}


                                        {!! Form::select('state',array(
                                       'AL'=>'Alabama',
                                       'AK'=>'Alaska',
                                       'AZ'=>'Arizona',
                                       'AR'=>'Arkansas',
                                       'CA'=>'California',
                                       'CO'=>'Colorado',
                                       'CT'=>'Connecticut',
                                       'DE'=>'Delaware',
                                       'DC'=>'District of Columbia',
                                       'FL'=>'Florida',
                                       'GA'=>'Georgia',
                                       'HI'=>'Hawaii',
                                       'ID'=>'Idaho',
                                       'IL'=>'Illinois',
                                       'IN'=>'Indiana',
                                       'IA'=>'Iowa',
                                       'KS'=>'Kansas',
                                       'KY'=>'Kentucky',
                                       'LA'=>'Louisiana',
                                       'ME'=>'Maine',
                                       'MD'=>'Maryland',
                                       'MA'=>'Massachusetts',
                                       'MI'=>'Michigan',
                                       'MN'=>'Minnesota',
                                       'MS'=>'Mississippi',
                                       'MO'=>'Missouri',
                                       'MT'=>'Montana',
                                       'NE'=>'Nebraska',
                                       'NV'=>'Nevada',
                                       'NH'=>'New Hampshire',
                                       'NJ'=>'New Jersey',
                                       'NM'=>'New Mexico',
                                       'NY'=>'New York',
                                       'NC'=>'North Carolina',
                                       'ND'=>'North Dakota',
                                       'OH'=>'Ohio',
                                       'OK'=>'Oklahoma',
                                       'OR'=>'Oregon',
                                       'PA'=>'Pennsylvania',
                                       'RI'=>'Rhode Island',
                                       'SC'=>'South Carolina',
                                       'SD'=>'South Dakota',
                                       'TN'=>'Tennessee',
                                       'TX'=>'Texas',
                                       'UT'=>'Utah',
                                       'VT'=>'Vermont',
                                       'VA'=>'Virginia',
                                       'WA'=>'Washington',
                                       'WV'=>'West Virginia',
                                       'WI'=>'Wisconsin',
                                       'WY'=>'Wyoming',
                                       ),null, ['class'=>'form-control'])
                                        !!}
                                    </div>
                                </div>


                            </div>

                            <div class="col-xs-12">
                                <div class="input-group-md pull-right">
                                    <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>

                                    <button type="submit" class="btn btn-warning">Continue</button>

                                </div>
                                {!! Form::close() !!}

                            </div>


                        </div>





                        <div id="ratesUpload" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Upload Rates</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="/account/{{$account->id}}/file" method="POST" id="ratesPdf" class="dropzone">
                                            {{csrf_field()}}
                                        </form>
                                        <div class="row">
                                        <p class="text-warning col-xs-10"><small>Drag and drop PDF files in the area above.</small></p>
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
    </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>


        <script type="text/javascript">
            Dropzone.options.ratesPdf = {
                maxFilesize: 1, // MB
                maxFiles:3,
                addRemoveLinks:true,
                acceptedFiles:"application/pdf",
            };
        </script>
@endsection

{{--@yield('scripts.footer')--}}
