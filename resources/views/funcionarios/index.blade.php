<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
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
        </tr>
        @empty
            <p>Nenhum funcionário encontrado.</p>
        @endforelse
    </table>
</body>
</html>
