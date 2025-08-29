@extends('layouts.landing')

@section('content')
  <x-hero />
  <x-features />
  <x-testimonials />
  <x-faq />
  <div class="bg-gray-50">
    <div class="py-12">
      <div class="max-w-3xl mx-auto px-6 text-center">
        <h3 class="text-2xl font-semibold mb-4">Crie sua conta gratuita</h3>
        <p class="text-gray-600 mb-6">
          Teste recursos essenciais sem compromisso e confira como nossa solução
          facilita a gestão.
        </p>
        <a
          href="/register"
          class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-md shadow hover:bg-indigo-700 transition"
        >
          Teste gratuitamente
        </a>
      </div>
    </div>
  </div>
  <x-site-footer />
@endsection
