@extends('layouts.bs')

@section('content')
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
            <form class="form-horizontal" action="up" method="post">
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
@stop
