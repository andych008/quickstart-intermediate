@extends('layouts.bs')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                abbr、引用bq、pull-right
            </div>
            <div class="panel-body">
                <p><abbr class="initialism" title="Content Management System">cms</abbr>是非常更要的.</p>
                <blockquote class="pull-right">
                    <p>我是被引用的内容。
                        <small>来自<cite>百度</cite></small>
                    </p>
                </blockquote>
            </div>
        </div>


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

    </div>
@stop
