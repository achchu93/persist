<div class="{{ $class }} block-background-and-story relative bg-gray-900">

  @if ($image)
    {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'wp-thumbnail absolute object-cover w-full h-full']) !!}
  @endif

  <div class="container max-w-screen-sm mx-auto px-4 py-32 relative xl:max-w-screen-md xl:py-56">

    @if (!empty($title))
      <h2 class="font-bold leading-none relative text-5xl text-white z-10">
        {{ $title }}
      </h2>
    @endif

    @if (!empty($subtitle))
      <h3 class="font-semibold italic leading-none mt-2 relative text-3xl text-red z-10">
        {{ $subtitle }}
      </h3>
    @endif

    @if (!empty($text))
      <div class="mt-8 prose-lg md:prose-xl font-bold text-white">{!! $text !!}</div>
    @endif

  </div>

</div>
