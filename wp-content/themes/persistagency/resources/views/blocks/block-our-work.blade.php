<div class="{{ $class }} scratch scratch-gray__up bg-gray1 block-our-work anim-section">
  <div class="container mx-auto pb-32 pt-12 px-4 py-8">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 pt-1 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($items))
      <div class="gap-6 grid items-center justify-center md:grid-cols-3 mt-20 xl:gap-x-24 xl:gap-y-12">

        @foreach ($items as $item)
          <div class="">

            @if (!empty($item['image']))
              @if (!empty($item['link']))
                <a class="" href="{{ $item['link']['url'] }}" target="{{ $item['link']['target'] }}">
              @endif
              {!! wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'w-full h-auto']) !!}
              @if (!empty($link))
                </a>
              @endif
            @endif

            @if (!empty($item['title']))
              <h4 class="mt-2 uppercase xl:mt-3 px-4">

                @if (!empty($item['link']))
                  <a class="" href="{{ $item['link']['url'] }}" target="{{ $item['link']['target'] }}">
                @endif

                {{ $item['title'] }}

                @if (!empty($item['link']))
                  </a>
                @endif

              </h4>
            @endif

            @if (!empty($item['subtitle']))
              <h5 class="italic text-red text-sm px-4">
                {{ $item['subtitle'] }}
              </h5>
            @endif

          </div>
        @endforeach
      </div>
    @endif

  </div>

</div>
