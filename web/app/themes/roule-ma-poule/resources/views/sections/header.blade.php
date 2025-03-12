<header class="banner flex flex justify-between">
  <a class="brand" href="{{ home_url('/') }}">
    <img class="w-32" src="{{ Vite::asset('resources/images/logo-rmp.svg') }}" alt="Logo roule ma poule">
  </a>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary bg-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif

  <p class="text-primary bg-secondary">fgrnnnnnnnn</p>
</header>
