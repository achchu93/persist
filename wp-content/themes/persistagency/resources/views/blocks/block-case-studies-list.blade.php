<div class="{{ $class }}">
  <div class="container md:py-20 mx-auto px-4 py-16 xl:py-24">

    @if (!empty($title))
      <h2 class="bg-cover font-brushup inline-block leading-none mx-16 pb-2 px-6 text-4xl uppercase" style="background-image:url('@asset('images/brush-yellow.png')')">
        {{ $title }}
      </h2>
    @endif

    @if ($items)
      <div class="flex flex-col lg:mt-16 md:mt-10 mt-8 space-y-16 xl:mt-20 xl:space-y-24">

        @foreach ($items as $item)
          <div class="{{ $item['class'] }} item">

            <div class="{{ $item['reverse']?'md:flex-row-reverse':'md:flex-row ' }} flex flex-col flex-wrap justify-center w-full h-full py-4">

              @if ($item['illustration'])
                <div class="md:w-7/12 relative">
                  {!! wp_get_attachment_image($item['illustration']['id'], 'full', false, ['class' => 'w-full h-auto']) !!}
                </div>
              @endif

              <div class="md:w-5/12">

                @if (!empty($item['title']))

                  <h3 class="font-bold leading-tight text-6xl">
                    <a href="{{ $item['url'] }}">
                      {{ $item['title'] }}
                    </a>
                  </h3>
                @endif

                @if (!empty($item['excerpt']))
                  <div class="leading-loose mt-2 text-xl">
                    {{ $item['excerpt'] }}
                  </div>
                @endif

                <div class="mt-10">

                  <a href="{{ $item['url'] }}" class="btn btn-primary">
                    View case Study
                  </a>

                </div>

              </div>

            </div>
          </div>
        @endforeach

      </div>

    @endif

    @if (!empty($link))
      <a class="block flex font-bold items-center justify-end space-x-1 text-lg uppercase" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
        <span>View all work</span>
        <img src="@asset('images/arrow-right.png')" alt="arrow" />
      </a>
    @endif

  </div>
</div>
