@extends('layouts.admin')

@section('content')

    <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2">
        <h2 class="text-xl font-bold">Editar Funcionário</h2>
        <a href="{{ route('funcionarios.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300 transition">Listar</a>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="mb-0 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div>
            <label for="cpf" class="block text-sm font-medium text-gray-700">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $funcionario->cpf) }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div>
            <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento', $funcionario->data_nascimento) }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div>
            <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>
        <div>
            <label for="genero" class="block text-sm font-medium text-gray-700">Gênero:</label>
            <select id="genero" name="genero" class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                <option value="">Selecione</option>
                <option value="Masculino" {{ old('genero', $funcionario->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ old('genero', $funcionario->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="Outro" {{ old('genero', $funcionario->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
            </select>
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Atualizar</button>
    </form>

@endsection
