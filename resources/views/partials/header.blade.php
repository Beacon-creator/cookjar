<header class="w-full mt-3 relative z-50">
    <!-- ALIGN WITH PAGE CONTENT -->
    <div class="max-w-7xl mx-auto px-4">

        <!-- TOP BAR -->
        <div class="flex items-center justify-between
                    bg-white border border-gray-200
                    rounded-3xl
                    px-4 md:px-6 py-2">

            <!-- LOGO -->
            <a href="{{ route('home') }}"
               class="flex items-center gap-2 text-xl font-bold text-gray-900">
                <img src="/images/cookjarlogo.svg" class="h-8 w-8" alt="CookJar">
                CookJar
            </a>

            <!-- DESKTOP NAV -->
            <nav class="hidden md:flex gap-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="nav-link">HOME</a>
                <a href="{{ route('recipes.index') }}" class="nav-link">RECIPES</a>
                <a href="{{ route('tips') }}" class="nav-link">COOKING TIPS</a>
                <a href="{{ route('about') }}" class="nav-link">ABOUT US</a>
            </nav>

            <!-- DESKTOP ACTIONS -->
            <div class="hidden md:flex items-center gap-4">

                <!-- SEARCH -->
                <div class="relative flex items-center">
                    <input id="desktopSearch"
                           type="text"
                           placeholder="Search recipes..."
                           class="w-0 opacity-0 transition-all duration-300
                                  border border-gray-300 rounded-full
                                  px-4 py-1 text-sm focus:outline-none">

                    <button onclick="toggleDesktopSearch()" class="ml-2">
                        <svg class="w-5 h-5 text-gray-700"
                             fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-4.35-4.35m1.6-5.15a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>

                <!-- SUBSCRIBE -->
                <a href="{{ route('subscribe') }}"
                   class="bg-black text-white px-4 py-2 rounded-full text-sm">
                    SUBSCRIBE
                </a>
            </div>

            <!-- MOBILE MENU BUTTON -->
            <button id="openMenu"
                    class="md:hidden text-2xl ml-auto">
                ☰
            </button>
        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu"
         class="fixed inset-4 hidden flex-col
                bg-neutral-900 h-130 text-white
                rounded-3xl p-6">

        <!-- HEADER -->
        <div class="flex justify-between items-center mb-10">
            <div class="flex items-center gap-2 text-xl font-bold">
                <img src="/images/cookjarlg.svg" class="h-8 w-8">
                CookJar
            </div>

            <!-- CANCEL -->
            <button id="closeMenu"
                    class="text-3xl text-orange-400
                           bg-neutral-800 rounded-full px-3 py-1">
                ✕
            </button>
        </div>

        <!-- NAV LINKS -->
        <nav class="flex flex-col text-lg divide-y divide-gray-700 mb-10">
            <a href="{{ route('home') }}" class="py-4">HOME</a>
            <a href="{{ route('recipes.index') }}" class="py-4">RECIPES</a>
            <a href="{{ route('tips') }}" class="py-4">COOKING TIPS</a>
            <a href="{{ route('about') }}" class="py-4">ABOUT US</a>
        </nav>

        <!-- SEARCH + SUBSCRIBE -->
        <div class="flex items-center gap-3 mb-10">

            <!-- SEARCH -->
            <div class="relative flex items-center flex-1">
                <input id="mobileSearch"
                       type="text"
                       placeholder="Search..."
                       class="w-0 opacity-0 transition-all duration-300
                              bg-neutral-800 text-white
                              rounded-full px-4 py-2 text-sm
                              focus:outline-none">

                <button onclick="toggleMobileSearch()"
                        class="bg-neutral-800 rounded-full p-2">
                    <svg class="w-6 h-6"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M21 21l-4.35-4.35m1.6-5.15a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>

            <!-- SUBSCRIBE -->
            <a href="{{ route('subscribe') }}"
               class="bg-neutral-800 text-white
                      px-4 py-2 rounded-full text-sm">
                SUBSCRIBE
            </a>
        </div>

        <!-- SOCIAL ICONS -->
        <div class="flex justify-center gap-8 mt-auto text-white">

            <a href="#" aria-label="LinkedIn">
                <svg class="w-7 h-7" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M4.98 3.5C4.98 4.88 3.87 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1s2.48 1.12 2.48 2.5zM.5 8h4v16h-4zM8 8h3.8v2.2h.1c.5-.9 1.8-2.2 3.7-2.2 4 0 4.7 2.6 4.7 6v10h-4v-9c0-2.1 0-4.7-2.9-4.7s-3.3 2.2-3.3 4.5v9.2h-4z"/>
                </svg>
            </a>

            <a href="#" aria-label="GitHub">
                <svg class="w-7 h-7" fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.2-1.2-1.6-1.2-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.8 2.1 2.8 1.5.1-.7.4-1.1.7-1.4-2.6-.3-5.3-1.3-5.3-5.9 0-1.3.5-2.4 1.1-3.2-.1-.3-.5-1.6.1-3.2 0 0 .9-.3 3.3 1.1a11.4 11.4 0 016 0c2.4-1.4 3.3-1.1 3.3-1.1.6 1.6.2 2.9.1 3.2.7.8 1.1 1.9 1.1 3.2 0 4.6-2.7 5.6-5.3 5.9.4.3.8 1 .8 2v3c0 .4.2.7.8.6A11.5 11.5 0 0023.5 12C23.5 5.7 18.3.5 12 .5z"/>
                </svg>
            </a>
        </div>
    </div>
</header>
