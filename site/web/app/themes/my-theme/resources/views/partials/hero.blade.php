<section class="h-[80vh] relative">
  <img src="@asset('resources/images/hero-vector.svg')" 
       alt="Hero Vector" 
       class="absolute pointer-events-none z-1 w-12 sm:w-16 lg:w-auto"
       style="top: calc(50% + 120px);">

  <div class="max-w-screen-2xl mx-auto flex flex-col lg:flex-row items-center justify-between px-8 lg:px-[120px]">
    
    <div class="text-center lg:text-left max-w-xl">
    <h1 class="text-hero-heading font-sans font-semibold text-brand">
        {{ pll__('Welcome to Hyperland') }}
      </h1>
      <p class="text-hero-body mt-4">
        {{ pll__('EverPark is spreading its wings all over the country. Now there are already 13 EverParks in Finland.') }}
      </p>
      <div class="flex justify-between sm:justify-start mt-8">
        <a href="https://www.google.com" class="btn-primary" target="_blank" rel="noopener noreferrer">{{ pll__('Nearest Park') }}</a>
        <a href="https://www.youtube.com" class="btn-secondary flex items-center sm:ml-4" target="_blank" rel="noopener noreferrer">
          <span>{{ pll__('Watch Video') }}</span>
          <img src="@asset('resources/images/play-button-icon.svg')" alt="{{ pll__('Play') }}" class="ml-2">
        </a>
      </div>
    </div>

    <div class="mt-12 lg:mt-0 lg:ml-16 flex justify-center lg:justify-start">
      <img src="@asset('resources/images/hero-image.png')" alt="{{ pll__('Hero image') }}" class="w-full max-w-[70%] sm:max-w-[400px] md:max-w-[500px] lg:max-w-[700px] relative z-10">
    </div>


  </div>
</section>