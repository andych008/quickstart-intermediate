@extends('layouts.bs')

@section('content')
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

    <div class="panel panel-default">
        <div class="panel-heading">
            table
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                <tr>
                    <th>name</th>
                    <th>gender</th>
                    <th>age</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>andy</td>
                    <td>男</td>
                    <td>28</td>
                </tr>
                <tr>
                    <td>tomy</td>
                    <td>男</td>
                    <td>29</td>
                </tr>
                <tr>
                    <td>Lily</td>
                    <td>女</td>
                    <td>23</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            表单
        </div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" action="t1" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                               placeholder="Please Input Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="inputPassword" id="inputPassword"
                               placeholder="Please Input Password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" class="btn btn-default"/>
                    </div>
                </div>
            </form>
            <div class="bg-info">
                @if (isset($request) && $request->isMethod('post'))
                    @foreach($request->except('_token') as $post)
                        <p>{{ substr($post, 0, 100) }}</p>
                    @endforeach

                    {{implode($request->all())}}
                @else
                    在这里显示提交内容
                @endif
            </div>


        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            文本框的前缀与后缀
        </div>
        <div class="panel-body">
        </div>
    </div>



@stop
