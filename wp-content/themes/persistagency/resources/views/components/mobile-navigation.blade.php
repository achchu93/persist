<div class="mobile-menu bg-black fixed flex flex-col h-screen overflow-hidden right-0 text-white top-0 z-50 w-0 "
     style="transition: 0.5s"
  >
  <div class="w-screen p-4"> 
    <svg 
       aria-hidden="true" 
       focusable="false" 
       role="img" 
       xmlns="http://www.w3.org/2000/svg" 
       viewBox="0 0 352 512" 
       class="mobile-menu__close absolute h-6 mr-5 right-0 w-6 cursor-pointer text-white mt-16"
       >
       <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
    </svg>


    <a 
       href="{{ $home_url }}"  
       title="{{ $site_name }}" 
       class="flex title-font font-medium items-center text-white mt-2 lg:mt-0 px-3 lg:px-0 mx-auto lg:ml-0"
       > 
       @if ($header_logo_white)
         <img src="{{$header_logo_white['url']}}" alt="logo" class="w-48 h-auto mx-auto">
       @else
         {{ $site_name }}
       @endif
    </a> 

    <ul class="flex flex-col font-semibold font-title items-center pt-10 px-10 space-y-4 text-lg">
      @foreach ($navigation as $item)
        <li class="text-center {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }}">
          <a class="hover:text-gray-900 text-yellow" href="{{ $item->url }}">
            {{ $item->label }}
          </a>

          @if ($item->children)
            <ul class="mt-2 my-child-menu space-y-4 text-md flex flex-col items-center">
              @foreach ($item->children as $child)
                <li class="my-child-item {{ $item->classes ?? '' }} {{ $child->active ? 'active' : '' }}">
                  <a href="{{ $child->url }}">
                    {{ $child->label }}
                  </a>
                </li>
              @endforeach
            </ul>
          @endif
        </li>
      @endforeach
    </ul>
  </div>
</div>
