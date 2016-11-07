<h1>Step 2</h1>

@include('errors.list')

{!! Form::model($account) !!}
{{--{!! Form::label('color', 'What is your favorite color?') !!}<br>--}}
{{--{!! Form::text('color') !!}<br>--}}
<div class="row" id="progress-bar">
    <img src="/images/dsd-admin-icons/progress-bars/new-acct-2.png" class="img-responsive">
</div>
<div class="form-group">
    {!! Form::label('bill_to','Bill To')  !!}
    {!! Form::text('bill_to', null, ['class'=>'form-control']) !!}
    {{csrf_field()}}
</div>

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
        {!! Form::text('state', null, ['class'=>'form-control']) !!}
    </div>
</div>
<button type="submit">Submit</button>
{!! Form::close() !!}