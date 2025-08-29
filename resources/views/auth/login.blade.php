<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.7.0/dist/flowbite.js"></script>
  </head>
  <body class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-10 mt-10">
      <h1
        class="text-3xl font-extrabold mb-8 text-center text-gray-900 drop-shadow-sm"
      >
        Entrar
      </h1>
      <form
        action="{{ route('login.authenticate') }}"
        method="POST"
        class="space-y-6"
      >
        @csrf
        <div>
          <label
            for="email"
            class="block mb-2 text-sm font-medium text-gray-900"
          >
            Email
          </label>
          <input
            type="email"
            id="email"
            name="email"
            required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
            placeholder="Digite seu email"
          />
          @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
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
            type="password"
            id="password"
            name="password"
            required
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
            placeholder="Digite sua senha"
          />
        </div>
        <div class="flex items-center justify-between">
          <a
            href="{{ route('register') }}"
            class="text-sm text-blue-600 hover:underline font-medium"
          >
            Não tem uma conta? Cadastre-se
          </a>
        </div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm"
        >
          Entrar
        </button>
      </form>
    </div>
  </body>
</html>
