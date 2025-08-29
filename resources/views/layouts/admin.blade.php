<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>GestFunc</title>
  </head>
  <body class="min-h-screen bg-gray-50">
    <nav class="bg-white border-b border-gray-200">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <a
              href="/"
              class="flex-shrink-0 text-2xl font-extrabold text-gray-900"
            >
              GestFunc
            </a>
            <div class="hidden md:block md:ml-6">
              <div class="flex space-x-4">
                <a
                  href="{{ route('funcionarios.index') }}"
                  class="text-gray-700 hover:bg-gray-100 hover:text-gray-900 px-3 py-2 border rounded-md text-sm font-medium"
                >
                  Funcionários
                </a>
              </div>
            </div>
          </div>
          <div class="flex items-center">
            @auth
              <form
                action="{{ route('logout') }}"
                method="POST"
                class="hidden md:block"
              >
                @csrf
                <button
                  type="submit"
                  class="inline-flex items-center px-3 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-md text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                  Sair
                </button>
              </form>
            @endauth

            <div class="-mr-2 flex md:hidden">
              <button
                type="button"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                aria-controls="mobile-menu"
                aria-expanded="false"
                data-collapse-toggle="mobile-menu"
              >
                <span class="sr-only">Open main menu</span>
                <svg
                  class="block h-6 w-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  aria-hidden="true"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
          <a
            href="{{ route('funcionarios.index') }}"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100"
          >
            Funcionários
          </a>
          @auth
            <form action="{{ route('logout') }}" method="POST">
              @csrf
              <button
                type="submit"
                class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100"
              >
                Sair
              </button>
            </form>
          @endauth
        </div>
      </div>
    </nav>
    <main class="max-w-5xl mx-auto px-4 py-10">
      @yield('content')
    </main>
    <footer
      class="w-full text-center text-gray-600 py-6 text-sm bg-white border-t border-gray-200 bottom-0 absolute"
    >
      &copy; {{ date('Y') }} GestFunc. Todos os direitos reservados.
    </footer>
  </body>
</html>
