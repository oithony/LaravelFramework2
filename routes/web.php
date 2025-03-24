<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutinController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/Produtos', [ProdutinController::class, 'index'])->name('produtin.index');
Route::get('/Categorias', [CategoriaController::class, 'index'])->name('categorias.index');
