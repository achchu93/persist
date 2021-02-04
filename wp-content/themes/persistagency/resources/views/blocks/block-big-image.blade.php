<div class="{{ $class }} block-big-image">

  @if (!empty($image))
   {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'w-full h-auto']) !!} 
  @endif

</div> 
