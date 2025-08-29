<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
          <label for="name" class="block text-sm font-semibold text-gray-700">
            Nome
          </label>
          <input
            id="name"
            type="text"
            name="name"
            value="{{ old('name') }}"
            required
            autofocus
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
          @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-700">
            Email
          </label>
          <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
          @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label
            for="password"
            class="block text-sm font-semibold text-gray-700"
          >
            Senha
          </label>
          <input
            id="password"
            type="password"
            name="password"
            required
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
          @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label
            for="password_confirmation"
            class="block text-sm font-semibold text-gray-700"
          >
            Confirmar Senha
          </label>
          <input
            id="password_confirmation"
            type="password"
            name="password_confirmation"
            required
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
        </div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-gray-900 text-white font-bold rounded-md shadow hover:bg-gray-800 transition"
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
