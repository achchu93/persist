<div class="{{ $class }} bg-black scratch scratch-black__up block-our-partners scroll-fade-in anim-in">
  <div class="container mx-auto pb-24 pt-20 px-4 xl:pb-32 ">

    @if (!empty($header))
      <h2 class="bg-fill font-brushup inline-block leading-none pb-2 px-6 text-4xl text-black uppercase fade-in-element" style="--index: 2; background-image:url('@asset('images/brush-yellow.png')')">
        {{ $header }}
      </h2>
    @endif

    @if (!empty($items))
      <div class="flex flex-col items-center justify-between lg:flex-row lg:items-start lg:space-x-20 lg:space-y-0 mt-16 space-y-24">

        @foreach ($items as $key=>$item)
          <div class="max-w-lg fade-in-element" style="--index: {{$key}};">

            <div class="flex flex-col items-end md:flex-row md:space-y-0 md:spacex space-x-0 space-y-10">

              @if (!empty($item['image']))
                <div class="md:w-5/12 w-full">
                  {!! wp_get_attachment_image($item['image']['id'], 'full', false, ['class' => 'border-4 border-yellow h-auto w-full']) !!}
                </div>
              @endif

              <div class="md:mt-0 md:pl-10 mt-5 md:w-7/12 w-full">

                @if (!empty($item['name']))
                  <div class="font-bold leading-none mt-2 text-xl xl:mt-4 text-yellow text-4xl">{{ $item['name'] }}</div>
                @endif

                @if (!empty($item['position']))
                  <div class="font-bold mt-1 text-white text-xl uppercase">{{ $item['position'] }}</div>
                @endif

              </div>

            </div>

            @if (!empty($item['content']))
              <div class="leading-loose text-white mt-2 mt-6 prose text-xl xl:mt-10">{!! $item['content'] !!}</div>
            @endif

            @if (!empty($item['email']))
              <div class="font-bold italic leading-loose max-w-4xl mt-2 mt-6 text-2xl text-red">
                <a href="{!!  antispambot('mailto:' . $item['email']) !!}" target="_blank">
                  {{ $item['email'] }}
                </a>
              </div>
            @endif

          </div>
        @endforeach
      </div>
    @endif

  </div>
</div>
