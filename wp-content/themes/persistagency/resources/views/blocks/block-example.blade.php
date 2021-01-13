<div class="block-example {{ $class }} bg-white md:py-12 px-4 py-8 text-center">

  @if (!empty($title))
    <div class="">
      {{ $title }}
    </div>
  @endif

  @endif

  @if (!empty($text))
    <div class="">
      {{ $text }}
    </div>
  @endif

  @if (!empty($image))
    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="w-full" />
  @endif

  @if (!empty($link))
    <a class="btn btn-primary" href="{{$link['url']}}" target="{{$link['target']}}">{{$link['title']}}</a>
  @endif

</div>

