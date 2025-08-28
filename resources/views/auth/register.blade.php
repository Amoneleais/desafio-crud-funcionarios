<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Cadastrar</h1>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
          @csrf
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">
              Nome
            </label>
            <input
              id="name"
              type="text"
              name="name"
              value="{{ old('name') }}"
              required
              autofocus
              class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            />
            @error('name')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700">
              Email
            </label>
            <input
              id="email"
              type="email"
              name="email"
              value="{{ old('email') }}"
              required
              class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            />
            @error('email')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label
              for="password"
              class="block text-sm font-medium text-gray-700"
            >
              Senha
            </label>
            <input
              id="password"
              type="password"
              name="password"
              required
              class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            />
            @error('password')
              <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
          </div>
          <div>
            <label
              for="password_confirmation"
              class="block text-sm font-medium text-gray-700"
            >
              Confirmar Senha
            </label>
            <input
              id="password_confirmation"
              type="password"
              name="password_confirmation"
              required
              class="mt-1 p-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            />
          </div>
          <div class="flex items-center justify-between">
            <a
              href="{{ route('login') }}"
              class="text-sm text-indigo-600 hover:underline"
            >
              Já tem uma conta? Faça login
            </a>
          </div>
          <button
            type="submit"
            class="w-full py-2 px-4 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition"
          >
            Registrar
          </button>
        </form>
      </div>
    </div>
  </body>
</html>
