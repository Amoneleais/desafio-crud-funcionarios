@extends('layouts.admin')

@section('content')
  <div
    class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-2"
  >
    <h2 class="text-3xl font-extrabold text-gray-900">Funcionários</h2>
    <a
      href="{{ route('funcionarios.create') }}"
      class="inline-flex items-center px-6 py-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg shadow text-sm"
      aria-label="Criar Funcionário"
    >
      <x-icon name="plus" class="mr-2" />
      Criar Funcionário
    </a>
  </div>

  @if (session('success'))
    <div
      class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4"
    >
      {{ session('success') }}
    </div>
  @endif

  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3">Nome</th>
          <th scope="col" class="px-6 py-3">CPF</th>
          <th scope="col" class="px-6 py-3">Data de Nascimento</th>
          <th scope="col" class="px-6 py-3">Telefone</th>
          <th scope="col" class="px-6 py-3">Gênero</th>
          <th scope="col" colspan="3" class="px-6 py-3">
            <span class="sr-only">Ações</span>
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse ($funcionarios as $funcionario)
          <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
            <th
              scope="row"
              class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
            >
              {{ $funcionario->nome }}
            </th>
            <td class="px-6 py-4">{{ $funcionario->cpf }}</td>
            <td class="px-6 py-4">{{ $funcionario->data_nascimento }}</td>
            <td class="px-6 py-4">{{ $funcionario->telefone }}</td>
            <td class="px-6 py-4">{{ $funcionario->genero }}</td>
            <td class="px-6 py-4 text-right">
              <a
                href="{{ route('funcionarios.show', $funcionario->id) }}"
                class="font-medium text-blue-600 hover:underline inline-flex items-center gap-1"
                title="Ver funcionário"
              >
                <x-icon name="eye" class="mr-1" />
                Ver
              </a>
            </td>
            <td class="px-6 py-4 text-right">
              <a
                href="{{ route('funcionarios.edit', $funcionario->id) }}"
                class="font-medium text-blue-600 hover:underline inline-flex items-center gap-1"
                title="Editar funcionário"
              >
                <x-icon name="edit" class="mr-1" />
                Editar
              </a>
            </td>
            <td class="px-6 py-4 text-right">
              <form
                action="{{ route('funcionarios.destroy', $funcionario->id) }}"
                method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir este funcionário?');"
              >
                @csrf
                @method('DELETE')
                <button
                  type="submit"
                  class="px-3 py-2 bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 text-white font-medium rounded-lg text-sm inline-flex items-center gap-1"
                  title="Excluir funcionário"
                >
                  <x-icon name="trash" class="mr-1" />
                  Excluir
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr class="bg-white">
            <td colspan="8" class="px-6 py-4 text-center">
              Nenhum funcionário encontrado.
            </td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  @if (isset($funcionarios) && method_exists($funcionarios, 'links'))
    <div class="mt-4 flex justify-end">
      {{ $funcionarios->links() }}
    </div>
  @endif

  <script src="https://unpkg.com/imask"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (document.getElementById('cpf')) {
        IMask(document.getElementById('cpf'), { mask: '000.000.000-00' });
      }
      if (document.getElementById('telefone')) {
        IMask(document.getElementById('telefone'), { mask: '(00) 00000-0000' });
      }
    });
  </script>
@endsection
