<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Funcionário</title>
</head>
<body>
    <a href="{{ route('funcionario.index') }}">Voltar</a>
    <h2>Detalhes do Funcionário</h2>

    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>CPF:</strong> {{ $funcionario->cpf }}</p>
    <p><strong>Data de Nascimento:</strong> {{ $funcionario->data_nascimento }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
    <p><strong>Gênero:</strong> {{ $funcionario->genero }}</p>
</body>
</html>
