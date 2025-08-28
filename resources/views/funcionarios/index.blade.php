@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-xl font-bold">Funcionários</h2>
    <a
      href="{{ route('funcionarios.create') }}"
      class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition"
    >
      Criar Funcionário
    </a>
  </div>

  @if (session('success'))
    <div
      class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4"
    >
      {{ session('success') }}
    </div>
  @endif

  <div class="overflow-x-auto">
    <table
      class="min-w-full bg-white border rounded shadow text-sm text-center"
    >
      <thead class="bg-indigo-100">
        <tr>
          <th class="px-3 py-2 border-b">Nome</th>
          <th class="px-3 py-2 border-b">CPF</th>
          <th class="px-3 py-2 border-b">Data de Nascimento</th>
          <th class="px-3 py-2 border-b">Telefone</th>
          <th class="px-3 py-2 border-b">Gênero</th>
          <th colspan="3" class="px-3 py-2 border-b text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($funcionarios as $funcionario)
          <tr>
            <td class="px-3 py-2 border-b">{{ $funcionario->nome }}</td>
            <td class="px-3 py-2 border-b">{{ $funcionario->cpf }}</td>
            <td class="px-3 py-2 border-b">
              {{ $funcionario->data_nascimento }}
            </td>
            <td class="px-3 py-2 border-b">{{ $funcionario->telefone }}</td>
            <td class="px-3 py-2 border-b">{{ $funcionario->genero }}</td>
            <td class="px-3 py-2 border-b min-w-[90px]">
              <a
                href="{{ route('funcionarios.show', $funcionario->id) }}"
                class="block w-full px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-center"
              >
                Ver
              </a>
            </td>
            <td class="px-3 py-2 border-b min-w-[90px]">
              <a
                href="{{ route('funcionarios.edit', $funcionario->id) }}"
                class="block w-full px-2 py-1 bg-yellow-400 text-gray-900 rounded hover:bg-yellow-500 text-center"
              >
                Editar
              </a>
            </td>
            <td class="px-3 py-2 border-b min-w-[90px]">
              <form
                action="{{ route('funcionarios.destroy', $funcionario->id) }}"
                method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');"
              >
                @csrf
                @method('DELETE')
                <button
                  type="submit"
                  class="block w-full px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700 text-center"
                >
                  Excluir
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="9" class="text-center py-4">
              Nenhum funcionário encontrado.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  <script src="https://unpkg.com/imask"></script>
  <script>
    IMask(document.getElementById('cpf'), {
      mask: '000.000.000-00',
    });
    IMask(document.getElementById('telefone'), {
      mask: '(00) 00000-0000',
    });
  </script>
@endsection
