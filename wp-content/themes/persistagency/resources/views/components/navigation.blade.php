<ul class="font-semibold font-title hidden items-center justify-center md:flex md:ml-auto py-6 text-base">
  @foreach ($navigation as $item) 
    <li class="navigation relative inline-block sm:mx-2 md:mx-4 lg:mx-8 xl:mx-16 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }} {{ $item->children? 'navigation__has-submenu':'' }}"> 
      <a 
        href="{{ $item->url }}"
        target="{{ $item->target }}"
        class="leading-none inline-flex items-center justify-between px-2 py-1 font-medium text-gray-700 transition-all duration-500 rounded-md focus:outline-none focus:text-brand-900 sm:focus:shadow-outline uppercase" 
        data-id="{{ $item->dbId }}"
        >
        <span class="flex-shrink-0">
          {{ $item->label }} 
        </span> 
      </a>
      @if ($item->children)
        <div style="display:none" class="navigation__submenu absolute pt-2 transition duration-150 ease-in ease-out transform -translate-y-3 scale-95 opacity-0 ">
          <div class="relative py-1 bg-white border border-gray-200 rounded-md shadow-xl">
            <ul class="relative"> 
              @foreach ($item->children as $child)
                <li
                  class="block w-full px-4 py-2 hover:bg-gray-100 focus:shadow-outline transition duration-300 ease-in-out {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}"> 
                  <a 
                  class="font-medium text-gray-700 whitespace-no-wrap focus:outline-none hover:text-gray-900 focus:text-gray-900 uppercase"
                  href="{{ $child->url }}"
                  target="{{ $item->target }}"
                  >
                  {{ $child->label }}
                  </a> 
                </li>
              @endforeach
            </ul>
          </div>
        </div> 
      @endif
    </li> 
  @endforeach 
</ul>
