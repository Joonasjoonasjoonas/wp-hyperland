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
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @for ($i = 0; $i < 3; $i++)
          @include('components.card')
        @endfor
      </div>
    </div>
  </section>

@endsection