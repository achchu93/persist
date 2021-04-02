<div class="{{ $class }} block-case-study-intro bg-gray2 scratch scratch-gray__down anim-section">
  <div class="container mx-auto px-4 py-8 xl:py-20">

    <div class="item">

      <div class="{{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row ' }} flex flex-col flex-wrap justify-center w-full h-full py-4">

        @if ($image)
          <div class="lg:w-7/12 relative">
            {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail']) !!}
          </div>
        @endif

        <div class="lg:w-5/12">

          <div class="flex flex-col space-y-5">

          @if (!empty($icons))
            <div class="flex flex-row items-center space-x-5">
              @foreach ($icons as $icon)
                @if (!empty($icon['icon']))
                  {!! wp_get_attachment_image($icon['icon']['id'], 'full', false, ['class' => 'w-10 h-10']) !!}
                @endif
              @endforeach
            </div>
          @endif

          @if (!empty($title))
            <h3 class="font-bold leading-none lg:text-6xl relative text-5xl z-10">
              <a href="{{ $url }}">
                {{ $title }}
              </a>
            </h3>
          @endif

          @if (!empty($text))
            <div class="leading-loose text-xl relative z-10">
              {!! $text !!}
            </div>
          @endif

          </div> 

        </div>

      </div>
    </div>

  </div>
</div>
