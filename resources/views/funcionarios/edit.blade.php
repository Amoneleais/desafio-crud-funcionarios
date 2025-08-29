@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-3xl font-extrabold text-gray-900">Editar Funcionário</h2>
    <a
      href="{{ route('funcionarios.index') }}"
      class="flex px-6 py-3 bg-gray-100 text-gray-700 font-semibold rounded-lg hover:bg-gray-200 transition"
    >
      <x-icon name="arrow-left-to-line" class="mr-1" />
      Voltar
    </a>
  </div>

  <div class="flex items-center justify-center">
    <form
      action="{{ route('funcionarios.update', $funcionario->id) }}"
      method="POST"
      class="w-full max-w-md bg-white rounded-xl shadow-lg p-10 space-y-6"
    >
      @csrf
      @method('PUT')
      <div>
        <label for="nome" class="block text-sm font-semibold text-gray-700">
          Nome
        </label>
        <input
          type="text"
          id="nome"
          name="nome"
          value="{{ old('nome', $funcionario->nome) }}"
          class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
        />
        @error('nome')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="cpf" class="block text-sm font-semibold text-gray-700">
          CPF
        </label>
        <input
          type="text"
          id="cpf"
          name="cpf"
          value="{{ old('cpf', $funcionario->cpf) }}"
          class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
        />
        @error('cpf')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label
          for="data_nascimento"
          class="block text-sm font-semibold text-gray-700"
        >
          Data de Nascimento
        </label>
        <input
          type="date"
          id="data_nascimento"
          name="data_nascimento"
          value="{{ old('data_nascimento', $funcionario->data_nascimento) }}"
          class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
        />
        @error('data_nascimento')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="telefone" class="block text-sm font-semibold text-gray-700">
          Telefone
        </label>
        <input
          type="text"
          id="telefone"
          name="telefone"
          value="{{ old('telefone', $funcionario->telefone) }}"
          class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
        />
        @error('telefone')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="genero" class="block text-sm font-semibold text-gray-700">
          Gênero
        </label>
        <select
          id="genero"
          name="genero"
          class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
        >
          <option value="">Selecione</option>
          <option
            value="Masculino"
            {{ old('genero', $funcionario->genero) == 'Masculino' ? 'selected' : '' }}
          >
            Masculino
          </option>
          <option
            value="Feminino"
            {{ old('genero', $funcionario->genero) == 'Feminino' ? 'selected' : '' }}
          >
            Feminino
          </option>
          <option
            value="Outro"
            {{ old('genero', $funcionario->genero) == 'Outro' ? 'selected' : '' }}
          >
            Outro
          </option>
        </select>
        @error('genero')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <button
        type="submit"
        class="w-full py-3 px-4 bg-gray-900 text-white font-bold rounded-lg shadow hover:bg-gray-800 transition"
      >
        Atualizar
      </button>
    </form>
  </div>
  <script src="https://unpkg.com/imask"></script>
  <script>
    IMask(document.getElementById('cpf'), {
      mask: '000.000.000-00',
    });
    IMask(document.getElementById('telefone'), {
      mask: '(00) 00000-0000',
    });
  </script>
@endsection
