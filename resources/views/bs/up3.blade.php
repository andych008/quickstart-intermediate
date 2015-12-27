@extends('layouts.bs')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            表单laravelcollective/html
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

{{--                {!! Form::model($task, ['action'=>['BSDemoController@up3']]) !!}--}}
                {!! Form::open(array('url' => action("BSDemoController@up3"), 'class' => 'form-horizontal')) !!}
                <div class="form-group">
                    {!! Form::label('title','Email:', array('class' => 'col-sm-2 control-label')) !!}

                    <div class="col-sm-10">
                        {!! Form::email('inputEmail', '', array('class' => 'form-control','id' => 'inputEmail','placeholder' => 'Please Input Email')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('inputPassword','Password:', array('class' => 'col-sm-2 control-label')) !!}

                    <div class="col-sm-10">
                        {!! Form::password('inputPassword', array('class' => 'form-control','id' => 'inputPassword','placeholder' => 'Please Input Password')) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('finish_time','FinishTime:', array('class' => 'col-sm-2 control-label')) !!}

                    <div class="col-sm-10">
                        {!! Form::datetimeLocal('finish_time', \Carbon\Carbon::now(), array('class' => 'form-control','id' => 'finish_time')) !!}
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        {!! Form::submit('提交', array('class' => 'btn btn-default')) !!}
                    </div>
                </div>

                {!! Form::close() !!}

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
