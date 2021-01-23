<div class="{{ $class }}">

  @if (!empty($image))
   {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'w-full h-auto']) !!} 
  @endif

</div> 
