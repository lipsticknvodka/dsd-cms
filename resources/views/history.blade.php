@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="panel panel-default" id="content">
                    <div class="panel-heading">History</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($revisions as $history )
                                 @if(notNullValue($history->oldValue()))
                                    @if($history->key == 'created_at' && !$history->old_value)
                                        <p class="history col-xs-12">
                                            <strong>{{ $history->userResponsible()->name or 'A user' }}</strong>
                                            created a new record in the <strong>{{$history->revisonable_type}}</strong>
                                            <strong>{!! str_replace('App\\', ' ', $history->revisionable_type) !!}</strong> section.
                                            <small>{{ $history->created_at->diffForHumans() }}</small>
                                        </p>
                                    @else
                                    <p class="history col-xs-12">
                                         <strong>{{$history->userResponsible()->name or 'A user'}}</strong> changed
                                         <strong>{{ $history->fieldName() }}</strong> from
                                         <code>{{ $history->oldValue() }}</code> to <code>{{ $history->newValue() }}</code> in
                                         <strong>{{$history->revisonable_type}}</strong>
                                         <strong>{!! str_replace('App\\', ' ', $history->revisionable_type) !!}</strong>
                                         <small>{{ $history->created_at->diffForHumans() }}</small>
                                    </p>
@endif

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
