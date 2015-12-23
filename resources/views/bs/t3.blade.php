@extends('layouts.bs')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            代码
            <small>{{ '<code>与<pre>标签的使用'}}</small>
        </div>
        <div class="panel-body">
            <p><code>{{ '<code>'}}</code>和<code>{{ '<pre>'}}</code>的使用：<pre>
{{ '<div class="panel panel-default">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
    </div>
</div>'}}
</pre>
            </p>
        </div>
    </div>

@stop
