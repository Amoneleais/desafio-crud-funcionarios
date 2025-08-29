<article
  {{ $attributes->merge(['class' => 'p-6 bg-white rounded-lg border shadow-sm hover:shadow-md transition transform hover:-translate-y-1 duration-300 flex flex-col']) }}
>
  <div class="flex items-start mb-4">
    {{ $icon ?? '' }}
  </div>

  <h3 class="text-lg font-semibold text-gray-900 mb-3 text-left">
    {{ $title ?? '' }}
  </h3>

  <p class="text-gray-600 text-sm leading-relaxed text-left">
    {{ $content ?? $slot }}
  </p>
</article>
