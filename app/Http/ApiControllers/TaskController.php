<?php

namespace App\Http\ApiControllers;

use App\Http\Requests;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
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
        $this->tasks = $tasks;
    }


    public function hello()
    {
        return 'hello';
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return $this->tasks->forUser($request->user())->toJson();
//        return $this->tasks->forUser($request->user())->toJson(JSON_PRETTY_PRINT);
//        return Response::json($this->tasks->forUser($request->user()));

    }

}
