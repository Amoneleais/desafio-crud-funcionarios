@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-3xl font-extrabold text-gray-900">
      Detalhes do Funcionário
    </h2>
    <a
      href="{{ route('funcionarios.index') }}"
      class="flex px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition"
    >
      <x-icon name="arrow-left-to-line" class="mr-1" />
      Voltar
    </a>
  </div>

  <div class="bg-white p-8 rounded-xl shadow-lg mb-6">
    <p class="mb-4">
      <span class="font-semibold text-gray-700">Nome:</span>
      {{ $funcionario->nome }}
    </p>
    <p class="mb-4">
      <span class="font-semibold text-gray-700">CPF:</span>
      {{ $funcionario->cpf }}
    </p>
    <p class="mb-4">
      <span class="font-semibold text-gray-700">Data de Nascimento:</span>
      {{ $funcionario->data_nascimento }}
    </p>
    <p class="mb-4">
      <span class="font-semibold text-gray-700">Telefone:</span>
      {{ $funcionario->telefone }}
    </p>
    <p class="mb-4">
      <span class="font-semibold text-gray-700">Gênero:</span>
      {{ $funcionario->genero }}
    </p>
  </div>
  <div class="flex gap-4">
    <a
      href="{{ route('funcionarios.edit', $funcionario->id) }}"
      class="px-6 py-3 bg-gray-900 text-white font-semibold rounded-lg shadow hover:bg-gray-800 transition"
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
        class="px-6 py-3 bg-red-600 text-white font-semibold rounded-lg shadow hover:bg-red-700 transition"
      >
        Excluir
      </button>
    </form>
  </div>
@endsection
