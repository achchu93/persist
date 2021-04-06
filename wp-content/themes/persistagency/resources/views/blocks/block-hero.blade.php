<div data-animation="home-marquee-bg" data-animationdelay="0" class="{{ $class }} fixed block-hero overflow-hidden block-hero hidden sm:block h-full sm:h-screen w-full anim-in parallax">
<div class="section-bg absolute w-full h-full object-cover hidden sm:block"></div>

	<div data-animation="home-marquee-txt" data-animationdelay="1000" class="anim-in">
		<div class="section-bg absolute object-cover w-7/12 bottom-0 left-0 ml-20 mb-20"></div>
	</div>

  </div>
</div>
<div class="relative h-screen anim-section opacity-0 hidden sm:block"></div>

<div class="{{ $class }} relative block-hero overflow-hidden block-hero block sm:hidden h-full sm:h-screen w-full anim-in parallax">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'md:hidden absolute w-full h-full object-cover']) !!}
  @endif

  <div class="mx-auto py-32 relative">

    @if (!empty($header))
      <h2 class="block-hero__header -rotate-8 font-brushuptoo lg:mt-32 lg:text-6xl md:text-5xl mt-20 px-3 text-3xl text-center text-white transform xl:mb-24 xl:mt-64 xl:text-8xl">
        {!! $header !!}
      </h2>
    @endif

  </div>
</div>