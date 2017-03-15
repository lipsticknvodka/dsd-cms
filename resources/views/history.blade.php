@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">History</div>

                    <div class="panel-body">
                        <div class="row">




                            @foreach($revisions as $revision )
{{--                                @if($revision->old_value = 'null'))--}}
                                <p class="history col-xs-12">
                                    <strong>{{$revision->user->name }}</strong> changed
                                    <strong>{{ $revision->key }}</strong> from
                                    <code>{{ $revision->old_value }}</code> to <code>{{ $revision->new_value }}</code> in {{$revision->revisionable_type}}
                                    <small>{{ $revision->created_at->diffForHumans() }}</small>
                                </p>
                                {{--@endif--}}
                            @endforeach

                            {{--@foreach($revisions as $history)--}}
                                {{--@if($history->key == 'created_at' && !$history->old_value)--}}
                                    {{--<li>{{ $history->userResponsible()->first_name }} created this resource at {{ $history->newValue() }}</li>--}}
                                {{--@else--}}
                                    {{--<li>{{ $history->userResponsible()->first_name }} changed {{ $history->fieldName() }} from {{ $history->oldValue() }} to {{ $history->newValue() }}</li>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                            {{--@foreach($account->revisionHistory as $history )--}}
                            {{--<p class="history col-xs-12">--}}
                            {{--<strong>{{$history->userResponsible()->name }}</strong> changed--}}
                            {{--<strong>{{ $history->fieldName() }}</strong> from--}}
                            {{--<code>{{ $history->oldValue() }}</code> to <code>{{ $history->newValue() }}</code>--}}
                            {{--<small>{{ $history->created_at->diffForHumans() }}</small>--}}
                            {{--</p>--}}
                            {{--@endforeach--}}


                        </div>

                        <div class="row">

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
