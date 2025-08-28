<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Funcionário</title>
</head>
<body>
    <a href="{{ route('funcionario.index') }}">Listar</a>
    <h2>Editar Funcionário</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('funcionario.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}"><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="{{ old('cpf', $funcionario->cpf) }}"><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento', $funcionario->data_nascimento) }}"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}"><br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero">
            <option value="">Selecione</option>
            <option value="Masculino" {{ old('genero', $funcionario->genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ old('genero', $funcionario->genero) == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ old('genero', $funcionario->genero) == 'Outro' ? 'selected' : '' }}>Outro</option>
        </select><br><br>

        <button type="submit">Atualizar</button>
    </form>
</body>
</html>
