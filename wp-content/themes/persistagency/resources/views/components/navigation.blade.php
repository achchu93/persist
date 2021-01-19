<ul class="font-medium font-title hidden items-center justify-center md:flex md:ml-auto py-6 text-base">
  @foreach ($navigation as $item) 
    <li class="navigation relative inline-block sm:mx-2 md:mx-4 lg:mx-8 xl:mx-16 {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }} {{ $item->children? 'navigation__has-submenu':'' }}"> 
      <a 
        href="{{ $item->url }}"
        target="{{ $item->target }}"
        class="
               @if ($item->active)
                 @if ($style=="black")
                   text-primary
                 @else
                   text-secondary
                 @endif
               @else
                 @if ($style=="black")
                   text-gray-900 hover:text-primary
                 @else
                   text-white hover:text-secondary
                 @endif
               @endif
               leading-none inline-flex items-center justify-between px-2 py-1 font-medium transition-all duration-500 rounded-md focus:outline-none uppercase" 
        data-id="{{ $item->dbId }}"
        >
        <span class="flex-shrink-0">
          {{ $item->label }} 
        </span> 
      </a>
      @if ($item->children)
        <div style="display:none" class="navigation__submenu absolute pt-2 transition duration-150 ease-in ease-out transform -translate-y-3 scale-95 opacity-0 ">
          <div class="relative py-1">
            <ul class="relative"> 
              @foreach ($item->children as $child)
                <li
                  class="block w-full px-4 py-2 focus:shadow-outline transition duration-300 ease-in-out {{ $child->classes ?? '' }} {{ $child->active ? 'active' : '' }}"> 
                  <a 
                  class="
                         @if ($child->active)
                           @if ($style=="black")
                             text-primary
                           @else
                             text-secondary
                           @endif
                         @else
                           @if ($style=="black")
                             text-gray-900 hover:text-primary
                           @else
                             text-white hover:text-secondary
                           @endif
                         @endif
                         font-medium whitespace-no-wrap focus:outline-none uppercase"
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
