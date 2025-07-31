<header class="w-full bg-white py-2 relative z-50">
  <div class="max-w-screen-2xl mx-auto flex items-center justify-between h-20 px-6 sm:px-10 lg:px-20">
    
    <div class="flex-shrink-0">
      <a href="/">
        <img src="@asset('resources/images/evermade-logo.svg')" alt="Hyperland logo" class="w-16 h-auto">
      </a>
    </div>

    <div class="lg:hidden">
      <button id="menu-toggle" class="text-gray-800 focus:outline-none" aria-expanded="false" aria-controls="mobile-menu">
        <img src="@asset('resources/images/burger-icon.svg')" alt="Menu" class="w-6 h-6">
      </button>
    </div>

    <div class="hidden lg:flex items-center flex-1 justify-center">
      <nav class="flex space-x-8 text-nav">
        {!! $primary_nav !!}
      </nav>
    </div>

    <div class="hidden lg:flex items-center space-x-6">
     
    <nav class="ml-8">
    @php
      $languages = pll_the_languages([
        'show_flags' => 0,
        'show_names' => 1,
        'display_names_as' => 'slug',
        'echo' => 0,
        'raw' => 1
      ]);

      $lang_list = array_values($languages);
    @endphp

    @if($lang_list)
      <div class="flex items-center text-sm text-lang">
        @foreach($lang_list as $i => $lang)
          <a href="{{ $lang['url'] }}" class="{{ $lang['current_lang'] ? 'font-bold' : '' }}">
            {{ ucfirst($lang['slug']) }}
          </a>
          @if($i < count($lang_list) - 1)
            <span class="mx-2"> / </span>
          @endif
        @endforeach
      </div>
    @endif
    </nav>
  
    <a href="#" class="btn-primary ml-6 whitespace-nowrap">{{ pll__('Buy Tickets') }}</a>
    </div>
  </div>

  <!-- MOBILE DROPDOWN MENU -->
  <div id="mobile-menu" class="absolute top-full left-0 w-full bg-white shadow-md hidden px-6 py-4 lg:hidden">
    <nav class="flex flex-col space-y-4 text-nav">
      {!! $primary_nav !!}
    </nav>
    @if($lang_list)
    <div class="mt-4 flex flex-wrap items-center gap-2 text-lang text-sm">
      @foreach($lang_list as $i => $lang)
        <a href="{{ $lang['url'] }}" class="{{ $lang['current_lang'] ? 'font-bold' : '' }}">
          {{ ucfirst($lang['slug']) }}
        </a>
        @if($i < count($lang_list) - 1)
          <span>/</span>
        @endif
      @endforeach
    </div>
  @endif

  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const menu = document.getElementById('mobile-menu');

    toggleBtn.addEventListener('click', () => {
      const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
      toggleBtn.setAttribute('aria-expanded', !isExpanded);
      menu.classList.toggle('hidden');
    });
  </script>
</header>
