<div class="{{ $class }}">
  <div class="container mx-auto px-4">

    <div class="item">

      <div class="{{ $reverse ? 'md:flex-row-reverse' : 'md:flex-row ' }} flex flex-col flex-wrap justify-center w-full h-full py-4">

        <div class="md:w-5/12 xl:w-4/12">

          <div class="flex items-end space-x-4">

            @if (!empty($icon))
              {!! wp_get_attachment_image($icon['id'], 'full', false, ['class' => 'h-16 relative z-10']) !!}
            @endif

            @if (!empty($title))
              <h3 class="font-bold leading-none text-5xl relative z-10">
                <a href="{{ $url }}">
                  {{ $title }}
                </a>
              </h3>
            @endif

          </div>

          @if (!empty($text))
            <div class="leading-loose lg:ml-8 mt-6 text-xl relative z-10">
              {!! $text !!}
            </div>
          @endif

        </div>

        @if ($image)
          <div class="md:w-7/12 relative xl:w-8/12">
            {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => '']) !!}
          </div>
        @endif

      </div>
    </div>

  </div>
</div>
