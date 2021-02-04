<div class="{{ $class }} block-background-and-story">

  <div class="py-20">

    @if ($image)
      {!! wp_get_attachment_image($image['id'], 'full', false, ['class' => 'h-auto w-full wp-thumbnail']) !!}
    @endif

    <div class="container lg:-mt-48 md:-mt-32 mx-auto px-4 xl:-mt-64">

      @if (!empty($header))
        <h2 class="bg-fill font-brushup mt-5 inline-block leading-none pb-2 px-6 text-4xl uppercase relative z-10 text-white" style="background-image:url('@asset('images/brush-red.png')')">
          {{ $header }}
        </h2>
      @endif

      <div class="flex flex-col md:flex-row space-x-2 xl:space-x-16 my-12">
      
        <div class="lg:w-7/12 xl:w-8/12">

      @if (!empty($title))
        <h3 class="font-bold leading-none lg:text-6xl relative text-5xl z-10">
          <a href="{{ $url }}">
            {{ $title }}
          </a>
        </h3>
      @endif

      @if (!empty($text))
        <div class="leading-loose mt-6 text-xl relative z-10">
          {!! $text !!}
        </div>
      @endif
          
        </div>


      @if (!empty($links))
        <div class="flex flex-col lg:w-5/12 space-y-4 xl:4/12 xl:space-y-10">
          @foreach ($links as $link)
            <div class="">
              <a class="font-bold lg:text-2xl text-red text-xl uppercase xl:text-3xl" href="{{ $link['url'] }}" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
            </div>
          @endforeach
        </div>
      @endif


      </div> 


    </div>
  </div>
</div>
