<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('cursos/curso',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/edit',[CursoController::class,'edit'])->name('curso.edit');

Route::get('listado',[ArticleController::class,'indexx'])-> name('indexx');
Route::get('article',[ArticleController::class,'create_art']);
Route::post('/store',[ArticleController::class,'store'])->name('article.store');


Route::get('consultas', [CursoController::class, 'consultasElokuent']);
