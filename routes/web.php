<?php

use App\Livewire\Posts\Posts;
use App\Livewire\Posts\CreatePost;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list', function () {
    return '<h1>List</h1>';
});

Route::get('/posts', Posts::class);
Route::get('/posts/create', CreatePost::class);