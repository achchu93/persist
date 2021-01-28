<div class="{{ $class }}
     {{ $variant == 'black' ? 'bg-black scratch scratch-black__up scratch-black__down text-white' : '' }}
     {{ $variant == 'blue' ? 'bg-blue scratch scratch-blue-small__up scratch-blue-small__down text-white' : '' }}
     {{ $variant == 'red' ? 'bg-red scratch scratch-red__up scratch-red__down text-white' : '' }}
     ">
  <div class="container mx-auto px-4 py-16 text-center">

    @if (!empty($text))
      <h2 class="font-brushup pb-2 text-5xl uppercase xl:text-7xl">
        {{ $text }}
      </h2>
    @endif

    @if (!empty($link))
      <div class="mt-4 text-center">
        <a class="btn px-16
                  {{ $variant == 'black' ? 'btn-red' : '' }}
                  {{ $variant == 'blue' ? 'btn-yellow' : '' }}
                  {{ $variant == 'red' ? 'btn-blue' : '' }}
                  " href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
      </div>
    @endif

  </div>
</div>
