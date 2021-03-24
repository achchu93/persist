<div class="{{ $class }} relative scratch scratch-blue__down block-values anim-in anim-section h-screen">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']) !!}
  @endif

  <div class="container mx-auto px-4 py-32 relative">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if ($items)
      <div x-data="{ tab: '{{ $items[0]['id'] }}' }">

        <div class="items lg:max-w-4xl mx-auto xl:max-w-5xl">

          @foreach ($items as $item)
            <div x-show="tab === '{{ $item['id'] }}'" id="{{ $item['id'] }}">

              <div class="flex items-center md:space-x-8 mt-24 space-x-4 text-primary">

                @if (!empty($item['icon']))
                  {!! get_svg($item['icon'], 'fill-current h-16 md:h-24 w-auto') !!}
                @endif

                @if (!empty($item['title']))
                  <div class="md:text-8xl text-5xl">{!! $item['title'] !!}</div>
                @endif

              </div>

              @if (!empty($item['text']))
                <div class="md:text-5xl mt-5 text-3xl text-white">{!! $item['text'] !!}</div>
              @endif

            </div>

          @endforeach
        </div>

        <div class="flex justify-center mt-24 space-x-8 text-white ">

          @foreach ($items as $item)
            <div :class="{ 'text-primary': tab =='{{ $item['id'] }}' }" @click="tab = '{{ $item['id'] }}'" class="block-values__control hover:text-primary cursor-pointer" data-target="{{ $item['id'] }}">

              @if (!empty($item['icon']))
                {!! get_svg($item['icon'], 'fill-current') !!}
              @endif

            </div>
          @endforeach
        </div>

      </div>
    @endif

    @if (!empty($link))
      <div class="">
        <a class="block mt-10 flex font-bold text-white items-center hover:text-primary justify-end space-x-1 text-lg uppercase" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
          <span>{{ $link['title'] }}</span>
          <img src="@asset('images/arrow-right.png')" alt="arrow" />
        </a>
      </div>
    @endif

  </div>
</div>
