<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TaskRepository;
use App\Models\Task;
use App\Http\Requests\RequestTask;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    protected $tasks;

    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    public function index(Request $request)
    {
        return view('tasks.index',[
            'tasks' => $this->tasks->forUser($request->user()),
            'id' => Auth::user()->id,
        ]);
    }

    public function store(RequestTask $request, $id)
    {
        $data = $request->all();
        $task = $this->tasks->store($data, $id);

        return redirect()->route('all.tasks');
    }

    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);

        $task->delete();

        return redirect()->route('all.tasks');
    }
}
