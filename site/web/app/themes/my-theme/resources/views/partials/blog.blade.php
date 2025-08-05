<section class="relative bg-[#FAF5FC] py-16 overflow-hidden">
  <img 
    src="@asset('resources/images/cards-vector.svg')" 
    alt="Vasen koriste" 
    class="absolute top-4 z-1 w-12 sm:w-16 lg:w-18"
  >

  <img 
    src="@asset('resources/images/cards-vector2.svg')" 
    alt="Oikea alakoriste" 
    class="absolute bottom-4 right-0 z-10 w-12 sm:w-16 lg:w-24"
  >

  <div class="container mx-auto px-4">
    <div id="news-cards" class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
    @foreach ($news_posts as $index => $post)
      <div class="news-card {{ $index > 2 ? 'hidden' : '' }}">
        @include('components.card', ['post' => $post])
      </div>
    @endforeach
  </div>
    </div>

    <div class="text-center">
      <button
        id="load-more"
        class="btn-primary"
        data-visible-count="3"
      >
        {{ pll__('Load More News') }}
      </button>
    </div>
  </div>
</section>
