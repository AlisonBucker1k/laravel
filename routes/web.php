<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\Admin\ConfigController;




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

Route::get('/', [HomeController::class, '__invoke']);
Route::view('/teste', 'teste');

Route::prefix('/tarefas')->group(function(){

    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list'); //Listar Tarefas

    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add'); // Add Tarefas
    Route::post('add', [TarefasController::class, 'addAction']); // Ação de add
    
    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit'); //Tela de edit
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //Ação de edit

    Route::get('del/{id}', [TarefasController::class, 'del'])->name('tarefas.del'); // Ação de delete

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done'); //Marcar se resolveu ou nao

});

Route::prefix('/config')->group(function(){
    Route::get('/', [ConfigController::class, 'index']);
    Route::post('/', [ConfigController::class, 'index']);

    Route::get('info', [ConfigController::class,'info']);
    Route::get('permissoes', [ConfigController::class, 'permissoes']);
});

Route::fallback(function(){
    // return view('404');
});