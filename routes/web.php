<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
  Route::get('/', [FuncionarioController::class, 'index'])->name(
    'funcionarios.index',
  );
  Route::get('show-funcionario/{id}', [
    FuncionarioController::class,
    'show',
  ])->name('funcionarios.show');
  Route::get('/funcionario-create', [
    FuncionarioController::class,
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
  Route::delete('/delete-funcionario/{id}', [
    FuncionarioController::class,
    'destroy',
  ])->name('funcionarios.destroy');
  Route::post('/logout', function () {
    auth()->logout();
    return redirect()->route('login');
  })->name('logout');
});
Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name(
  'register.store',
);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name(
  'login.authenticate',
);
