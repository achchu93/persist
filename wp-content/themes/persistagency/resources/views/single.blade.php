@extends('layouts.app')

@section('sidebar')
  @php dynamic_sidebar('sidebar-primary') @endphp
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
  @endwhile
@endsection
