<?php

namespace App\Services;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class FuncionarioService
{
  /**
   * Get all funcionarios for the authenticated user
   */
  public function getUserFuncionarios(): Collection
  {
    $user = auth()->user();
    if (!$user) {
      return collect();
    }
    return $user->funcionarios()->orderByDesc('id')->get();
  }

  /**
   * Get paginated funcionarios for the authenticated user
   */
  public function getUserFuncionariosPaginated(
    int $perPage = 10,
  ): LengthAwarePaginator {
    $user = auth()->user();
    if (!$user) {
      return new LengthAwarePaginator([], 0, $perPage);
    }
    return $user->funcionarios()->orderByDesc('id')->paginate($perPage);
  }

  /**
   * Find a funcionario by ID for the authenticated user
   */
  public function findUserFuncionario(int $id): ?Funcionario
  {
    $user = auth()->user();
    if (!$user) {
      return null;
    }
    return $user->funcionarios()->find($id);
  }

  /**
   * Create a new funcionario for the authenticated user
   */
  public function createFuncionario(array $data): Funcionario
  {
    $user = auth()->user();
    if (!$user) {
      throw new \Illuminate\Auth\AuthenticationException(
        'User not authenticated',
      );
    }
    $data['user_id'] = $user->id;
    return Funcionario::create($data);
  }

  /**
   * Update a funcionario
   */
  public function updateFuncionario(Funcionario $funcionario, array $data): bool
  {
    return $funcionario->update($data);
  }

  /**
   * Delete a funcionario
   */
  public function deleteFuncionario(Funcionario $funcionario): bool
  {
    return $funcionario->delete();
  }

  /**
   * Get funcionarios count for the authenticated user
   */
  public function getUserFuncionariosCount(): int
  {
    $user = auth()->user();
    if (!$user) {
      return 0;
    }
    return $user->funcionarios()->count();
  }
}
