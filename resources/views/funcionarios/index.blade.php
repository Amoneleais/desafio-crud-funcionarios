@extends('layouts.admin')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Funcionários</h2>
        <a href="{{ route('funcionarios.create') }}" class="btn btn-success">Criar Funcionário</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle bg-white">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data de Nascimento</th>
                    <th>Telefone</th>
                    <th>Gênero</th>
                    <th colspan="3" class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->cpf }}</td>
                    <td>{{ $funcionario->data_nascimento }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>{{ $funcionario->genero }}</td>
                    <td style="min-width: 90px;">
                        <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info btn-sm w-100">Ver</a>
                    </td>
                    <td style="min-width: 90px;">
                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning btn-sm w-100">Editar</a>
                    </td>
                    <td style="min-width: 90px;">
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="9" class="text-center">Nenhum funcionário encontrado.</td></tr>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection
