@extends('layouts.admin')

@section('content')
    <a href="{{ route('funcionarios.index') }}">Voltar</a>
    <h2>Detalhes do Funcionário</h2>

    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $funcionario->data_nascimento }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
    <p><strong>Gênero:</strong> {{ $funcionario->genero }}</p>
    <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>
    <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');">
        @csrf
        @method('DELETE')
        <button type="submit">Excluir</button>
    </form>

@endsection
