<div class="{{ $class }} relative block-hero overflow-hidden block-hero">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']) !!}
  @endif

  <div class="mx-auto py-32 relative">

    @if (!empty($header))
      <h2 class="block-hero__header -rotate-8 font-brushuptoo lg:mt-32 lg:text-6xl md:text-5xl mt-20 px-3 text-3xl text-center text-white transform xl:mb-24 xl:mt-64 xl:text-8xl">
        {!! $header !!}
      </h2>
    @endif

  </div>

</div>
