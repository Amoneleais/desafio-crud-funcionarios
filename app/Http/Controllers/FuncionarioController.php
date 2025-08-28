<?php
namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
  public function index()
  {
    $user = auth()->user();
    $funcionarios = $user->funcionarios()->orderByDesc('id')->get();

    return view('funcionarios.index', ['funcionarios' => $funcionarios]);
  }

  public function show($id)
  {
    $funcionario = Funcionario::findOrFail($id);
    return view('funcionarios.show', ['funcionario' => $funcionario]);
  }

  public function create()
  {
    return view('funcionarios.create');
  }

  public function store(FuncionarioRequest $request)
  {
    $validatedData = $request->validated();
    $user = auth()->user();
    $validatedData['user_id'] = $user->id;
    Funcionario::create($validatedData);

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário criado com sucesso!');
  }

  public function edit($id)
  {
    $funcionario = Funcionario::findOrFail($id);
    return view('funcionarios.edit', ['funcionario' => $funcionario]);
  }

  public function update(FuncionarioRequest $request, $id)
  {
    $validatedData = $request->validated();

    $funcionario = Funcionario::findOrFail($id);
    $funcionario->update($validatedData);

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário atualizado com sucesso!');
  }
  public function destroy($id)
  {
    $funcionario = Funcionario::findOrFail($id);
    $funcionario->delete();

    return redirect()
      ->route('funcionarios.index')
      ->with('success', 'Funcionário excluído com sucesso!');
  }
}
