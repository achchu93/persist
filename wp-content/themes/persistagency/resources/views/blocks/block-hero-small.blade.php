<div class="{{ $class }} relative overflow-hidden">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']) !!}
  @endif

  <div class="mx-auto py-48 relative">

    <h2 class="-rotate-8 font-brushuptoo lg:text-6xl md:text-5xl px-3 text-4xl text-center text-white transform xl:text-8xl">
      @if (!empty($header))
        <div class="xl:-ml-40">
          {!! $header !!}
        </div>
      @endif
      @if (!empty($header2))
        <div class="xl:-mr-40">
          {!! $header2 !!}
        </div>
      @endif
    </h2>

  </div>

</div>
