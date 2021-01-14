<x-mobile-navigation></x-mobile-navigation>
@include('partials.header')

@hasSection('sidebar')
  <div class="container mx-auto py-8 md:flex space-y-10 flex-1">
    <main class="main md:w-8/12 px-4">
      @yield('content')
    </main>
    <aside class="sidebar md:w-4/12 px-4">
      @yield('sidebar')
    </aside>
  </div>
@else
  <div class="container mx-auto py-8 flex-1">
    <main class="main w-full px-4">
      @yield('content')
    </main>
  </div>
@endif

@include('partials.footer')
