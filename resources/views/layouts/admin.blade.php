<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Gestão Empresarial Moderna</title>
  </head>
  <body class="min-h-screen bg-gray-50">
    <!-- Navbar -->
    <nav
      class="relative z-20 bg-white/90 backdrop-blur shadow-sm border-b border-gray-200"
    >
      <div
        class="max-w-6xl mx-auto px-4 py-3 flex flex-col sm:flex-row items-center justify-between"
      >
        <a
          class="text-3xl font-extrabold tracking-tight text-gray-900 drop-shadow-sm"
          href="/"
        >
          Connecta
        </a>
        <div class="flex gap-4 mt-2 sm:mt-0">
          <a
            href="{{ route('funcionarios.index') }}"
            class="text-gray-700 font-semibold hover:text-gray-900 hover:underline transition"
          >
            Funcionários
          </a>
          @auth
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button
                type="submit"
                class="text-gray-700 font-semibold hover:text-gray-900 hover:underline ml-2 transition"
              >
                Sair
              </button>
            </form>
          @endauth
        </div>
      </div>
    </nav>
    <!-- Conteúdo principal -->
    <main class="max-w-5xl mx-auto px-4 py-10">
      @yield('content')
    </main>
    <!-- Footer opcional -->
    <footer
      class="w-full text-center text-gray-600 py-6 text-sm bg-white border-t border-gray-200 bottom-0 absolute"
    >
      &copy; {{ date('Y') }} Connecta. Todos os direitos reservados.
    </footer>
  </body>
</html>
