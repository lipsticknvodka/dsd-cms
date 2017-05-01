@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">History</div>

                    <div class="panel-body">
                        <div class="row">

                            {{--@foreach($revisions as $revision )--}}
                                {{--@if($revisions->old_value != 'null' && !empty($revisions->old_value ))--}}
                                    {{--<p class="history col-xs-12">--}}
                                        {{--<strong>{{$revision->user->name or 'Null user'}}</strong> changed--}}
                                        {{--<strong>{{ $revision->key or 'blank'}}</strong> from--}}
                                        {{--<code>{{ $revision->old_value or 'blank'}}</code> to <code>{{ $revision->new_value or 'blank' }}</code> in {{$revision->revisionable_type or 'revision type'}}--}}
{{--                                        <small>{{ $revision->created_at->diffForHumans() or 'created at' }}</small>--}}
                                    {{--</p>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                            {{--@foreach($revisions as $history )--}}
                                {{--<li>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from {{ $history->oldValue() }} to {{ $history->newValue() }}</li>--}}
                            {{--@endforeach--}}

                            {{--@foreach($revisions as $history )--}}
                                {{--<p class="history">--}}
                                    {{--{{ $history->created_at->diffForHumans() }}, {{ $history->userResponsible()->name }} changed--}}
                                    {{--<strong>{{ $history->fieldName() }}</strong> from--}}
                                    {{--<code>{{ $history->oldValue() }}</code> to <code>{{ $history->newValue() }}</code>--}}
                                {{--</p>--}}
                            {{--@endforeach--}}

                {{--@if($revisions)--}}
                            {{--@foreach($revisions as $history)--}}
                                {{--@if($history->key == 'created_at' && !$history->old_value)--}}
                                    {{--<li>{{ $history->userResponsible()->first_name }} created this resource at {{ $history->newValue() }}</li>--}}
                                {{--@else--}}
                                    {{--<li>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from {{ $history->oldValue() }} to {{ $history->newValue() }}</li>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                {{--@endif--}}
                            @foreach($revisions as $history )
                                 @if(!empty($history->oldValue()))
                                {{--@if(!empty($history->old_value && $history->userResponsible()->name) && $history->oldValue() != 'null')--}}
                            {{--<p class="history col-xs-12">--}}
                                <strong>{{$history->userResponsible()->name or 'A user'}}</strong> changed
                                 <strong>{{ $history->fieldName() }}</strong> from
                                <code>{{ $history->oldValue() }}</code> to <code>{{ $history->newValue() }}</code> in
                                <strong>{{$history->revisonable_type}}</strong>
                                <strong>{!! str_replace('App\\', ' ', $history->revisionable_type) !!}</strong>
                            <small>{{ $history->created_at->diffForHumans() }}</small>
                            {{--</p>--}}
                                @endif
                            @endforeach

                        </div>

                        <div class="row">
<hr/>
                            <div class="col-xs-12">
                                {!! $revisions->render() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
