<?php

namespace App\Http\Middleware;

use App\Models\Funcionario;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureFuncionarioOwnership
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    $funcionarioParam = $request->route('funcionario');

    // If it's already a bound model instance
    if ($funcionarioParam instanceof \App\Models\Funcionario) {
      if ($funcionarioParam->user_id !== auth()->id()) {
        abort(403, 'Você não tem permissão para acessar este funcionário.');
      }
    }
    // If it's an ID string, we need to find and check the model
    elseif (is_string($funcionarioParam) || is_numeric($funcionarioParam)) {
      $funcionario = Funcionario::find($funcionarioParam);
      if (!$funcionario || $funcionario->user_id !== auth()->id()) {
        abort(403, 'Você não tem permissão para acessar este funcionário.');
      }
    }

    return $next($request);
  }
}
