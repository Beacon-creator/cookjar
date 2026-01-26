@extends('layouts.app')

@section('title', 'Home | CookJar')

@section('content')

<!-- HERO SECTION -->
<section class="relative h-[70vh] flex items-center justify-center 
text-center text-white rounded-3xl"
         style="background-image: url('/images/heros.avif'); background-size: cover; background-position: center;">
    <div class="bg-black/50 rounded-3xl absolute inset-0"></div>

    <div class="relative z-10 max-w-2xl px-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">
            Discover Delicious Homemade Recipes
        </h1>
        <p class="text-base mb-6">
            Explore a world of flavors, discover handcrafted recipes, and let the aroma of passion for cooking fill the kitchen.
        </p>
        <a href="{{ route('recipes.index') }}"
           class="bg-orange-400 px-6 py-3 rounded-full text-black hover:bg-orange-600">
            EXPLORE RECIPES
        </a>
    </div>
</section>

<!-- COOKING TIPS INTRO -->
<section class=" mx-auto py-6">
    <div class="bg-blue-200 rounded-3xl p-3">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <!-- LEFT CONTENT -->
            <div class="text-left mt-5 ml-3">

                <div class="py-5">
                    <a href="{{ route('tips') }}"
                       class="text-sm bg-orange-700 px-2 py-1
                       rounded-full text-white hover:text-orange-500 transition">
                        EXPLORE
                    </a>
                <h2 class="text-4xl font-bold mb-4 mt-4 max-w-sm">
                   OUR DIVERSE PALETTE
                </h2>
                <p class="text-gray-700 text-sm mb-2 max-w-md">
                    If you are a breakfast enthusiast, a connoisseur of savory delights, 
                    or on the lookout for irresistible desserts, 
                    our curated selection has something to satisfy every palate.
                </p>
                    </div> 
                
                <a href="{{ route('tips') }}"
                       class="text-sm border-gray-500 border px-3 py-1
                       rounded-full text-gray-800 hover:text-orange-500 transition">
                        SEE MORE
                </a>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="p-2">
            <ul class="divide-y divide-gray-400">

                 <li class="flex items-center justify-between py-4">
                <span class="text-xl">🍳</span>
                <span class="font-medium text-gray-800 tracking-wide">
                BREAKFAST
                </span>
                </li>

                <li class="flex items-center justify-between py-4">
                    <span class="text-xl">🥗</span>
                    <span class="font-medium text-gray-800 tracking-wide">
                        LUNCH
                    </span>
                </li>

                <li class="flex items-center justify-between py-4">
                    <span class="text-xl">🍽️</span>
                    <span class="font-medium text-gray-800 tracking-wide">
                        DINNER
                    </span>
                </li>

                <li class="flex items-center justify-between py-4">
                    <span class="text-xl">🍰</span>
                    <span class="font-medium text-gray-800 tracking-wide">
                        DESSERT
                    </span>
                </li>

                <li class="flex items-center justify-between py-4">
                    <span class="text-xl">⚡</span>
                    <span class="font-medium text-gray-800 tracking-wide">
                        QUICK BITES
                    </span>
                </li>

            </ul>
        </div>


        </div>
    </div>
</section>


<!-- FEATURED RECIPES -->
<section class="bg-gray-50 border border-gray-300 px-6 py-6 rounded-3xl">

        <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold">FEATURED RECIPES</h2>

            <!-- Scroll Buttons -->
        <div class="flex space-x-3">
            <button onclick="scrollLeft()"
                        class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                    <
            </button>
            <button onclick="scrollRight()"
                        class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                    >
            </button>
        </div>
    </div>

        <!-- Scroll Container -->
    <div id="recipeScroll"
             class="flex space-x-6 overflow-x-auto scroll-smooth pb-4">

            @foreach ($featuredRecipes as $recipe)
              <div class="min-w-94 max-w-94 h-100
            bg-white rounded-xl shadow
            flex flex-col overflow-hidden">

    <!-- Image -->
        <img src="{{ asset('images/' . $recipe->image) }}"
         alt="{{ $recipe->title }}"
         class="h-50  w-full object-cover">

    <!-- Content -->
    <div class="p-4 flex flex-col flex-1">

        <!-- Text content -->
        <div class="flex-1">
            <h3 class="font-extrabold text-lg mb-2 line-clamp-2">
                {{ $recipe->title }}
            </h3>

            <p class="text-gray-600 text-xs line-clamp-3">
                {{ $recipe->description }}
            </p>
        </div>

        <!-- Footer pinned to bottom -->
        <div class="flex items-center justify-between pt-4 text-xs">
            <span class="text-gray-500">
                {{ $recipe->more_info }}
            </span>

            <a href="{{ route('recipes.show', $recipe) }}"
               class="text-gray-500 bg-white border border-gray-500 rounded-full font-semibold hover:bg-gray-100 px-3 py-1 text-xs">
                VIEW RECIPE
            </a>
        </div>

    </div>
    </div>

            @endforeach

        </div>
