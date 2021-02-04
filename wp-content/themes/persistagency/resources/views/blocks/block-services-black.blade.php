<div class="{{ $class }} bg-black text-white scratch scratch-black__up scratch-black__down block-services-black">
  <div class="container lg:px-8 max-w-screen-lg mx-auto px-4 py-16 xl:py-20">

    <div class="flex flex-col items items-center lg:flex-row lg:items-start lg:justify-between lg:space-x-5 lg:space-y-0 space-x-0 space-y-20">
      @foreach ($columns as $items)

        @if (!empty($items))
          <div class="flex flex-col items max-w-md space-y-20">
            @foreach ($items as $item)
              <div class="item">

                @if (!empty($item['icon']))
                  {!! wp_get_attachment_image($item['icon']['id'], 'full', false, ['class' => 'h-16 relative z-10']) !!}
                @endif

                @if (!empty($item['title']))
                  <h3 class="font-bold leading-none text-5xl relative z-10 mt-4">
                    {{ $item['title'] }}
                  </h3>
                @endif

                @if (!empty($item['text']))
                  <div class="leading-loose mt-4 relative text-xl z-10">
                    {!! $item['text'] !!}
                  </div>
                @endif

              </div>
            @endforeach
          </div>
        @endif

      @endforeach
    </div>
  </div>
</div>
