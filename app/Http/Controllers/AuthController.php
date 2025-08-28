<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }
  public function store(AuthRequest $request)
  {
    $validatedData = $request->validated();
    User::create($validatedData);
    return redirect()
      ->route('login')
      ->with('success', 'Cadastro realizado com sucesso! Faça login.');
  }
  public function login()
  {
    return view('auth.login');
  }
  public function authenticate(Request $request)
  {
    $credentials = $request->only('email', 'password');
    if (auth()->attempt($credentials)) {
      return redirect()->route('funcionarios.index');
    }
    return back()->withErrors([
      'email' => 'As credenciais fornecidas estão incorretas.',
    ]);
  }
}
