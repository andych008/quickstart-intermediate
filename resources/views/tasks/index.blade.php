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

                    {!! Form::open(array('url' => action("TaskController@store"), 'class' => 'form-horizontal')) !!}

                    @include('tasks.form')

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>

                    {!! Form::close() !!}

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
											<form action="{{action("TaskController@destroy", [$task->id])}}" method="POST">
												{{ csrf_field() }}
												{{ method_field('DELETE') }}

												<button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
													<i class="fa fa-btn fa-trash"></i>Delete
												</button>
											</form>
										</td>

										<!-- Task Edit Button -->
										<td>
                                            <a class="btn btn-danger" href="{{action("TaskController@edit", [$task->id])}}">
                                                <i class="fa fa-btn fa-edit"></i>Edit
                                            </a>
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
