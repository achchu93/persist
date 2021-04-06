<div class="block md:hidden bg-black bg-cover duration-500 ease-in-out fixed flex flex-col h-screen mobile-menu overflow-hidden overflow-y-scroll right-0 text-white top-0 transform w-100 z-50 w-screen p-4 translate-x-full" style="background-image:url('{{ $mobile_navigation_background['url'] }}')">

  <svg aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" class="mobile-menu__toggle absolute h-6 mr-5 right-0 w-6 cursor-pointer text-white mt-16">
    <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
  </svg>

  <a href="{{ $home_url }}" title="{{ $site_name }}" class="flex title-font font-medium items-center text-white mt-2 lg:mt-0 px-3 lg:px-0 mx-auto lg:ml-0">
    @if ($header_logo_white)
      <img src="{{ $header_logo_white['url'] }}" alt="logo" class="w-48 h-auto mx-auto">
    @else
      {{ $site_name }}
    @endif
  </a>

  <ul class="flex flex-col font-semibold font-title items-center pt-10 px-10 space-y-4 text-lg flex-1">
    @foreach ($navigation as $item)
      <li class="text-center {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }} {{ $item->children ? 'menu-item-has-children' : '' }}">
        <a class="text-yellow " href="{{ $item->url }}" data-toggle="{{ $item->objectId }}">
          {!! $item->label !!}
        </a>

        @if ($item->children)
          <ul class="mt-2 menu-child-menu space-y-4 text-md flex flex-col items-center" id="{{ $item->objectId }}">
            @foreach ($item->children as $child)
              <li class="menu-child-item {{ $item->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                <a href="{{ $child->url }}">
                  {!! $child->label !!}
                </a>
              </li>
            @endforeach
          </ul>
        @endif
      </li>
    @endforeach
  </ul>

  <div class="flex flex-col items-center space-y-5">
    @if ($say_hello_url)
    <a href="{{ $say_hello_url }}" class="bg-yellow text-black font-bold inline-block leading-none px-4 py-2 rounded-full select-none uppercase">
      Say hello
    </a>
    @endif

    <x-social-icons />

    <div class="flex space-x-4">

      <div class="">
        @php dynamic_sidebar('sidebar-subfooter-left') @endphp
      </div>

      <div class="">
        @php dynamic_sidebar('sidebar-subfooter-right') @endphp
      </div>

    </div>

  </div>

</div>
