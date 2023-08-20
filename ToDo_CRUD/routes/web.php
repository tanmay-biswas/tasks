<?php

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

Route::get('/todo', 'todo@index')->name('todo_list');
Route::get('/todo_add', 'todo@add')->name('todo_add');
Route::post('/todo_action', 'todo@store')->name('todo_action');
Route::get('/todo_view/{id}', 'todo@view')->name('todo_view');
Route::get('/todo_edit/{id}','todo@edit')->name('todo_edit');
Route::post('/todo_update','todo@update')->name('todo_update');
Route::get('/todo_delete/{id}','todo@delete')->name('todo_delete');
