<div class="scratch-black bg-black scratch-black__up scratch-black__down text-white {{ $class }} anim-section">
  <div class="container mx-auto px-4 py-16 text-center">

    @if (!empty($title))
      <h2 class="font-brushup pb-2 text-5xl uppercase xl:text-7xl">
        {{ $title }}
      </h2>
    @endif

    @if (!empty($link))
      <div class="text-center">
        <a class="btn btn-secondary px-16" href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
      </div>
    @endif

  </div>
</div>
