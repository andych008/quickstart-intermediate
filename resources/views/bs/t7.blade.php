@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            可作为按钮使用的标签或元素为 {{'<a>、<button> 或 <input>'}} 元素添加按钮类（button class）即可使用 Bootstrap 提供的样式。
        </div>
        <div class="panel-body">
            <a class="btn btn-default" href="#" role="button">Link</a>
            <button class="btn btn-default" type="submit">Button</button>
            <input class="btn btn-default" type="button" value="Input">
            <input class="btn btn-default" type="submit" value="Submit">
            <br>
            <button class="btn btn-sm" type="submit">Button</button>

            <div class="btn-group">
                <button type="button" class="btn btn-sm">Button1</button>
                <button type="button" class="btn btn-sm">Button2</button>
            </div>
        </div>
    </div>

@stop
