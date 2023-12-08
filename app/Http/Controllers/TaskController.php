<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index', ['title' => 'Tasques', 'tasks' => \App\Models\Task::all(), 'name' => request('name'), 'surname' => request('surname')]);
    }
}
