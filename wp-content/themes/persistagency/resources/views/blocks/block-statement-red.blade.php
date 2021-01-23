<div class="scratch-red bg-red scratch scratch-red__up scratch-red__down text-white {{ $class }}">
  <div class="container mx-auto px-4 py-12 text-center">

    @if (!empty($text))
      <h2 class="font-brushup leading-snug pb-2 text-4xl uppercase xl:text-7xl">
        {!! $text !!}
      </h2>
    @endif

  </div>
</div>
