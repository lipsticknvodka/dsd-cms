<h3>New Contact Form Inqury</h3>

<div>
    <p>You have received a new inquiry from <a href="www.dsdcompanies.com/contact"> www.dsdcompanies.com/contact</a>.</p>
    <p><strong>Name </strong>{{ $name }}</p>
    <p><strong>Email </strong>{{ $email }}</p>
    <p><strong>Phone </strong>{{ $phone }}</p>
    <p><strong>Company Name </strong>{{ $company }}</p>
    {{--<p><strong>Subject </strong>{{ $subject }}</p>--}}
    <p><strong>Message Body </strong>{{ $messageBody }}</p>

    {{--@if(!empty($length2 & $height2 & $height2))--}}
        {{--<p><strong>Package 2</strong><strong> L </strong>{{ $length2 }}<small> in</small> <strong> W </strong>{{ $width2 }}<small> in</small><strong> H </strong>{{ $height2 }}<small> in</small></p>--}}
    {{--@endif--}}
    {{--@if(!empty($length3 & $height3 & $height3))--}}
        {{--<p><strong>Package 3</strong><strong> L </strong>{{ $length3 }}<small> in</small> <strong> W </strong>{{ $width3 }}<small> in</small><strong> H </strong>{{ $height3 }}<small> in</small></p>--}}
    {{--@endif--}}
    {{--<p>{{ $numPieces }} <small>pcs</small> | {{ $weight }} <small>lbs</small></p>--}}
    {{--<p><strong>Origin Zip </strong>{{ $originZip }}</p>--}}
    {{--<p><strong>Destination Zip </strong>{{ $destinationZip }}</p>--}}

    {{--@if(!empty($comments))--}}
        {{--<p><strong>Comments </strong>{{ $comments }}</p>--}}
    {{--@endif--}}
</div>

{{--<p>Requested by {{ $email }}</p>--}}