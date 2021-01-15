<div class="page-header">
  @if ($header_background)
    @if ($header_background_mobile)
      {!! wp_get_attachment_image($header_background_mobile['id'], 'full', false, ['class' => 'w-full h-auto md:hidden']) !!}
      {!! wp_get_attachment_image($header_background['id'], 'full', false, ['class' => 'w-full h-auto hidden md:block']) !!}
    @else
      {!! wp_get_attachment_image($header_background['id'], 'full', false, ['class' => 'w-full h-auto']) !!}
    @endif
  @endif
  <h1 class="hidden">{!! $title !!}</h1>
</div>
