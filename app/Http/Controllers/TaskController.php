<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Requests\UpdateRequest;


class TaskController extends Controller
{
    public function index()
    {   
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(TaskRequest $request) {
        $validatedData = $request->validated();
        Task::create($validatedData);
        return redirect('/tasks');
    }

    public function show(Task $task) {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task) {
        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateRequest $request, Task $task) {
        $validatedData = $request->validated();
        $task->update($validatedData);
        return redirect("/tasks/{$task->id}");
    }

    public function delete(Task $task) {
        $task->delete();
        return redirect('/tasks');           
    }


}
