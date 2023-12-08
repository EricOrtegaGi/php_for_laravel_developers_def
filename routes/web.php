<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contacte', 'name' => request('name'), 'surname' => request('surname')]);
})->name('contact');

Route::get('/about', function () {
    return view('about', ['title' => 'Sobre nosaltres', 'name' => request('name'), 'surname' => request('surname')]);
})->name('about');
