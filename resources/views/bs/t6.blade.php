@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            单选
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">性别</label>

                    <div class="col-sm-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="genderMale" value="male" checked>
                                男
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" id="genderFemale" value="female">
                                女
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="genderOhNo" value="ohNo" disabled>
                                没有JJ
                            </label>
                        </div>
                    </div>
                </div>
            </form>

            <hr>

            <form class="form-horizontal">
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">性别</label>

                    <div class="col-sm-8">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="genderMale" value="male" checked>
                            男
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="genderFemale" value="female">
                            女
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadios" id="genderOhNo" value="ohNo" disabled>
                            没有JJ
                        </label>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            复选框
        </div>
        <div class="panel-body">

            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-2 control-label">多选</label>

                    <div class="col-sm-8">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                        </label>
                    </div>

                </div>

            </form>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            单选列表
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">性别</label>

                    <div class="col-sm-8">
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">男</option>
                            <option value="female">女</option>
                        </select>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading">
            多选列表
        </div>
        <div class="panel-body">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="habit" class="col-sm-2 control-label">爱好</label>

                    <div class="col-sm-8">
                        <select name="habit" id="habit" class="form-control" multiple="multiple">
                            <option value="basketball">蓝球</option>
                            <option value="football">足球</option>
                            <option value="song">唱歌</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </div>
@stop
