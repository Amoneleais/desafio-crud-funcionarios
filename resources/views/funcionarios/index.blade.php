@extends('layouts.admin')

@section('content')
    <a href="{{ route('funcionarios.create') }}">Criar Funcionário</a>
    <h2>Funcionários</h2>

    @if (session('success'))
        <div class="alert alert-success">
            <p style="color: green;">{{ session('success') }}</p>
        </div>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Telefone</th>
            <th>Gênero</th>
        </tr>
        @forelse ($funcionarios as $funcionario)
        <tr>
            <td>{{ $funcionario->id }}</td>
            <td>{{ $funcionario->nome }}</td>
            <td>{{ $funcionario->cpf }}</td>
            <td>{{ $funcionario->data_nascimento }}</td>
            <td>{{ $funcionario->telefone }}</td>
            <td>{{ $funcionario->genero }}</td>
            <td>
                <a href="{{ route('funcionarios.show', $funcionario->id) }}">Ver</a>
            </td>
            <td>
                <a href="{{ route('funcionarios.edit', $funcionario->id) }}">Editar</a>
            </td>
            <td>
                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @empty
            <p>Nenhum funcionário encontrado.</p>
        @endforelse
    </table>

@endsection