</section>

<!-- RECIPES SECTION -->
<section class=" mx-auto py-6 text-center">

    <!-- Tag -->
    <div class="mb-4">
        <span class="inline-block text-sm bg-orange-700 px-3 py-1 rounded-full text-white">
            RECIPES
        </span>
    </div>

    <!-- Heading -->
    <h2 class="text-3xl font-bold mb-4">
        EMBARK ON A JOURNEY
    </h2>

    <p class="text-gray-600 max-w-2xl mx-auto mb-10">
        With our diverse collection of recipes, we have something to satisfy every palate.
    </p>

    <!-- CATEGORY NAV -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">

        <!-- Active -->
        <button class="px-4 py-2 text-sm rounded-full
                       bg-green-500 text-white font-medium">
            ALL
        </button>

        <!-- Inactive -->
        @foreach (['VEGAN', 'BREAKFAST', 'LUNCH', 'DINNER', 'DESSERT', 'QUICK BITE'] as $category)
            <button
                class="px-4 py-2 text-sm rounded-full
                       border border-gray-300
                       text-gray-500
                       hover:border-green-600
                       hover:text-green-600
                       transition">
                {{ $category }}
            </button>
        @endforeach

    </div>

    <!-- RECIPES GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

    @forelse ($recipes as $recipe)
        <div class="bg-white border rounded-xl overflow-hidden hover:shadow-lg transition">

            <img src="{{ asset('images/' . $recipe->image) }}"
                 alt="{{ $recipe->title }}"
                 class="h-44 w-full object-cover">

            <div class="p-4 text-left">
                <h3 class="font-extrabold text-lg mb-1 line-clamp-2">
                    {{ $recipe->title }}
                </h3>

                <p class="text-gray-600 text-xs line-clamp-3">
                    {{ $recipe->description }}
                </p>

                <div class="flex items-center justify-between pt-2 text-xs">
                    <span class="text-gray-500">
                        {{ $recipe->more_info }}
                    </span>

                    <a href="{{ route('recipes.show', $recipe) }}"
                       class="text-gray-500 bg-white border border-gray-500 rounded-full font-semibold hover:bg-gray-100 px-3 py-1">
                        VIEW RECIPE
                    </a>
                </div>
            </div>

        </div>
    @empty
        <p class="col-span-3 text-center text-gray-500">
            No recipes available.
        </p>
    @endforelse

    </div>


</section>


<!-- ABOUT US -->
<section class=" mx-auto py-3">
    <div class="border border-gray-300 rounded-3xl p-3">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2">

            <!-- LEFT SIDE (BIGGER - 2 columns) -->
            <div class="lg:col-span-2 grid grid-rows-2 gap-2">

                <!-- LEFT TOP (TEXT + IMAGE) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 bg-gray-100 rounded-2xl p-6">

                    <!-- Text -->
                    <div class="flex flex-col justify-between">
                        <div>
                            <span class="inline-block text-sm bg-orange-700 text-white px-3 py-1 rounded-full mb-4">
                                ABOUT US
                            </span>

                            <h2 class="text-3xl font-bold mb-3">
                               OUR CULINARY CHRONICLE
                            </h2>

                            <p class="text-gray-600 mb-2 text-sm">
                               Our journey is crafted with dedication, creativity, 
                               and an unrelenting commitment to delivering delightful culinary experiences. 
                               Join us in savoring the essence of every dish and the stories that unfold.
                            </p>
                        </div>

                        <a href="{{ route('about') }}"
                           class="text-sm font-semibold text-orange-600 hover:underline w-max">
                            Read More
                        </a>
                    </div>

                    <!-- Image -->
                    <div class="rounded-xl overflow-hidden">
                        <img src="/images/aboutus2.png"
                             alt="Cooking"
                             class="h-full w-full object-cover">
                    </div>

                </div>

                <!-- LEFT BOTTOM (FULL IMAGE) -->
                <div class="rounded-2xl overflow-hidden">
                    <img src="/images/aboutus3.png"
                         alt="Kitchen"
                         class="h-full w-full object-cover">
                </div>

            </div>

            <!-- RIGHT SIDE (SMALLER FULL IMAGE) -->
            <div class="rounded-2xl overflow-hidden">
                <img src="/images/aboutus1.png"
                     alt="Food Prep"
                     class="h-full w-full object-cover">
            </div>

        </div>

    </div>
</section>




{{-- scripts --}}
<script>
    function scrollLeft() {
        const container = document.getElementById('recipeScroll');
        container.scrollBy({ left: -300, behavior: 'smooth' });
    }

    function scrollRight() {
        const container = document.getElementById('recipeScroll');
        container.scrollBy({ left: 300, behavior: 'smooth' });
    }
    

@endsection
