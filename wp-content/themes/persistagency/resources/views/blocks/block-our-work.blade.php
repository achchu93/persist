<div data-animation="reusable-our-work-bg" data-animationdelay="0" class="{{ $class }} block-our-work anim-in fade-in anim-section relative overflow-hidden">
	<div class="section-bg absolute w-full h-full object-cover"></div>

  <div class="container relative mx-auto pb-32 pt-12 px-4 py-8">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 pt-1 px-6 text-4xl text-white uppercase" style="background-image:url('@asset('images/brush-red.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($items))
      <ul class="work-items gap-6 grid items-center justify-center md:grid-cols-3 mt-20 xl:gap-x-24 xl:gap-y-12">

        @foreach ($items as $key=>$item)
          <li class="work-item fade-in-element" style="--index: {{++$key}};">

            @if (!empty($item['image']))
              @if (!empty($item['link']))
                <a class="" href="{{ $item['link'] }}" target="_blank">
              @endif
              {!! wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'w-full h-auto']) !!}
              @if (!empty($link))
                </a>
              @endif
            @endif

            @if (!empty($item['title']))
              <h4 class="mt-2 uppercase xl:mt-3 px-4">

                @if (!empty($item['link']))
                  <a class="" href="{{ $item['link'] }}" target="_blank">
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

          </li>
        @endforeach
      </ul>
    @endif

  </div>

</div>
