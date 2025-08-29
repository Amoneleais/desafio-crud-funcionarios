<section id="features" class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-14">
      <h2 class="text-4xl md:text-5xl font-extrabold">
        Recursos que ajudam sua equipe
      </h2>
      <p class="text-gray-600 mt-3 max-w-2xl mx-auto">
        Ferramentas objetivas para gerenciar folha, contatos e histórico de
        funcionários — pensadas para times reais e processos do dia a dia.
      </p>
    </div>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-start">
        <x-feature-card class="h-auto md:h-56 border border-gray-100 shadow-sm hover:shadow-md">
          <x-slot name="icon">
            <div class="inline-flex items-center justify-center bg-indigo-50 rounded-full p-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11a4 4 0 10-8 0 4 4 0 008 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 21v-2a4 4 0 014-4h8a4 4 0 014 4v2" />
              </svg>
            </div>
          </x-slot>
          <x-slot name="title">Cadastro Rápido</x-slot>
          <x-slot name="content">Formulários simples com validação para cadastrar funcionários em segundos.</x-slot>
  </x-feature-card>

  <x-feature-card class="h-auto md:h-56 border border-gray-100 shadow-sm hover:shadow-md">
          <x-slot name="icon">
            <div class="inline-flex items-center justify-center bg-indigo-50 rounded-full p-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <rect x="3" y="11" width="4" height="10" rx="1" stroke="currentColor" stroke-width="2" fill="none"></rect>
                <rect x="10" y="7" width="4" height="14" rx="1" stroke="currentColor" stroke-width="2" fill="none"></rect>
                <rect x="17" y="3" width="4" height="18" rx="1" stroke="currentColor" stroke-width="2" fill="none"></rect>
              </svg>
            </div>
          </x-slot>
          <x-slot name="title">Relatórios</x-slot>
          <x-slot name="content">Exportação e visualização de relatórios de presença e desempenho.</x-slot>
  </x-feature-card>

  <x-feature-card class="h-auto md:h-56 border border-gray-100 shadow-sm hover:shadow-md">
          <x-slot name="icon">
            <div class="inline-flex items-center justify-center bg-indigo-50 rounded-full p-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <rect x="3" y="11" width="18" height="10" rx="2" ry="2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 11V7a5 5 0 0110 0v4" />
              </svg>
            </div>
          </x-slot>
          <x-slot name="title">Segurança</x-slot>
          <x-slot name="content">Controle de permissões e logs de auditoria para maior segurança dos dados.</x-slot>
  </x-feature-card>
  </div>
      <div class="mt-14 overflow-visible">
        <div class="flex justify-center">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-max mx-auto">
            <x-feature-card class="w-64 md:w-80 h-auto md:h-56 border border-gray-100 shadow-sm hover:shadow-md overflow-visible">
            <x-slot name="icon">
              <div class="inline-flex items-center justify-center bg-indigo-50 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a1 1 0 00-1-1h-6M4 11v6a1 1 0 001 1h6" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h.01M16 17h.01" />
                </svg>
              </div>
            </x-slot>
            <x-slot name="title">Integrações</x-slot>
            <x-slot name="content">Conecte-se a sistemas externos (payroll, CRM) via APIs e webhooks.</x-slot>
          </x-feature-card>

            <x-feature-card class="w-64 md:w-80 h-auto md:h-56 border border-gray-100 shadow-sm hover:shadow-md overflow-visible">
            <x-slot name="icon">
              <div class="inline-flex items-center justify-center bg-indigo-50 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2M12 19v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                  <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" fill="none" />
                </svg>
              </div>
            </x-slot>
            <x-slot name="title">Automação</x-slot>
            <x-slot name="content">Ações automatizadas (notificações, rotinas) para reduzir trabalho manual.</x-slot>
          </x-feature-card>
        </div>
      </div>
</section>
