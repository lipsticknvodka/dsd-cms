@extends('layouts.app')

@section('content')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}

    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                {{--<div class="panel panel-default" id="content">--}}
                    {{--<div class="panel-heading">Create New Trucking Delivery</div>--}}

                    <div class="content-body">

                        <div id="trucking" class="arrow-steps clearfix" id="four-arrows">
                            <div class="step current"><div class="glyphicon glyphicon-folder-open"></div><span>General</span> </div>
                            <div class="step current"> <div class="glyphicon glyphicon-map-marker"></div><span>Location</span> </div>
                            <div class="step"> <div class="glyphicon glyphicon-list"></div><span>Breakdown</span> </div>
                            <div class="step"> <div class="glyphicon glyphicon-hourglass"></div><span>Availability</span> </div>
                        </div>
                        @include('errors.list')

                        {!! Form::model($trucking) !!}

                        <div class="row-fluid">
                            <div class="col-xs-6">
                                <h4>Shipper Details</h4>
                                <div class="form-group">
                                    {!! Form::label('shipper_name','Name')  !!}
                                    {!! Form::text('shipper_name', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('shipper_address_1','Address 1')  !!}
                                    {!! Form::text('shipper_address_1', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('shipper_address_2','Address 2')  !!}
                                    {!! Form::text('shipper_address_2', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('shipper_city','City')  !!}
                                    {!! Form::text('shipper_city', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('shipper_state','State')  !!}
                                        {{--                                {!! Form::selectMonth('month'); !!}--}}
                                        {{--{!! Form::text('state', null, ['class'=>'form-control']) !!}--}}


                                        {!! Form::select('shipper_state',array(
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

                                    <div class="form-group col-xs-6">
                                        {!! Form::label('shipper_zip','Zip')  !!}
                                        {!! Form::text('shipper_zip', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>

                                <div class="row-fluid">
                                    <div class="form-group">
                                        {!! Form::label('shipper_contact','Contact')  !!}
                                        {!! Form::text('shipper_contact', null, ['class'=>'form-control']) !!}
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('shipper_phone','Phone')  !!}
                                        {!! Form::text('shipper_phone', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>


                            </div>

                            <div class="col-xs-6">
                                <h4>Final Destination</h4>

                                <div class="form-group">
                                    {!! Form::label('destination_address_1','Address 1')  !!}
                                    {!! Form::text('destination_address_1', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('destination_address_2','Address 2')  !!}
                                    {!! Form::text('destination_address_2', null, ['class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('destination_city','City')  !!}
                                    {!! Form::text('destination_city', null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-6">
                                        {!! Form::label('destination_state','State')  !!}
                                        {{--                                {!! Form::selectMonth('month'); !!}--}}
                                        {{--{!! Form::text('state', null, ['class'=>'form-control']) !!}--}}


                                        {!! Form::select('destination_state',array(
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

                                    <div class="form-group col-xs-6">
                                        {!! Form::label('destination_zip','Zip')  !!}
                                        {!! Form::text('destination_zip', null, ['class'=>'form-control']) !!}
                                    </div>
                                </div>


                                {{--TOGGLE HERE--}}

                                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#cargo-location">Enter Cargo Location</button>
                                <div id="cargo-location" class="collapse">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <h4>Cargo Location</h4>
                                            {!! Form::label('location_address_1','Address 1')  !!}
                                            {!! Form::text('location_address_1', null, ['class'=>'form-control']) !!}
                                        </div>


                                        <div class="form-group">
                                            {!! Form::label('location_address_2','Address 2')  !!}
                                            {!! Form::text('location_address_2', null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="form-group">
                                            {!! Form::label('location_city','City')  !!}
                                            {!! Form::text('location_city', null, ['class'=>'form-control']) !!}
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-xs-6">
                                                {!! Form::label('location_state','State')  !!}
                                                {!! Form::select('location_state',array(
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
                                               ),null, ['class'=>'form-control col-xs-6'])
                                                !!}
                                            </div>

                                            <div class="form-group col-xs-6">
                                                {!! Form::label('location_zip','Zip')  !!}
                                                {!! Form::text('location_zip', null, ['class'=>'form-control']) !!}
                                            </div>

                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>

                        {{--</div>--}}

                        <div class="input-group-md pull-right">
                            <a id="back-btn" class="btn btn-warning" href="{{ URL::previous() }}">Back</a>
                            <button type="submit" class="btn btn-warning">Submit</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            {{--</div>--}}
    </div>

@endsection

