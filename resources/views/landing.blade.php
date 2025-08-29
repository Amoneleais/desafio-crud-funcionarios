@extends('layouts.landing')

@section('content')
  <!-- Hero Section -->
  <section
    class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 min-h-[85vh] flex items-center justify-center overflow-hidden"
  >
    <!-- Background Image -->
    <div
      class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80')] bg-cover bg-center"
    ></div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-3xl mx-auto text-center text-white px-6">
      <h1
        class="text-5xl md:text-7xl font-extrabold mb-6 drop-shadow-xl leading-tight"
      >
        Gestão Empresarial Moderna
      </h1>
      <p class="text-lg md:text-2xl mb-10 font-light drop-shadow">
        Soluções inteligentes para o controle de funcionários e crescimento
        sustentável do seu negócio.
      </p>
      <div class="flex justify-center gap-4">
        <a
          href="/funcionarios"
          class="bg-white text-gray-900 font-semibold px-8 py-4 rounded-md shadow-lg hover:bg-gray-100 transition text-lg"
        >
          Comece Agora
        </a>
        <a
          href="#features"
          class="bg-gray-700/60 border border-white/40 text-white px-8 py-4 rounded-md shadow-lg hover:bg-gray-600/80 transition text-lg"
        >
          Saiba Mais
        </a>
      </div>
    </div>

    <!-- Wave Divider -->
    <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]">
      <svg
        class="relative block w-full h-32 md:h-48"
        xmlns="http://www.w3.org/2000/svg"
        preserveAspectRatio="none"
        viewBox="0 0 1440 320"
      >
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320H0Z"
        ></path>
      </svg>
    </div>
  </section>

  <!-- Features -->
  <section id="features" class="bg-white py-20 rounded-xl shadow">
    <div class="container mx-auto px-6 md:px-12 grid md:grid-cols-3 gap-10">
      <!-- Feature 1 -->
      <div
        class="bg-gray-50 rounded-2xl p-10 shadow-md hover:shadow-xl transition"
      >
        <div class="mb-6">
          <svg
            class="w-14 h-14 mx-auto text-gray-600"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M3 7v10a4 4 0 004 4h10a4 4 0 004-4V7m-4-4H7a4 4 0 00-4 4v0a4 4 0 004 4h10a4 4 0 004-4v0a4 4 0 00-4-4z"
            />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-900">
          Controle de Funcionários
        </h3>
        <p class="text-gray-600">
          Gerencie cadastros, atualizações e exclusões de forma rápida e
          intuitiva.
        </p>
      </div>

      <!-- Feature 2 -->
      <div
        class="bg-gray-50 rounded-2xl p-10 shadow-md hover:shadow-xl transition"
      >
        <div class="mb-6">
          <svg
            class="w-14 h-14 mx-auto text-gray-600"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3zm0 10c-4.418 0-8-1.79-8-4V7a2 2 0 012-2h12a2 2 0 012 2v7c0 2.21-3.582 4-8 4z"
            />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-900">
          Segurança e Privacidade
        </h3>
        <p class="text-gray-600">
          Proteção avançada com autenticação segura e permissões customizadas.
        </p>
      </div>

      <!-- Feature 3 -->
      <div
        class="bg-gray-50 rounded-2xl p-10 shadow-md hover:shadow-xl transition"
      >
        <div class="mb-6">
          <svg
            class="w-14 h-14 mx-auto text-gray-600"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M9 17v-2a4 4 0 014-4h3m4 0a4 4 0 00-4-4H7a4 4 0 00-4 4v6a4 4 0 004 4h6a4 4 0 004-4v-2"
            />
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3 text-gray-900">
          Relatórios Inteligentes
        </h3>
        <p class="text-gray-600">
          Visualize e exporte relatórios detalhados para decisões estratégicas.
        </p>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="bg-gradient-to-br from-gray-50 to-gray-100 py-20">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">
        O que dizem nossos clientes
      </h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-8 rounded-xl shadow">
          <p class="text-gray-600 italic mb-4">
            “A plataforma revolucionou a forma como gerimos nossa equipe.”
          </p>
          <h4 class="font-semibold text-gray-900">Ana Silva</h4>
          <span class="text-sm text-gray-500">CEO - StartupX</span>
        </div>
        <div class="bg-white p-8 rounded-xl shadow">
          <p class="text-gray-600 italic mb-4">
            “Simples, segura e eficiente. Não imagino meu negócio sem ela.”
          </p>
          <h4 class="font-semibold text-gray-900">Carlos Mendes</h4>
          <span class="text-sm text-gray-500">Diretor - InovaCorp</span>
        </div>
        <div class="bg-white p-8 rounded-xl shadow">
          <p class="text-gray-600 italic mb-4">
            “Os relatórios inteligentes nos deram vantagem competitiva.”
          </p>
          <h4 class="font-semibold text-gray-900">Fernanda Oliveira</h4>
          <span class="text-sm text-gray-500">Gestora - PrimeTech</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section
    class="bg-gradient-to-br from-gray-800 to-gray-900 py-20 text-center text-white"
  >
    <h2 class="text-3xl md:text-5xl font-bold mb-6">
      Pronto para transformar sua gestão?
    </h2>
    <p class="text-lg mb-10 max-w-2xl mx-auto">
      Experimente grátis e descubra como é simples modernizar o controle de
      funcionários e impulsionar seu negócio.
    </p>
    <a
      href="/register"
      class="bg-white text-gray-900 px-10 py-4 rounded-full text-lg font-semibold shadow-lg hover:bg-gray-100 transition"
    >
      Criar Conta Grátis
    </a>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-gray-300 py-10">
    <div
      class="container mx-auto px-6 grid md:grid-cols-3 gap-8 text-center md:text-left"
    >
      <div>
        <h4 class="font-bold text-white mb-3">Gestão Empresarial</h4>
        <p class="text-sm">
          Plataforma completa para otimizar e modernizar sua empresa.
        </p>
      </div>
      <div>
        <h4 class="font-bold text-white mb-3">Links</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#features" class="hover:text-white">Recursos</a></li>
          <li><a href="/login" class="hover:text-white">Entrar</a></li>
          <li><a href="/register" class="hover:text-white">Criar Conta</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold text-white mb-3">Contato</h4>
        <p class="text-sm">Email: suporte@empresa.com</p>
        <p class="text-sm">Telefone: (11) 1234-5678</p>
      </div>
    </div>
    <div class="mt-8 text-center text-xs text-gray-500">
      © {{ date('Y') }} Gestão Empresarial. Todos os direitos reservados.
    </div>
  </footer>
@endsection
