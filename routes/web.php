<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Counter;
use App\Livewire\Posts\Posts;
use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\UpdatePost;
use App\Livewire\Products\Products;
use App\Livewire\Todos\TodoForm;
use App\Livewire\Todos\Todos;
use App\Livewire\Toggle;
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
Route::get('/posts/edit/{post}', UpdatePost::class);
Route::get('/todos', Todos::class);
Route::get('/login', Login::class);
Route::get('/register', Register::class);
Route::get('/toggle', Toggle::class);
Route::get('/products', Products::class);
