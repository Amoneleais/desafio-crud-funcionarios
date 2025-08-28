<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('landing');
});
Route::middleware('auth')->group(function () {
  Route::resource('funcionarios', FuncionarioController::class)->except([
    'show',
  ]);
  Route::get('funcionarios/{funcionario}', [
    FuncionarioController::class,
    'show',
  ])->name('funcionarios.show');
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
