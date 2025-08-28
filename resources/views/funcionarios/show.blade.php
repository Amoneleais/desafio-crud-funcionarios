@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Detalhes do Funcionário</h2>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

    <div class="card p-4 shadow-sm bg-white mb-3">
        <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
        <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>
        <p><strong>Data de Nascimento:</strong> {{ $funcionario->data_nascimento }}</p>
        <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
        <p><strong>Gênero:</strong> {{ $funcionario->genero }}</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
    </div>

@endsection
