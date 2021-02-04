<div class="{{ $class }} z-20 block-cta
     {{ $variant == 'black' ? 'bg-black scratch scratch-black__up scratch-black__down text-white' : '' }}
     {{ $variant == 'blue' ? 'bg-blue scratch scratch-blue-small__up scratch-blue-small__down text-white' : '' }}
     {{ $variant == 'blue-yellow' ? 'bg-blue scratch scratch-blue-small__up scratch-blue-small__down text-white' : '' }}
     {{ $variant == 'red' ? 'bg-red scratch scratch-red__up scratch-red__down text-white' : '' }}
     ">
  <div class="container max-w-screen-lg mx-auto px-4 py-16 text-center">

    @if (!empty($text))
      <h2 class="pb-2 text-5xl uppercase xl:text-7xl
     {{ $variant == 'blue-yellow' ? 'font-brushuptoo' : 'font-brushup' }}
     {{ $variant == 'blue-yellow' ? 'text-yellow' : '' }}
        ">
        {{ $text }}
      </h2>
    @endif
    
    @if (!empty($author))
    <div class="font-bold text-lg text-right uppercase">{{ $author }}</div>
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
