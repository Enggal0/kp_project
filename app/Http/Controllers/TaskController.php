<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function create()
    {
        return view('dashboard'); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create($validated);

        return redirect()->route('dashboard')->with('success', 'Task berhasil ditambahkan!');
    }

    public function index()
    {
    $tasks = Task::latest()->get();

    return view('dashboard', compact('tasks'));
    }
}
