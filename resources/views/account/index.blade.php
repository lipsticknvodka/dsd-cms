<h1>Welcome to Account Creation</h1>

@include('errors.list')

{!! Form::open() !!}
{!! Form::label('account_no', 'account_no') !!}<br>
{!! Form::text('account_no') !!}<br>
<button type="submit">Submit</button>
{!! Form::close() !!}
