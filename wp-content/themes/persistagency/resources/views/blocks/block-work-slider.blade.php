<div data-animation="home-case-studies-bg" class="work-slider relative {{ $class }} block-work-slider anim-in fade-in anim-section h-screen">
  <div class="section-bg absolute w-full h-full object-cover"> </div>
	{{-- <div data-animation="home-case-studies-splatter" data-animationdelay="500" class="anim-in">
		<div class="section-bg absolute object-cover w-7/12 bottom-0 left-0 ml-20 mb-20"></div>
	</div> --}}

	<div class="w-screen mx-auto px-4 py-8">

    @if (!empty($title))
		<div class="max-w-screen-xl mx-auto fade-in-element relative">
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl uppercase" style="background-image:url('@asset('images/brush-yellow.png')')">
        {{ $title }}
      </h2>
			</div>
    @endif

    @if ($items)
      <div class="work-slider__slider">

        @foreach ($items as $item)
          <div class="item">
            <div class="
{{ $item['custom_class'] ? $item['custom_class'] : '' }}
{{ $item['reverse'] ? 'md:flex-row-reverse' : 'md:flex-row ' }}
              flex flex-col flex-wrap justify-center w-full h-full relative max-w-screen-xl mx-auto">

              @if ($item['illustration'])
                <div class="md:w-7/12 relative slide-from-left">
                  {!! wp_get_attachment_image($item['illustration']['id'], 'full', false, ['class' => 'wp-thumbnail']) !!}
                </div>
              @endif

              <div class="md:w-5/12 slide-from-right delay-25">

                @if (!empty($item['icons']))
                  <div class="flex flex-row items-center space-x-4">
                    @foreach ($item['icons'] as $icon)
                      <img src="{{ $icon['url'] }}" class="w-6" />
                    @endforeach
                  </div>
                @endif

                @if (!empty($item['title']))

                  <h3 class="font-bold leading-tight text-6xl mt-2 relative">
                    <a href="{{ $item['url'] }}">
                      {{ $item['title'] }}
                    </a>
                  </h3>
                @endif

                @if (!empty($item['excerpt']))
                  <div class="leading-loose mt-2 text-xl relative">
                    {{ $item['excerpt'] }}
                  </div>
                @endif

                <div class="mt-10">

                  <a href="{{ $item['url'] }}" class="btn btn-primary relative">
                    View case Study
                  </a>

                </div>

              </div>

            </div>
          </div>
        @endforeach

      </div>

    @endif

    @if (!empty($link))
      <a class="block flex font-bold items-center justify-end space-x-1 text-lg uppercase" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
        <span>View all work</span>
        <img src="@asset('images/arrow-right.png')" alt="arrow" />
      </a>
    @endif

  </div>
</div>
