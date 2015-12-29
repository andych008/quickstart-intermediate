@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Reset Password
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

                    {!! Form::open(array('url' => '/password/reset', 'class' => 'form-horizontal')) !!}

                    {!! Form::hidden('token',$token) !!}

                    <div class="form-group">
                        {!! Form::label('email','E-Mail', array('class' => 'col-sm-3 control-label')) !!}

                        <div class="col-sm-6">
                            {!! Form::email('email', old('email'), array('class' => 'form-control')) !!}
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-6">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <!-- Confirm -->
                    <div class="form-group">
                        <label for="password_confirmation" class="col-sm-3 control-label">Confirm</label>

                        <div class="col-sm-6">
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-ok"></i>OK
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
@endsection
