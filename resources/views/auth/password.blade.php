@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					找回密码
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

                    {!! Form::open(array('url' => '/password/email', 'class' => 'form-horizontal')) !!}

                    <div class="form-group">
                        {!! Form::label('email','E-Mail', array('class' => 'col-sm-3 control-label')) !!}

                        <div class="col-sm-6">
{{--                            {!! Form::email('email', null, array('class' => 'form-control', 'value' => old('email') )) !!}--}}
                            {!! Form::email('email', $email, array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-send"></i>发送密码重置链接
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
@endsection
