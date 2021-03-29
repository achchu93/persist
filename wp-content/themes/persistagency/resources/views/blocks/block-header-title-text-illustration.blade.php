<div class="{{ $class }} block-header-title-text-illustration anim-section">
  <div class="container max-w-screen-xl mx-auto px-4 py-32">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($title))
      <h3 class="font-bold leading-none max-w-screen-md mt-12 mx-auto text-5xl xl:text-6xl">
        {{ $title }}
      </h3>
    @endif

    <div class="flex flex-col justify-center max-w-screen-md md:flex-row md:space-x-5 mx-auto space-x-0">

      @if (!empty($text))
        <div class="leading-loose mt-6 relative text-xl z-10 flex-1">
          {!! $text !!}
        </div>
      @endif

      @if (!empty($text2))
        <div class="leading-loose mt-6 relative text-xl z-10 flex-1">
          {!! $text2 !!}
        </div>
      @endif

    </div>

    @if ($image)
      <div class="mt-24">
        {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-auto mx-auto w-full']) !!}
      </div>
    @endif

  </div>
</div>
