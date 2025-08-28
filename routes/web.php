<?php

use App\Http\Controllers\FuncionarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FuncionarioController::class, 'index'])->name(
  'funcionarios.index',
);
Route::get('show-funcionario/{id}', [
  FuncionarioController::class,
  'show',
])->name('funcionarios.show');
Route::get('/funcionario-create', [
  App\Http\Controllers\FuncionarioController::class,
  'create',
])->name('funcionarios.create');
Route::post('/store-funcionario', [
  FuncionarioController::class,
  'store',
])->name('funcionarios.store');
Route::get('/funcionario-edit/{id}', [
  FuncionarioController::class,
  'edit',
])->name('funcionarios.edit');
Route::put('/update-funcionario/{id}', [
  FuncionarioController::class,
  'update',
])->name('funcionarios.update');
