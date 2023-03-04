<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;

Route::get('/', function () {
    return view('pages.todo');
});

Route::get('/ShowList', function () {
    return view('pages.list');
});

Route::get('/404', function () {
    return view('pages.404');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::view('NewTodo', 'todo');
Route::post('NewTodo', [TodoController::class, 'NewTodo']);

Route::get('ShowList', [TodoController::class, 'ShowLIst']);

Route::get('delete/{id}' , [TodoController::class, 'DeleteTodo']);  //Delete Todo

//--------------------EDIT TO-DO----------------------------
Route::get('edit/{id}', [TodoController::class, 'show']);
Route::post('edit/{id}', [TodoController::class, 'EditTodo']);