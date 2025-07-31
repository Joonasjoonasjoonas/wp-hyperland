<section class="h-[80vh] relative">
  <img src="@asset('resources/images/hero-vector.svg')" 
       alt="Hero Vector" 
       class="absolute pointer-events-none"
       style="top: calc(50% + 120px);">

  <div class="max-w-screen-2xl mx-auto flex flex-col lg:flex-row items-center justify-between px-8 lg:px-[120px]">
    
    <div class="text-center lg:text-left max-w-xl">
    <h1 class="text-hero-heading font-sans font-semibold text-brand">
        {{ pll__('Welcome to Hyperland') }}
      </h1>
      <p class="text-body-l font-sans mt-4">
        {{ pll__('EverPark is spreading its wings all over the country. Now there are already 13 EverParks in Finland.') }}
      </p>
      <div class="flex mt-8">
        <a href="https://www.google.com" class="btn-primary" target="_blank" rel="noopener noreferrer">{{ pll__('Nearest Park') }}</a>
        <a href="https://www.youtube.com" class="btn-secondary flex items-center ml-4" target="_blank" rel="noopener noreferrer">
          <span>{{ pll__('Watch Video') }}</span>
          <img src="@asset('resources/images/play-button-icon.svg')" alt="{{ __('Play', 'sage') }}" class="ml-2">
        </a>
      </div>
    </div>

    <div class="mt-12 lg:mt-0 lg:ml-16">
      <img src="@asset('resources/images/hero-image.png')" alt="{{ __('Hero image', 'sage') }}" class="w-full max-w-[90%] sm:max-w-[500px] md:max-w-[600px] lg:max-w-[700px]">
    </div>


  </div>
</section>