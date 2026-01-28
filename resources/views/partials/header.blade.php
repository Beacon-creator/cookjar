<header class="w-full mt-3 relative z-50">
    <div class="max-w-7xl mx-auto px-4">

        <div class="flex items-center justify-between
                    bg-orange-50 border border-gray-200
                    rounded-3xl
                    px-4 md:px-6 py-2">

            {{-- LOGO --}}
            <a href="{{ route('home') }}"
               class="flex items-center gap-2 text-xl font-bold text-gray-900">
                <img src="/images/cookjarlogo.svg" class="h-8 w-8" alt="CookJar">
                CookJar
            </a>

            {{-- DESKTOP NAV --}}
            <nav class="hidden md:flex gap-8 text-sm font-medium">
                <a href="{{ route('home') }}"
                   class="{{ request()->routeIs('home') ? 'text-orange-600' : 'text-gray-800' }}">
                    HOME
                </a>

                <a href="{{ route('recipes.index') }}"
                   class="{{ request()->routeIs('recipes.*') ? 'text-orange-600' : 'text-gray-800' }}">
                    RECIPES
                </a>

                <a href="{{ route('tips') }}"
                   class="{{ request()->routeIs('tips') ? 'text-orange-600' : 'text-gray-800' }}">
                    COOKING TIPS
                </a>

                <a href="{{ route('about') }}"
                   class="{{ request()->routeIs('about') ? 'text-orange-600' : 'text-gray-800' }}">
                    ABOUT US
                </a>
            </nav>

            {{-- DESKTOP ACTIONS --}}
            <div class="hidden md:flex items-center gap-4">

                {{-- SEARCH --}}
                <div class="relative flex items-center flex-row-reverse gap-2">

                    <button onclick="toggleDesktopSearch()">
                        <svg class="w-5 h-5 text-gray-700"
                             fill="none" stroke="currentColor" stroke-width="2"
                             viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-4.35-4.35m1.6-5.15a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>

                    <input id="desktopSearch"
                           type="text"
                           placeholder="Search recipes..."
                           class="w-0 opacity-0 transition-all duration-300
                                  bg-orange-100 border border-orange-300
                                  rounded-full px-4 py-1 text-sm
                                  focus:outline-none">
                </div>

                {{-- SUBSCRIBE --}}
                <a href="{{ route('subscribe') }}"
                   class="bg-black text-white px-4 py-2 rounded-full text-sm">
                    SUBSCRIBE
                </a>
            </div>

            {{-- MOBILE MENU BUTTON --}}
            <button id="openMenu"
                    class="md:hidden text-2xl ml-auto">
                ☰
            </button>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <div id="mobileMenu"
         class="fixed inset-4 hidden flex-col
                bg-neutral-900 text-white
                rounded-3xl p-6">

        {{-- HEADER --}}
        <div class="flex justify-between items-center mb-10">
            <div class="flex items-center gap-2 text-xl font-bold">
                <img src="/images/cookjarlg.svg" class="h-8 w-8">
                CookJar
            </div>

            <button id="closeMenu"
                    class="text-3xl text-orange-400
                           bg-neutral-800 rounded-full px-3 py-1">
                ✕
            </button>
        </div>

        {{-- NAV --}}
        <nav class="flex flex-col text-lg divide-y divide-gray-700 mb-10">
            <a href="{{ route('home') }}" class="py-4 {{ request()->routeIs('home') ? 'text-orange-400' : '' }}">HOME</a>
            <a href="{{ route('recipes.index') }}" class="py-4 {{ request()->routeIs('recipes.*') ? 'text-orange-400' : '' }}">RECIPES</a>
            <a href="{{ route('tips') }}" class="py-4 {{ request()->routeIs('tips') ? 'text-orange-400' : '' }}">COOKING TIPS</a>
            <a href="{{ route('about') }}" class="py-4 {{ request()->routeIs('about') ? 'text-orange-400' : '' }}">ABOUT US</a>
        </nav>

        {{-- SEARCH + SUBSCRIBE --}}
        <div class="flex items-center gap-3 mb-10">

            <div class="flex flex-row-reverse items-center gap-2 flex-1">

                <button onclick="toggleMobileSearch()"
                        class="bg-neutral-800 rounded-full p-2">
                    🔍
                </button>

                <input id="mobileSearch"
                       type="text"
                       placeholder="Search..."
                       class="w-0 opacity-0 transition-all duration-300
                              bg-orange-100 text-black
                              rounded-full px-4 py-2 text-sm
                              focus:outline-none">
            </div>

            <a href="#subscribe"
               class="bg-neutral-800 px-4 py-2 rounded-full text-sm">
                SUBSCRIBE
            </a>
        </div>

        {{-- SOCIALS --}}
        <div class="flex justify-center gap-8 mt-auto text-white">
            {{-- icons unchanged --}}
        </div>
    </div>
</header>
