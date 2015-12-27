@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Edit Task
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

							<!-- New Task Form -->

					{!! Form::model($task, array('url' => action("TaskController@update", $task->id), 'method' => 'PATCH', 'class' => 'form-horizontal')) !!}

					@include('tasks.form')

					<!-- Add Task Button -->
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-btn fa-save"></i>Save Task
							</button>
						</div>
					</div>

					{!! Form::close() !!}
				</div>
			</div>

		</div>
	</div>
@endsection
