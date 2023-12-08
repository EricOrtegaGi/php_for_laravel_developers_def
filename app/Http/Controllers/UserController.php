<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users', ['title' => 'Usuaris', 'users' => \App\Models\User::all(), 'name' => request('name'), 'surname' => request('surname')]);
    }
}
