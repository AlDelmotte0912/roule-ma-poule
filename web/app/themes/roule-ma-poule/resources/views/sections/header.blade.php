<header class="banner bg-white shadow">
  <div class="flex justify-end max-w-7xl mx-auto px-6 h-24">
  <a class="brand mr-auto" href="{{ home_url('/') }}">
    <img class="h-24 object-contain" src="{{ Vite::asset('resources/images/logo-rmp.svg') }}" alt="Logo roule ma poule">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
    <x-button>
      Boutton one
    </x-button>
  </div>
</header>
