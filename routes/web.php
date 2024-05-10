<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('listar',[CursoController::class,'index'])-> name('curso.index');
Route::get('curso',[CursoController::class,'create']);
Route::post('/Store',[CursoController::class,'Store'])->name('curso.Store');

Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');

Route::get('listado',[ArticleController::class,'indexx'])-> name('indexx');
Route::get('article',[ArticleController::class,'create_art']);
Route::post('/store',[ArticleController::class,'store'])->name('article.store');
