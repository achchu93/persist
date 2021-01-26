<div class="{{ $class }}">
  <div class="container mx-auto pb-24 pt-20 px-4">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($content))
      <div class="leading-loose max-w-4xl mt-2 mt-6 mx-auto prose text-xl xl:mt-10">{!! $content !!}</div>
    @endif

    @if (!empty($items))
      <div class="gap-4 grid justify-center max-w-5xl grid-cols-2 md:lg:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-6 mx-auto xl:gap-x-10 xl:gap-y-24 xl:mt-16">

        @foreach ($items as $item)
          <div class="">

            @if (!empty($item['image']))
              {!! wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'border-2 border-secondary h-auto w-full']) !!}
            @endif

            @if (!empty($item['name']))
              <div class="font-bold leading-none mt-2 text-xl xl:mt-4">{{ $item['name'] }}</div>
            @endif

            @if (!empty($item['position']))
              <div class="italic leading-none mt-1">{{ $item['position'] }}</div>
            @endif

            @if (!empty($item['from']))
              <div class="leading-none mt-1 text-red text-sm">{{ $item['from'] }}</div>
            @endif

          </div>
        @endforeach
      </div>
    @endif

  </div>
</div>
