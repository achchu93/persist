<div class="{{ $class }} overflow-hidden relative block-contact">

  @if ($background)
    {!! wp_get_attachment_image($background['id'], 'full', false, ['class' => 'absolute w-full h-full object-cover']) !!}
  @endif

  <div class="lg:py-56 max-w-4xl mx-auto pb-24 pt-56 relative">

    @if (!empty($items))
      <div class="gap-10 grid items-center justify-center lg:gap-x-16 lg:gap-y-10 md:grid-cols-2 px-4 xl:gap-x-24">

        @foreach ($items as $item)
          <div class="">

            @if (!empty($item['title']))
              <h3 class="lg:text-5xl text-3xl text-red uppercase">{{ $item['title'] }}</h3>
            @endif

            @if (!empty($item['content']))
              <div class="lg:text-3xl text-lg">{!! apply_filters('the_content',$item['content'] ) !!}</div>
            @endif

          </div>
        @endforeach
      </div>
    @endif

  </div>

</div>
