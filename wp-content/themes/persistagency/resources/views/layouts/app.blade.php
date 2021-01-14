{!! wp_get_attachment_image(get_field('page_background')['id'], 'full', false, ['class' => 'absolute right-0 top-0']) !!}
<x-mobile-navigation></x-mobile-navigation>
@include('partials.header')

<main class="main flex-1">
  @yield('content')
</main>

@include('partials.footer')
