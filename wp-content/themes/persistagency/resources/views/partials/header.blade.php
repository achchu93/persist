<header class="absolute w-full z-10">
  <div class="container flex flex-col items-start justify-between md:flex-row md:py-2 mx-auto px-5">
    <a href="{{ $home_url }}" title="{{ $site_name }}" class="flex title-font font-medium items-center mt-3 md:mt-0 px-3 md:px-0 mx-auto md:ml-0">
      @if ($header_style == 'black' && $header_logo_black)
        <img src="{{ $header_logo_black['url'] }}" alt="logo" class="h-auto w-full">
      @elseif ($header_style == 'white' && $header_logo_white)
        <img src="{{ $header_logo_white['url'] }}" alt="logo" class="h-auto w-full">
      @else
        {{ $site_name }}
      @endif
    </a>

    <x-navigation :style="$header_style"></x-navigation>
    <x-secondary-navigation :style="$header_style"></x-secondary-navigation>

    <svg class="mobile-menu__open lg:hidden text-black absolute cursor-pointer h-5 mr-5 mt-20 right-0 w-5" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
      <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
    </svg>

  </div>
</header>
