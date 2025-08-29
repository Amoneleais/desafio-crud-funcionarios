<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Models\Funcionario;
use App\Services\FuncionarioService;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
  protected FuncionarioService $funcionarioService;
  private const OWNERSHIP_ERROR = 'Você não tem permissão para acessar este funcionário.';

  public function __construct(FuncionarioService $funcionarioService)
  {
    $this->funcionarioService = $funcionarioService;
  }

  public function index()
  {
    $funcionarios = $this->funcionarioService->getUserFuncionariosPaginated(7);

    return view('funcionarios.index', ['funcionarios' => $funcionarios]);
  }

  public function show(Funcionario $funcionario)
  {
    if (!$funcionario || $funcionario->user_id !== auth()->id()) {
      abort(403, self::OWNERSHIP_ERROR);
    }

    return view('funcionarios.show', ['funcionario' => $funcionario]);
  }

  public function create()
  {
    return view('funcionarios.create');
  }

  public function store(StoreFuncionarioRequest $request)
  {
    $this->funcionarioService->createFuncionario($request->validated());

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário criado com sucesso!');
  }

  public function edit(Funcionario $funcionario)
  {
    if (!$funcionario || $funcionario->user_id !== auth()->id()) {
      abort(403, self::OWNERSHIP_ERROR);
    }

    return view('funcionarios.edit', ['funcionario' => $funcionario]);
  }

  public function update(
    UpdateFuncionarioRequest $request,
    Funcionario $funcionario,
  ) {
    if (!$funcionario || $funcionario->user_id !== auth()->id()) {
      abort(403, self::OWNERSHIP_ERROR);
    }

    $this->funcionarioService->updateFuncionario(
      $funcionario,
      $request->validated(),
    );

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário atualizado com sucesso!');
  }

  public function destroy(Funcionario $funcionario)
  {
    if (!$funcionario || $funcionario->user_id !== auth()->id()) {
      abort(403, self::OWNERSHIP_ERROR);
    }

    $this->funcionarioService->deleteFuncionario($funcionario);

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário excluído com sucesso!');
  }
}
