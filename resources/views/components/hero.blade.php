<section
  class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 min-h-[65vh] flex items-center justify-center overflow-hidden"
>
  <div
    class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1500&q=80')] bg-cover bg-center opacity-50"
    aria-hidden="true"
  ></div>

  <div class="absolute inset-0 bg-black/35" aria-hidden="true"></div>

  <div
    class="relative z-10 max-w-4xl mx-auto text-center text-white px-6 py-16"
  >
    <h1
      class="text-4xl md:text-6xl lg:text-7xl font-extrabold mb-4 leading-tight tracking-tight"
    >
      Gestão Empresarial Moderna
    </h1>
    <p
      class="text-base md:text-lg lg:text-xl mb-8 text-gray-100/90 max-w-3xl mx-auto leading-relaxed"
    >
      {{ $subtitle ?? 'Soluções práticas para cadastrar, acompanhar e otimizar a gestão de pessoas. Cadastre, monitore e gere relatórios com confiança.' }}
    </p>
    <div class="flex justify-center gap-4">
      <a
        href="/funcionarios"
        class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-3 rounded-md shadow-md transition text-base"
      >
        {{ $primary ?? 'Comece Agora' }}
      </a>
      <a
        href="#features"
        class="inline-flex items-center gap-2 bg-white/10 border border-white/20 text-white px-5 py-3 rounded-md hover:bg-white/12 transition text-base"
      >
        {{ $secondary ?? 'Saiba Mais' }}
      </a>
    </div>
  </div>
  {{-- Wave Divider (curvy bottom) --}}
  <div
    class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0]"
    aria-hidden="true"
  >
    <svg
      class="relative block w-full h-28 md:h-40"
      xmlns="http://www.w3.org/2000/svg"
      preserveAspectRatio="none"
      viewBox="0 0 1440 320"
    >
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,224L48,197.3C96,171,192,117,288,117.3C384,117,480,171,576,197.3C672,224,768,224,864,197.3C960,171,1056,117,1152,117.3C1248,117,1344,171,1392,197.3L1440,224L1440,320L0,320Z"
      ></path>
    </svg>
  </div>
</section>
