@extends('layouts.bs')

@section('content')
    <div class="container">
        <h1 class="page-header">abbr、引用bq、pull-right</h1>
        <p><abbr class="initialism" title="Content Management System">cms</abbr>是非常更要的.</p>


        <blockquote class="pull-right">
            <p>我是被引用的内容。
                <small>来自<cite>百度</cite></small>
            </p>
        </blockquote>

        <h1 class="page-header">列表 <small>无序、有序、描述列表</small></h1>
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

        <h1 class="page-header">代码<small>{{ '<code>与<pre>标签的使用'}}</small></h1>
        <p><code>{{ '<code>'}}</code>的使用：<code>printf("hello");</code></p>
    </div>
@stop
