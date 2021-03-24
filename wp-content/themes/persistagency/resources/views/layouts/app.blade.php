<x-mobile-navigation></x-mobile-navigation>
@include('partials.header')

<main class="main flex-1 animation-content">
  @yield('content')
</main>

@if (!$hide_call_to_action_in_footer)
  @include('partials.block-footer-cta')
@endif
@include('partials.footer')
