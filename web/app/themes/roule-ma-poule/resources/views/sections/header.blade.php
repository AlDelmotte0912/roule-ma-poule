<header class="bg-white border-secondary dark:bg-primary shadow">
  {{-- Barre du haut avec logo et nav desktop --}}
  <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
    {{-- Logo --}}
    <a href="{{ home_url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
      {{-- Logo mobile (visible en dessous de md) --}}
      <img
        src="{{ Vite::asset('resources/images/logo-rmp-mobile.svg') }}"
        class="md:hidden h-24"
        alt="{{ get_bloginfo('name', 'display') }}"
      >

      {{-- Logo desktop (visible à partir de md) --}}
      <img
        src="{{ Vite::asset('resources/images/logo-rmp.svg') }}"
        class="hidden md:block h-24"
        alt="{{ get_bloginfo('name', 'display') }}"
      >
    </a>

    {{-- NAV DESKTOP UNIQUEMENT --}}
    @if (has_nav_menu('primary_navigation'))
      {{--
        On garde .nav-primary pour profiter de la CSS existante (nav.css).
        On cache cette nav en mobile (hidden en-dessous de md).
      --}}
      <nav class="nav-primary hidden md:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location'  => 'primary_navigation',
          'container'       => 'div',
          'container_id'    => 'desktop-menu-container',
          // Pas besoin de container_class si ta nav.css gère .nav-primary div { ... }
          'container_class' => '',
          // Pas besoin de menu_class : la classe .nav-primary ul { ... } s'applique déjà
          'menu_class'      => '',
          'fallback_cb'     => false,
          'echo'            => false,
        ]) !!}
      </nav>
    @endif

    {{-- BOUTON BURGER POUR MOBILE (caché en desktop) --}}
    <button
      data-collapse-toggle="mobile-menu-container"
      type="button"
      class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500
             rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
             dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
      aria-controls="mobile-menu-container"
      aria-expanded="false"
    >
      <span class="sr-only">Ouvrir le menu principal</span>
      <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 17 14">
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M1 1h15M1 7h15M1 13h15"
        />
      </svg>
    </button>
  </div>

  {{-- NAV MOBILE UNIQUEMENT --}}
  @if (has_nav_menu('primary_navigation'))
    {{--
      Nouvelle nav mobile, totalement distincte, qu'on montre
      uniquement en dessous de md (md:hidden).
      Flowbite togglera #mobile-menu-container (enlèvera .hidden au clic).
    --}}
    <nav class="nav-mobile md:hidden bg-white dark:bg-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu([
        'theme_location'  => 'primary_navigation',
        'container'       => 'div',
        'container_id'    => 'mobile-menu-container',
        // Cachée par défaut : .hidden. En mobile w-full si on veut
        'container_class' => 'hidden w-full',
        // ICI, classes purement mobile (inline) ou tu peux créer .nav-mobile dans nav.css.
        'menu_class'      => 'flex flex-col items-center space-y-4 p-4 text-primary font-hanna',
        'fallback_cb'     => false,
        'echo'            => false,
      ]) !!}
    </nav>
  @endif
</header>
