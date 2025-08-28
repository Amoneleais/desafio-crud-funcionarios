@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Editar Funcionário</h2>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Listar</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $funcionario->cpf) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento', $funcionario->data_nascimento) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero:</label>
            <select id="genero" name="genero" class="form-select">
                <option value="">Selecione</option>
                <option value="Masculino" {{ old('genero', $funcionario->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ old('genero', $funcionario->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="Outro" {{ old('genero', $funcionario->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>

@endsection
