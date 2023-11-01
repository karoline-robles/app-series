<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PessoasController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\FavoritosController;

Route::get('/', function () {
    return view('index');
});

Route::get('/pessoas', function () {
    return view('pessoas.index');
});

Route::get('/series', function () {
    return view('series.index');
});

Route::get('/categorias', function () {
    return view('categorias.index');
});

Route::get('/favoritos', function () {
    return view('favoritos.index');
});


//Rotas para Categorias
Route::get('/categorias', [CategoriasController::class,'index'])->name('categorias.index');
Route::get('/categorias/cadastro', [CategoriasController::class,'create'])->name('categorias.novo');
Route::post('/categorias/cadastro', [CategoriasController::class,'store'])->name('cadastro.categoria');
Route::get('/categorias/editar/{id}', [CategoriasController::class,'edit'])->name('categorias.editar');
Route::put('/categorias/editar/{id}', [CategoriasController::class,'update'])->name('categorias.atualizar');
Route::get('/categorias/apagar/{id}', [CategoriasController::class,'delete'])->name('categorias.apagar');
Route::delete('/categorias/apagar/{id}', [CategoriasController::class,'destroy'])->name('categorias.exluir');

//Rotas para Pessoas
Route::get('/pessoas', [PessoasController::class,'index'])->name('pessoas.index');
Route::get('/pessoas/cadastro', [PessoasController::class,'create'])->name('pessoas.novo');
Route::post('/pessoas/cadastro', [PessoasController::class,'store'])->name('cadastro.pessoa');
Route::get('/pessoas/editar/{id}', [PessoasController::class,'edit'])->name('pessoas.editar');
Route::put('/pessoas/editar/{id}', [PessoasController::class,'update'])->name('pessoas.atualizar');
Route::get('/pessoas/apagar/{id}', [PessoasController::class,'delete'])->name('pessoas.apagar');
Route::delete('/pessoas/apagar/{id}', [PessoasController::class,'destroy'])->name('pessoas.excluir');


Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
Route::get('/series/cadastro', [SeriesController::class, 'create'])->name('series.novo');
Route::post('/series/cadastro', [SeriesController::class, 'store'])->name('cadastro.serie');
Route::get('/series/editar/{id}', [SeriesController::class, 'edit'])->name('series.editar');
Route::put('/series/editar/{id}', [SeriesController::class, 'update'])->name('series.atualizar');
Route::get('/series/apagar/{id}', [SeriesController::class, 'delete'])->name('series.apagar');
Route::delete('/series/apagar/{id}', [SeriesController::class, 'destroy'])->name('series.excluir');
Route::delete('/series/{serie}', 'SerieController@destroy')->name('series.destroy');

Route::get('/favoritos', [FavoritosController::class, 'index'])->name('favoritos.index');
Route::post('/favoritos/favoritar', [FavoritosController::class, 'favoritar'])->name('favoritos.favoritar');
Route::get('/favoritos/{pessoa}', [FavoritosController::class, 'getByPessoa'])->name('favoritos.lista');