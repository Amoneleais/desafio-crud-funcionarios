<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.7.0/dist/flowbite.js"></script>
  </head>
  <body class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-10 mt-10">
      <h1
        class="text-3xl font-extrabold mb-8 text-center text-gray-900 drop-shadow-sm"
      >
        Cadastrar
      </h1>
      <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf
        <div>
          <label
            for="name"
            class="block mb-2 text-sm font-medium text-gray-900"
          >
            Nome
          </label>
          <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          />
          @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900"
          >
            Email
          </label>
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          />
          @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label
            for="password"
            class="block mb-2 text-sm font-medium text-gray-900"
          >
            Senha
          </label>
          <input
            id="password"
            type="password"
            name="password"
            required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          />
          @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label
            for="password_confirmation"
            class="block mb-2 text-sm font-medium text-gray-900"
          >
            Confirmar Senha
          </label>
          <input
            id="password_confirmation"
            type="password"
            name="password_confirmation"
            required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
          />
        </div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm"
        >
          Cadastrar
        </button>
        <div class="text-center mt-4">
          <a
            href="{{ route('login') }}"
            class="text-sm text-gray-700 hover:text-gray-900 hover:underline font-semibold"
          >
            Já tem uma conta? Entrar
          </a>
        </div>
      </form>
    </div>
  </body>
</html>
