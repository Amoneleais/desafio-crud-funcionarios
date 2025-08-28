<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Admin</title>
  </head>

  <body class="bg-light">
    <nav class="bg-indigo-700 text-white mb-6">
      <div
        class="max-w-6xl mx-auto px-4 py-3 flex flex-col sm:flex-row items-center justify-between"
      >
        <a class="text-2xl font-bold tracking-tight" href="/">Connecta</a>
        <div class="flex gap-4 mt-2 sm:mt-0">
          <a href="{{ route('funcionarios.index') }}" class="hover:underline">
            Funcionários
          </a>
          @auth
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button type="submit" class="hover:underline ml-2">Sair</button>
            </form>
          @endauth
        </div>
      </div>
    </nav>
    <main class="max-w-6xl mx-auto px-4 py-6">
      @yield('content')
    </main>
  </body>
</html>
