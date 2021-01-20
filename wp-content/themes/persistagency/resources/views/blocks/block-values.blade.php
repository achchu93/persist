<div class="{{ $class }} relative">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']) !!}
  @endif

  <div class="container mx-auto px-4 py-32 relative">

    @if (!empty($header))
      <h2 class="bg-cover font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if ($items)
      <div class=" items max-w-5xl mx-auto">

        @foreach ($items as $item)
          <div class="block-values__item {{ $item['class'] }}" id="{{ $item['id'] }}">

            <div class="flex items-center mt-24 space-x-8">

              @if (!empty($item['icon']))
                {!! wp_get_attachment_image($item['icon']['id'], 'full', false, ['class' => 'h-24 w-auto']) !!}
              @endif

              @if (!empty($item['title']))
                <div class="text-7xl text-primary">{!! $item['title'] !!}</div>
              @endif

            </div>

            @if (!empty($item['text']))
              <div class="text-5xl text-white">{!! $item['text'] !!}</div>
            @endif

          </div>

        @endforeach
      </div>

      <div class="flex justify-center mt-24 space-x-8">

        @foreach ($items as $item)
          <div class="block-values__control text-white cursor-pointer" data-target="{{ $item['id'] }}">

            @if (!empty($item['icon']))
              {!! wp_get_attachment_image($item['icon']['id'], 'full', false, ['class' => '']) !!}
            @endif

          </div>
        @endforeach
      </div>

    @endif

    @if (!empty($link))
      <div class="">
        <a class="block flex font-bold text-white items-center justify-end space-x-1 text-lg uppercase" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
          <span>{{ $link['title'] }}</span>
          <img src="@asset('images/arrow-right.png')" alt="arrow" />
        </a>
      </div>
    @endif

  </div>
</div>
