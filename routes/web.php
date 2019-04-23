<?php

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

Route::group(['middleware' => 'auth'], function(){
    // Tasklist
    Route::get('home', 'HomeController@index')->name('home');
    Route::get('tarefas', ['as'=>'tasks.index', 'uses' => 'TasksController@index']);
    Route::post('atualiza', ['as'=>'task.atualiza','uses' => 'TasksController@atualiza']);
    Route::post('atualiza-status', ['as'=>'task.atualiza_status','uses' => 'TasksController@atualizaStatus']);
    Route::post('adiciona', ['as'=>'task.adiciona', 'uses' => 'TasksController@adicionaTask']);

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


