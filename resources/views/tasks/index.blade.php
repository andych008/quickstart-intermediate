@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					New Task
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">Title</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
							</div>
						</div>

						<!-- Task Content -->
						<div class="form-group">
							<label for="task-content" class="col-sm-3 control-label">Content</label>

                            <div class="col-sm-6">
                                <textarea name="content" id="task-content" id="" cols="30"
                                          rows="10" value="{{ old('task') }}" class="form-control"></textarea>
                            </div>
						</div>

						<!-- Add Task Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Add Task
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<!-- Current Tasks -->
			@if (count($tasks) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						Current Tasks
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Task</th>
								<th>&nbsp;</th>
							</thead>
							<tbody>
								@foreach ($tasks as $task)
									<tr>
										<td class="table-text">
											<div><a href="/tasks/{{$task->id}}">{{ $task->name }}</a></div>
										</td>
										<td class="table-text">
											<div><a href="{{url('tasks',$task->id)}}">{{ $task->name }}</a></div>
										</td>
										 {{--推荐这种，把路由信息分离 --}}
										<td class="table-text">
											<div>
												<a href="{{action("TaskController@show", $task->id)}}">{{ $task->name }}</a>
											</div>
										</td>
										<td class="table-text">
											<div>
												<a href="{{action("TaskController@show", [$task->id])}}">{{ $task->name }}</a>
											</div>
										</td>

										<!-- Task Delete Button -->
										<td>
											<form action="/task/{{ $task->id }}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
													<i class="fa fa-btn fa-trash"></i>Delete
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
