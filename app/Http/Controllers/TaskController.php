<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use Illuminate\Support\Facades\Response;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     * @return void
     */
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        //总共4种写法，传递参数给view
        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
        ]);

//        $tasks = $this->tasks->forUser($request->user());
//        $arg2 = "第二个参数，只是示例";
//        return view('tasks.index', compact('tasks', 'arg2'));//接受多个参数

//        return view('tasks.index')->with('tasks', $this->tasks->forUser($request->user()));

//        return view('tasks.index')->with(['tasks' => $this->tasks->forUser($request->user())]);
    }

    public function show(Request $request, $id)
    {
        $task = $this->tasks->forUserById($request->user(), $id);
        return view('tasks.show', ['task'=> $task]);
    }

    public function edit(Request $request, $id)
    {
        $task = $this->tasks->forUserById($request->user(), $id);
        return view('tasks.edit', ['task'=> $task]);
    }

    public function search(Request $request, $name)
    {
        $task = $this->tasks->forUserByName($request->user(), $name);
//        print $task->toJson();
        return Response::json($task);
    }

    /**
     * Create a new task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

//        //不会绑定user_id
//        Task::create($request->all());

//        //finish_time有，但是不是我们想要的
//        //$request->input('name')
//        $request->user()->tasks()->create([
//            'name' => $request->input('name'),
//            'content' => $request->input('content'),
//            'finish_time' => Carbon::now(),
//        ]);


        $request->user()->tasks()->create([
//            'name' => $request->name,
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'finish_time' => $request->input('finish_time'),
        ]);

        return redirect('/tasks');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $task = $this->tasks->forUserById($request->user(), $id);
        $task->update([
            'name' => $request->input('name'),
            'content' => $request->input('content'),
            'finish_time' => $request->input('finish_time'),
        ]);

        return redirect('/tasks');
    }

    public function destroy(Request $request, $id)
    {
        $task = $this->tasks->forUserById($request->user(), $id);
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect('/tasks');
    }
}
