<h1>Step 1</h1>

@include('errors.list')


@include('errors.list')

{!! Form::open() !!}


<div class="row" id="progress-bar">

    <img src="/images/dsd-admin-icons/progress-bars/new-acct-1.png" class="img-responsive">

</div>
<div class="form-group">
    {!! Form::label('account_no','Account Number')  !!}
    {!! Form::text('account_no', null, ['class'=>'form-control']) !!}

    {{csrf_field()}}
</div>

<div class="form-group">
    {!! Form::label('name','Customer Name')  !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">
    {!! Form::label('acct_type','Account Type')  !!}
    {!! Form::select('acct_type', ['cfs' => 'CFS', 'trucking' => 'Trucking'], null, ['class'=>'form-control']) !!}
</div>

<button type="submit">Submit</button>
{!! Form::close() !!}


{{--{!! Form::model($account) !!}--}}
{{--{!! Form::label('name', 'What is your name?') !!}<br>--}}
{{--{!! Form::text('name') !!}<br>--}}
