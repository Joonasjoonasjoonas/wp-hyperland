@extends('layouts.app')

@section('content')

  {{-- Hero Section --}}
  @include('components.hero')

  {{-- Video Section --}}
  @include('components.video')

  {{-- Blog/News Section --}}
  <section class="bg-[#FAF5FC] py-16">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8">Latest News</h2>

      {{-- Kortit --}}
      <div id="news-cards" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        @php
          $all_posts = get_posts([
            'numberposts' => -1,
            'post_type' => 'post',
          ]);
        @endphp

        @foreach ($all_posts as $index => $post)
          <div class="news-card {{ $index > 2 ? 'hidden' : '' }}">
            @include('components.card', ['post' => $post])
          </div>
        @endforeach
      </div>

      {{-- Näytä lisää -nappi --}}
      <div class="text-center">
        <button
          id="load-more"
          class="btn-secondary"
          data-visible-count="3"
        >
          Näytä lisää uutisia
        </button>
      </div>
    </div>
  </section>

@endsection
