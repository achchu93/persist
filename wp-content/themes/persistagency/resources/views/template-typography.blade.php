{{--
Template Name: Typography
--}}

@extends('layouts.app')

@section('content')
  @while (have_posts()) @php(the_post())
    <div class="text-center">
      @include('partials.page-header')
    </div>

    <div class="entry-content mt-2 prose lg:prose-lg mx-auto">
      @include('partials.content-page')
    </div>

  @endwhile
@endsection
