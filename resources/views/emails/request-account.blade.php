<h3>New Account Request</h3>

<div>
    <p>You have received a new account request from <a href="www.dsdcompanies.com/request-account"> www.dsdcompanies.com/request-account</a>.</p>
    <p><strong>Name </strong>{{ $name }}</p>
    <p><strong>Email </strong>{{ $email }}</p>
    <p><strong>Phone </strong>{{ $phone }}</p>
    <p><strong>Company </strong>{{ $company }}</p>
    <p><strong>Service Type </strong>{{ $service_type }}</p>
    @if(!empty($comments))
        <p><strong>Comments </strong>{{ $comments }}</p>
    @endif
</div>

{{--<p>Requested by {{ $email }}</p>--}}