<header id="pageHeader" class="absolute w-full z-10 fade-in slide-from-top-stagger">
  <div class="container flex flex-col items-start justify-between md:flex-row md:py-2 mx-auto px-5">
    <a href="{{ $home_url }}" title="{{ $site_name }}" class="md:ml-0 md:mt-0 md:px-0 md:w-auto mt-3 px-3 w-64 slide hidden sm:block" style="--index: 0;">
      @if ($header_style == 'black' && $header_logo_black)
        <img src="{{ $header_logo_black['url'] }}" alt="logo" class="h-auto w-full">
      @elseif ($header_style == 'white' && $header_logo_white)
        <img src="{{ $header_logo_white['url'] }}" alt="logo" class="h-auto w-full">
      @else
        {{ $site_name }}
      @endif
    </a>

    <x-navigation :style="$header_style"></x-navigation>

    @if ($say_hello_url)
      <div class="font-semibold font-title hidden items-center justify-center md:block md:ml-auto py-5 text-base slide" style="--index: 4;">
        <a href="{{ $say_hello_url }}" class="{{ $header_style == 'black' ? 'bg-yellow text-black ' : 'bg-black text-white' }} font-bold inline-block leading-none px-4 py-2 rounded-full select-none uppercase" data-id="{{ $item->dbId }}">
          Say hello
        </a>
      </div>
    @endif

    <svg class="{{ $header_style == 'black' ? 'text-black' : 'text-white' }} mobile-menu__toggle md:hidden absolute cursor-pointer h-5 mr-5 mt-20 right-0 w-5" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
    </svg>

  </div>
</header>
