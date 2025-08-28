@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-xl font-bold">Detalhes do Funcionário</h2>
    <a
      href="{{ route('funcionarios.index') }}"
      class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition"
    >
      Voltar
    </a>
  </div>

  <div class="bg-white p-6 rounded shadow mb-4">
    <p class="mb-2">
      <span class="font-semibold">Nome:</span>
      {{ $funcionario->nome }}
    </p>
    <p class="mb-2">
      <span class="font-semibold">CPF:</span>
      {{ $funcionario->cpf }}
    </p>
    <p class="mb-2">
      <span class="font-semibold">Data de Nascimento:</span>
      {{ $funcionario->data_nascimento }}
    </p>
    <p class="mb-2">
      <span class="font-semibold">Telefone:</span>
      {{ $funcionario->telefone }}
    </p>
    <p class="mb-2">
      <span class="font-semibold">Gênero:</span>
      {{ $funcionario->genero }}
    </p>
  </div>
  <div class="flex gap-2">
    <a
      href="{{ route('funcionarios.edit', $funcionario->id) }}"
      class="px-4 py-2 bg-yellow-400 text-gray-900 rounded hover:bg-yellow-500 transition"
    >
      Editar
    </a>
    <form
      action="{{ route('funcionarios.destroy', $funcionario->id) }}"
      method="POST"
      onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');"
    >
      @csrf
      @method('DELETE')
      <button
        type="submit"
        class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition"
      >
        Excluir
      </button>
    </form>
  </div>
@endsection
