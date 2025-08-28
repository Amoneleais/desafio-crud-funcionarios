@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Criar Funcionário</h2>
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
    <form action="{{ route('funcionarios.store') }}" method="POST" class="card p-4 shadow-sm bg-white">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ old('nome') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero:</label>
            <select id="genero" name="genero" class="form-select">
                <option value="">Selecione</option>
                <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                <option value="Outro" {{ old('genero') == 'Outro' ? 'selected' : '' }}>Outro</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
    <script src="https://unpkg.com/imask"></script>
    <script>
        IMask(document.getElementById('cpf'), {
            mask: '000.000.000-00'
        });
        IMask(document.getElementById('telefone'), {
            mask: '(00) 00000-0000'
        });
    </script>

@endsection
