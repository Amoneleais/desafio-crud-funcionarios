@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-3xl font-extrabold text-gray-900">Criar Funcionário</h2>
    <a
      href="{{ route('funcionarios.index') }}"
      class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
      aria-label="Voltar"
    >
      Voltar
    </a>
  </div>

  <div class="flex items-center justify-center">
    <form
      action="{{ route('funcionarios.store') }}"
      method="POST"
      class="w-full max-w-md bg-white rounded-xl shadow-lg p-10 space-y-6"
    >
      @csrf
      <div>
        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">
          Nome
        </label>
        <input
          type="text"
          id="nome"
          name="nome"
          value="{{ old('nome') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          placeholder="Digite o nome do funcionário"
        />
        @error('nome')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900">
          CPF
        </label>
        <input
          type="text"
          id="cpf"
          name="cpf"
          value="{{ old('cpf') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          placeholder="Digite o CPF do funcionário"
        />
        @error('cpf')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label
          for="data_nascimento"
          class="block mb-2 text-sm font-medium text-gray-900"
        >
          Data de Nascimento
        </label>
        <input
          type="date"
          id="data_nascimento"
          name="data_nascimento"
          value="{{ old('data_nascimento') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
        />
        @error('data_nascimento')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label
          for="telefone"
          class="block mb-2 text-sm font-medium text-gray-900"
        >
          Telefone
        </label>
        <input
          type="text"
          id="telefone"
          name="telefone"
          value="{{ old('telefone') }}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          placeholder="Digite o telefone do funcionário"
        />
        @error('telefone')
          <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div>
        <label
          for="genero"
          class="block mb-2 text-sm font-medium text-gray-900"
        >
          Gênero
        </label>
        <select
          id="genero"
          name="genero"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
        >
          <option value="">Selecione</option>
          <option
            value="Masculino"
            {{ old('genero') == 'Masculino' ? 'selected' : '' }}
          >
            Masculino
          </option>
          <option
            value="Feminino"
            {{ old('genero') == 'Feminino' ? 'selected' : '' }}
          >
            Feminino
          </option>
          <option
            value="Outro"
            {{ old('genero') == 'Outro' ? 'selected' : '' }}
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
        class="w-full py-3 px-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm"
      >
        Salvar
      </button>
    </form>
  </div>
  <script src="https://unpkg.com/imask"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (document.getElementById('cpf')) {
        IMask(document.getElementById('cpf'), { mask: '000.000.000-00' });
      }
      if (document.getElementById('telefone')) {
        IMask(document.getElementById('telefone'), { mask: '(00) 00000-0000' });
      }
    });
  </script>
@endsection
