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
    // Sem home/landing, levo direto pras tarefas ou login se nao estiver logado
    Route::get('/', ['as'=>'tasks.index', 'uses' => 'TasksController@index']);
    // Tasklist
    Route::get('tarefas', ['as'=>'tasks.index', 'uses' => 'TasksController@index']);
    Route::post('atualiza', ['as'=>'task.atualiza','uses' => 'TasksController@atualizaTask']);
    Route::post('exclui-tarefa', ['as'=>'task.exclui','uses' => 'TasksController@excluiTask']);
    Route::post('atualiza-status', ['as'=>'task.atualiza_status','uses' => 'TasksController@atualizaStatus']);
    Route::post('adiciona', ['as'=>'task.adiciona', 'uses' => 'TasksController@adicionaTask']);
});


Auth::routes();


