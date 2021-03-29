<div class="{{ $class }} block-text-image anim-section">
  <div class="container mx-auto px-4">

    <div class="{{ $reverse ? 'md:flex-row-reverse md:space-x-reverse' : 'md:flex-row ' }} flex flex-col md:space-x-12 justify-center w-full h-full py-4">

      <div class="md:w-6/12">

        <div class="flex flex-col space-y-5">

          @if (!empty($icon))
            <div class="">
              {!! wp_get_attachment_image($icon['id'], 'full', false, ['class' => 'h-5 w-5 relative z-10']) !!}
            </div>
          @endif

          @if (!empty($title))
            <h3 class="font-bold leading-none text-5xl relative z-10">
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

      @if ($image)
        <div class="md:w-6/12 relative">
          {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail']) !!}
        </div>
      @endif

    </div>

  </div>
</div>
