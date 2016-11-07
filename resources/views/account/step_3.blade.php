<h1>Step 3</h1>

@include('errors.list')

{!! Form::model($account) !!}


<div class="row" id="progress-bar">

    <img src="/images/dsd-admin-icons/progress-bars/new-acct-3.png" class="img-responsive">

</div>
<div class="form-group">
    {!! Form::label('phone','Phone')  !!}
    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    {{csrf_field()}}
</div>

<div class="form-group">
    {!! Form::label('fax','Fax')  !!}
    {!! Form::text('fax', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('primary_contact','Primary Contact')  !!}
    {!! Form::text('primary_contact', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email','Email')  !!}
    {!! Form::text('email', null, ['class'=>'form-control']) !!}
</div>
<button type="submit">Submit</button>
{!! Form::close() !!}