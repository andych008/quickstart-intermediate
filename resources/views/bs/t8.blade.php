@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            session
        </div>
        <div class="panel-body">
            <pre>{{json_encode(Session::all(), JSON_PRETTY_PRINT)}}</pre>
            <hr>
            @foreach(Session::all() as $key=>$value)
                <pre class="col-sm-3">{{$key}}</pre> <div class="col-sm-1"> </div>
                <pre>{{json_encode($value, JSON_PRETTY_PRINT)}}</pre>
            @endforeach

        </div>
    </div>

@stop
