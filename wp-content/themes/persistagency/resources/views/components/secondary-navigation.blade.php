<ul class="flex-wrap font-semibold font-title hidden items-center justify-center md:flex md:ml-auto py-5 text-base">
  @foreach ($navigation as $item) 
    <li class="navigation relative inline-block {{ $item->classes ?? '' }} {{ $item->active ? 'active' : '' }} {{ $item->children? 'navigation__has-submenu':'' }}"> 
      <a 
        href="{{ $item->url }}"
        target="{{ $item->target }}"
        class="duration-500 font-bold inline-block leading-none px-4 py-2 rounded-full select-none bg-yellow text-black uppercase" 
        data-id="{{ $item->dbId }}"
        >
        <span class="flex-shrink-0">
          {{ $item->label }} 
        </span> 
      </a>
    </li> 
  @endforeach 
</ul>
