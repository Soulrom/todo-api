<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Показати список всіх задач.
     */
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    /**
     * Створити нову задачу.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in progress,completed',
        ]);

        $task = Task::create($validated);
        return response()->json($task, 201);
    }

    /**
     * Показати конкретну задачу.
     */
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json($task);
    }

    /**
     * Оновити задачу.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in progress,completed',
        ]);

        $task = Task::findOrFail($id);
        $task->update($validated);
        return response()->json($task);
    }

    /**
     * Видалити задачу.
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}
