<div class="{{ $class }} block-case-study-intro bg-gray2 scratch scratch-gray__down">
  <div class="container mx-auto px-4 py-8 xl:py-20">

    <div class="item">

      <div class="{{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row ' }} flex flex-col flex-wrap justify-center w-full h-full py-4">

        @if ($image)
          <div class="lg:w-7/12 relative xl:w-8/12">
            {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail']) !!}
          </div>
        @endif

        <div class="lg:w-5/12 xl:w-4/12">

          <div class="flex items-end space-x-4">

            @if (!empty($title))
              <h3 class="font-bold leading-none lg:text-6xl relative text-5xl z-10">
                <a href="{{ $url }}">
                  {{ $title }}
                </a>
              </h3>
            @endif

          </div>

          @if (!empty($text))
            <div class="leading-loose mt-6 text-xl relative z-10">
              {!! $text !!}
            </div>
          @endif

        </div>

      </div>
    </div>

  </div>
</div>
