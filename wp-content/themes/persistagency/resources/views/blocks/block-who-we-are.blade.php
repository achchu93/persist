<div class="{{ $class }} relative block-who-we-are fade-in">
  <div class="container md:py-12 mx-auto px-4 py-8 xl:pb-24 xl:pt-20">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-white uppercase fade-in-element stagger-1" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($title))
      <h3 class="leading-loose max-w-4xl md:text-3xl mt-5 mx-auto text-2xl text-blue xl:mt-6 xl:text-4xl fade-in-element stagger-1">
        {{ $title }}
      </h3>
    @endif

    @if (!empty($content))
      <div class="leading-loose max-w-4xl mt-2 mt-6 mx-auto prose text-xl xl:mt-10 fade-in-element stagger-1">{!! $content !!}</div>
    @endif

  </div>
</div>
