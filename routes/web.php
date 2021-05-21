<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index', 'Backend\CustomerController@index');
    Route::get('create', 'Backend\CustomerController@create');
    Route::post('store', 'Backend\CustomerController@store');
    Route::get('show/{id}', 'Backend\CustomerController@show');
    Route::get('edit/{id}', 'Backend\CustomerController@edit');
    Route::post('update', 'Backend\CustomerController@update')->name('update');
    Route::get('delete/{id}', 'Backend\CustomerController@delete');
});
Route::prefix('tasks')->group(function () {
    Route::get('/', 'Backend\TaskController@index')->name('tasks.index');;
    Route::get('/create', 'Backend\TaskController@create')->name('tasks.create
');
    Route::post('/', 'Backend\TaskController@store')->name('tasks.store');
    Route::get('/{taskId}', 'Backend\TaskController@show')->name('tasks.show');
    Route::get('/{taskId}/edit', 'Backend\TaskController@edit')->name('tasks.edit');
    Route::Post('/{taskId}', 'Backend\TaskController@update')->name('tasks.update');
    Route::Delete('/{photo}', 'Backend\TaskController@destroy')->name('tasks.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
