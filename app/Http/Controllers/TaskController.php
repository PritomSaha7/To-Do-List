<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class TaskController extends Controller
{
    public function addTask()
    {
        Cache::forget("task-list-key");
        return view("add-task");
    }

    public function saveTask(Request $request)
    {
        $incomingFields = $request->validate([
            "title" => "required",
            "task" => "required"
        ]);
        Task::create($incomingFields);
        Mail::to("pritomsaha17010@gmail.com")->queue(new SendMail($request->title, $request->task));
        return redirect('/home');
    }

    public function taskList()
    {
        // $tasks = Task::all();
        $tasks = Cache::remember('task-list-key', 30000, function () {
            Log::info('Data is coming from Database!!');
            return Task::all();
        });

        Log::info('Data is coming from either Cache or from Database');
        return view('task-list', ['tasks' => $tasks]);
    }

    public function editTask(Task $task)
    {
        return view("edit-task", ["task" => $task]);
    }

    public function updateTask(Request $request, Task $task)
    {
        $incomingFields = $request->validate([
            "title" => "required",
            "task" => "required",
        ]);
        Cache::forget("task-list-key");
        $task->title = $incomingFields['title'];
        $task->task = $incomingFields['task'];
        $task->save();
        return redirect("/task-list");
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        Cache::forget("task-list-key");
        return redirect("/task-list");
    }
}
