<header class="w-full bg-white">
  <div class="max-w-screen-2xl mx-auto flex items-center justify-between h-[88px] px-[120px] relative">
    
    {{-- Logo --}}
    <div class="flex-shrink-0">
      <a href="/">
        <img src="@asset('resources/images/evermade-logo.svg')" alt="Hyperland logo" class="w-[72px] h-[69.71px]">
      </a>
    </div>

    {{-- Navigaatio + kielivalinta + nappi (yhdessä kontissa) --}}
    <div class="flex items-center space-x-12">
      
      <nav class="hidden lg:flex">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex gap-[32px]',
          'echo' => false,
          'container' => false,
          'walker' => new \App\Walkers\NavWalker(),
        ]) !!}
      </nav>

      {{-- Kielivalinta --}}
      <div class="flex space-x-2">
        <button class="text-lang">Fi</button>
        <span class="text-lang">/</span>
        <button class="text-lang">Sv</button>
        <span class="text-lang">/</span>
        <button class="text-lang">En</button>
        <span class="text-lang">/</span>
        <button class="text-lang">Ru</button>
      </div>

      {{-- Osta liput -nappi --}}
      <a href="#" class="btn-primary">Osta liput</a>

    </div>

  </div>
</header>