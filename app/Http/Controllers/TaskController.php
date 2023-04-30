<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $task = new Task;  
        return view('tasks', ['tasks' => $task->orderBy('id', 'desc')->get()]);
    }

    public function insert(Request $request) {
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->status = $request->input('status');

        $task->save();

        return redirect()->route('tasks');
    }

    public function showTask($id) {
        return view('taskId', ['task' => Task::find($id)]);
    }

    public function editTask($id, Request $request) {
        $task = Task::find($id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->status = $request->input('status');

        $task->save();

        return redirect()->route('tasks');
    }

    public function deleteTask($id) {
        Task::find($id)->delete();
        return redirect()->route('tasks');
    }
}