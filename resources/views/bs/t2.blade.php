@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            列表
            <small>无序、有序、描述列表</small>
        </div>
        <div class="panel-body">
            <h2>无序列表</h2>
            <ul>
                <li>andy</li>
                <li>tomy</li>
                <li>jimy</li>
            </ul>
            <h2>有序列表</h2>
            <ol>
                <li>andy</li>
                <li>tomy</li>
                <li>jimy</li>
            </ol>
            <h2>描述列表，dl-horizontal对齐效果</h2>
            <dl class="dl-horizontal">
                <dt>andy</dt>
                <dd>这个小伙是最帅的！</dd>
                <dt>tomy</dt>
                <dt>jimy</dt>
            </dl>
        </div>
    </div>

@stop
