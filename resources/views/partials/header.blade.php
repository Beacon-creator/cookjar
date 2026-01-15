<header class="w-full mt-6">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="flex items-center justify-between
                    bg-white
                    border border-gray-200
                    rounded-full
                    px-4 py-2">

        <!-- Logo -->
        <div class="text-2xl font-bold">
            
            <a href="{{ route('home') }}" class="text-gray-900 md:flex">
                 <img src="/images/cookjarlogo.svg" alt="CookJar" class="h-8 w-8">
                CookJar
            </a>
            
        </div>

        <!-- Navigation -->
        <nav class="hidden md:flex space-x-8 text-sm">
            <a href="{{ route('home') }}"
               class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                HOME
            </a>

            <a href="{{ route('recipes.index') }}"
               class="nav-link {{ request()->routeIs('recipes.*') ? 'active' : '' }}">
                RECIPES
            </a>

            <a href="{{ route('tips.index') }}"
               class="nav-link {{ request()->routeIs('tips.*') ? 'active' : '' }}">
                COOKING TIPS
            </a>

            <a href="{{ route('about') }}"
               class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                ABOUT US
            </a>
        </nav>

        <!-- Search + Subscribe -->
        <div class="hidden md:flex items-center space-x-4">
         <a href="{{ route('search') }}"
   class="text-gray-700 hover:text-orange-500 transition text-xl"
   aria-label="Search">
    🔍
</a>

            <a href="{{ route('subscribe') }}"
               class="bg-black text-white px-4 py-2 rounded-full text-sm hover:bg-gray-400">
                SUBSCRIBE
            </a>
        </div>
        </div>
        <!-- Mobile Menu Button -->
        <button id="menuBtn" class="md:hidden text-2xl">
            ☰
        </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden px-6 pb-4">
       <nav class="flex flex-col space-y-3 text-gray-700">
    <a href="{{ route('home') }}" class="hover:text-orange-500">HOME</a>
    <a href="{{ route('recipes.index') }}" class="hover:text-orange-500">RECIPES</a>
    <a href="{{ route('tips.index') }}" class="hover:text-orange-500">COOKING TIPS</a>
    <a href="{{ route('about') }}" class="hover:text-orange-500">ABOUT US</a>
    <a href="{{ route('subscribe') }}" class="font-semibold hover:text-orange-500">SUBSCRIBE</a>
</nav>

    </div>
</header>
