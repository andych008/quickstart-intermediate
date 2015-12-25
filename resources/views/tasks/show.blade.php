@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$task->name}}
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <div class="panel-info">
                        {{$task->content}}
                    </div>
                    <pre>{{json_encode($task, JSON_PRETTY_PRINT)}}</pre>
                </div>
            </div>
        </div>
@endsection
