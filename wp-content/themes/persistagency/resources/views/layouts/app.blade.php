<x-mobile-navigation></x-mobile-navigation>
@include('partials.header')

<main class="main flex-1">
  @yield('content')
</main>

@include('partials.block-footer-cta')
@include('partials.footer')
