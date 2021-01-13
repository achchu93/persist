<header class="text-white bg-gray-700 dummy">
  <div class="container flex flex-col justify-between md:flex-row md:py-2 mx-auto px-5">
    <a href="{{ $home_url }}" title="{{ $site_name }}" class="flex title-font font-medium items-center text-white mt-3 md:mt-0 px-3 md:px-0 mx-auto md:ml-0">
      @if ($header_logo_option)
        <img src="{{ $header_logo_option['url'] }}" alt="logo" class="h-auto md:w-32 w-30 ">
      @else
        {{ $site_name }}
      @endif
    </a>

    @if (is_active_sidebar('sidebar-header'))
      <div class="hidden md:flex flex-wrap space-x-5 max-w-md">
        @php dynamic_sidebar('sidebar-header') @endphp
      </div>
    @endif

  </div>
</header>
