@extends('layouts.app')

@section('content')

  {{-- Hero Section --}}
  @include('partials.hero')

  {{-- Video Section --}}
  @include('partials.video')

  {{-- Blog/News Section --}}
  @include('partials.blog')

@endsection
