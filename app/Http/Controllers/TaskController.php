<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function addTask()
    {
        return view("add-task");
    }

    public function saveTask(Request $request)
    {
        $incomingFields = $request->validate([
            "title" => "required",
            "task" => "required"
        ]);
        Task::create($incomingFields);
        return redirect('/home');
    }

    public function taskList()
    {
        $tasks = Task::all();
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
        $task->title = $incomingFields['title'];
        $task->task = $incomingFields['task'];
        $task->save();
        return redirect("/task-list");
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
        return redirect("/task-list");
    }
}
