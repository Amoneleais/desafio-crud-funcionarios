@extends('layouts.admin')

@section('content')
    <a href="{{ route('funcionarios.index') }}">Listar</a>
    <h2>Criar Funcionário</h2>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}"><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" value="{{ old('cpf') }}"><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" value="{{ old('data_nascimento') }}"><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="{{ old('telefone') }}"><br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero">
            <option value="">Selecione</option>
            <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Feminino" {{ old('genero') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
            <option value="Outro" {{ old('genero') == 'Outro' ? 'selected' : '' }}>Outro</option>
        </select><br><br>

        <button type="submit">Salvar</button>
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
