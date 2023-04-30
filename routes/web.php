<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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
    return view('home');
});

Auth::routes();

Route::get('/tasks','App\Http\Controllers\TaskController@index' ); //Вывод всех задач
Route::get('/tasks/{id}','App\Http\Controllers\TaskController@showTask' ); //Вывод конкретной задачи
Route::put('/tasks/{id}','App\Http\Controllers\TaskController@editTask' )->name('task-edit'); //Редактирование задачи
Route::post('/tasks','App\Http\Controllers\TaskController@insert' ); //Добавление задачи
Route::delete('/tasks/{id}','App\Http\Controllers\TaskController@deleteTask' )->name('task-delete'); //Добавление задачи

Route::get('/tasks', 'App\Http\Controllers\TaskController@index');