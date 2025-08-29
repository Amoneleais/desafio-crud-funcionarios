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
      class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
      aria-label="Voltar"
    >
      <x-icon name="arrow-left-to-line" class="mr-1" />
      Voltar
    </a>
  </div>

  <div class="flex items-center justify-center mb-6">
    <div
      class="block w-full p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-50"
    >
      <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
        {{ $funcionario->nome }}
      </h5>
      <p class="font-normal text-gray-700 mb-2">
        <span class="font-semibold">CPF:</span>
        {{ $funcionario->cpf }}
      </p>
      <p class="font-normal text-gray-700 mb-2">
        <span class="font-semibold">Data de Nascimento:</span>
        {{ $funcionario->data_nascimento }}
      </p>
      <p class="font-normal text-gray-700 mb-2">
        <span class="font-semibold">Telefone:</span>
        {{ $funcionario->telefone }}
      </p>
      <p class="font-normal text-gray-700">
        <span class="font-semibold">Gênero:</span>
        {{ $funcionario->genero }}
      </p>
    </div>
  </div>

  <div class="flex gap-4">
    <a
      href="{{ route('funcionarios.edit', $funcionario->id) }}"
      class="inline-flex items-center justify-center px-6 py-3 bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white font-medium rounded-lg text-sm"
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
        class="px-6 py-3 bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 text-white font-medium rounded-lg text-sm"
      >
        Excluir
      </button>
    </form>
  </div>
@endsection
