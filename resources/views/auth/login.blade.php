<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
          <label for="email" class="block text-sm font-semibold text-gray-700">
            Email
          </label>
          <input
            type="email"
            id="email"
            name="email"
            required
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
          @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
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
            type="password"
            id="password"
            name="password"
            required
            class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow focus:border-gray-500 focus:ring focus:ring-gray-200 focus:ring-opacity-50"
          />
        </div>
        <div class="flex items-center justify-between">
          <a
            href="{{ route('register') }}"
            class="text-sm text-gray-700 hover:text-gray-900 hover:underline font-semibold"
          >
            Não tem uma conta? Cadastre-se
          </a>
        </div>
        <button
          type="submit"
          class="w-full py-3 px-4 bg-gray-900 text-white font-bold rounded-md shadow hover:bg-gray-800 transition"
        >
          Entrar
        </button>
      </form>
    </div>
  </body>
</html>
