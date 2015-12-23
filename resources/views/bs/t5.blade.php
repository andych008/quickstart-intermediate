@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            文本框的前缀与后缀
        </div>
        <div class="panel-body">

            <h2>input-group input-group-addon的组合效果</h2>

            <div class="input-group">
                <span class="input-group-addon">&yen;</span>
                <input class="form-control" type="text"/>
                <span class="input-group-addon">.00</span>
            </div>

            <h2>input-group input-group-addon form-group 的组合效果</h2>

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="input-group col-sm-5">
                        <input type="email" class="form-control" name="inputEmail" id="inputEmail"
                               placeholder="Please Input Email">
                        <span class="input-group-addon">@163.com</span>
                    </div>
                </div>

            </form>

            <h2>input-group input-group-addon form-group form-inline的组合效果</h2>

            <form class="form-inline">
                <div class="form-group">
                    {{--sr-only向使用辅助技术的用户传达用意，不会显示--}}
                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>

                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">

                        <div class="input-group-addon">.00</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Transfer cash</button>
            </form>


        </div>
    </div>
@stop
