<div class="{{ $class }} block-story-stats relative">

  @if ($image)
    {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-full w-full object-cover wp-thumbnail absolute']) !!}
  @endif

  <div class="container mx-auto px-4 py-20 relative xl:py-48">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup mt-5 inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10 text-white" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    <div class="flex flex-col lg:space-x-20 lg:space-y-0 md:flex-row my-12 space-y-16 xl:my-20 xl:px-12 xl:space-x-24">

      <div class="lg:w-6/12">

        @if (!empty($title))
          <h3 class="font-bold leading-none relative text-5xl text-yellow xl:text-6xl z-10">
            {{ $title }}
          </h3>
        @endif

        @if (!empty($text))
          <div class="font-bold mt-6 prose-xl relative xl:mt-12 z-10 text-white">
            {!! $text !!}
          </div>
        @endif

      </div>

      @if (!empty($stats))
        <div class="flex flex-col lg:w-6/12 space-y-16 xl:space-y-24 justify-end">
          @foreach ($stats as $stat)

            <div class="">

              @if (!empty($stat['number']))
                <div class="bg-fill font-brushup inline-block leading-none mt-4 px-6 relative text-7xl text-yellow uppercase xl:text-12xl z-10" style="background-image:url('@asset('images/brush-red-big.png')')">
                  <div class="xl:-translate-y-5 transform xl:translate-x-3">{{ $stat['number'] }}</div>
                </div>
              @endif

              @if (!empty($stat['title']))
                <div class="font-bold leading-5 max-w-xs text-2lg uppercase text-white mx-10">{{ $stat['title'] }}</div>
              @endif


            </div>
          @endforeach
        </div>
      @endif

    </div>

  </div>

</div>
