@extends('layouts.app')

@section('title', 'Cooking Tips | CookJar')

@section('content')

<!-- =========================
 SECTION 1: HERO / INTRO
========================= -->
<section class="max-w-6xl mx-auto px-6 py-20">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start mb-16">

        <!-- Left: Bold Statement -->
        <h1 class="text-5xl md:text-6xl font-extrabold leading-tight">
            Our Essential <br>
            Cooking Tips
        </h1>

        <!-- Right: Intro Text -->
        <p class="text-gray-600 text-lg leading-relaxed">
            Cooking is more than following a recipe — it’s about understanding
            techniques, ingredients, and flow in the kitchen. These tips are
            designed to help you cook with confidence, precision, and joy.
        </p>
    </div>

    <!-- Lower Icons -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 text-center">

        <div class="space-y-3">
            <div class="text-4xl">🔪</div>
            <h3 class="font-semibold text-lg text-orange-500">Quality Tools</h3>
            <p class="text-gray-600 text-sm">
                Invest in reliable knives and cookware — they make cooking safer
                and more enjoyable.
            </p>
        </div>

        <div class="space-y-3">
            <div class="text-4xl">🍳</div>
            <h3 class="font-semibold text-lg text-orange-500">Essential Utensils</h3>
            <p class="text-gray-600 text-sm">
                Keep your kitchen stocked with the basics to work efficiently.
            </p>
        </div>

        <div class="space-y-3">
            <div class="text-4xl">⚖️</div>
            <h3 class="font-semibold text-lg text-orange-500">Measuring Accuracy</h3>
            <p class="text-gray-600 text-sm">
                Precision matters — especially in baking and balanced seasoning.
            </p>
        </div>

    </div>
</section>


<!-- =========================
 SECTION 2: NEWEST RECIPES
 (reuse existing partial)
========================= -->
@include('partials.featured-recipes', ['title' => 'NEWEST RECIPES'])


<!-- =========================
 SECTION 3: MASTERING THE BASICS
========================= -->

<section class="max-w-6xl mx-auto px-6 py-20">

    <h2 class="text-3xl font-bold mb-10">
        Mastering the Basics
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ([
            ['Knife Skills', 'Learn precision, safety, and speed when handling knives.'],
            ['Sautéing & Searing', 'Build flavor with proper heat and timing.'],
            ['Roasting Tips', 'Achieve caramelization and juicy textures.'],
            ['Prep Workstations', 'Organize ingredients before you start cooking.'],
            ['Clean As You Go', 'Keep your workspace efficient and stress-free.'],
            ['Recipe Modification', 'Adapt recipes confidently to your taste.'],
        ] as [$title, $text])

            <div class="bg-white border rounded-2xl p-6 flex flex-col justify-between">
                <div>
                    <h3 class="font-semibold text-lg mb-2">
                        {{ $title }}
                    </h3>
                    <p class="text-gray-600 text-sm">
                        {{ $text }}
                    </p>
                </div>

                <div class="mt-4 text-right">
                    <a href="#"
                       class="text-sm font-semibold text-green-600 hover:underline">
                        Read More →
                    </a>
                </div>
            </div>

        @endforeach

    </div>
</section>


<!-- =========================
 SECTION 4: NOURISHING EVERY PALATE
========================= -->
<section class="max-w-6xl mx-auto px-6 py-20">

    <h2 class="text-3xl font-bold mb-10">
        Nourishing Every Palate
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @foreach ([
            ['Balanced Meals', 'Nutrition-focused meals that still excite your taste buds.'],
            ['Diet-Friendly Cooking', 'Adapt recipes for vegan, gluten-free, or low-carb needs.'],
        ] as [$title, $text])

            <div class="relative h-64 rounded-2xl overflow-hidden">
                <img src="/images/tips-bg.png"
                     class="absolute inset-0 w-full h-full object-cover">

                <div class="absolute inset-0 bg-black/40 p-6 flex flex-col justify-end">
                    <h3 class="text-white text-xl font-bold mb-2">
                        {{ $title }}
                    </h3>
                    <p class="text-white text-sm mb-4">
                        {{ $text }}
                    </p>

                    <div class="text-right">
                        <a href="#"
                           class="text-white text-sm font-semibold underline">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</section>


<!-- =========================
 SECTION 5: TIPS & TRICKS
 (similar layout to section 4)
========================= -->
<section class="max-w-6xl mx-auto px-6 py-20">

    <h2 class="text-3xl font-bold mb-10">
        Tips & Tricks
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

        @foreach ([
            ['Flavor Boosters', 'Small additions that dramatically enhance taste.'],
            ['Time-Saving Hacks', 'Cook smarter without sacrificing quality.'],
        ] as [$title, $text])

            <div class="relative h-64 rounded-2xl overflow-hidden">
                <img src="/images/tricks-bg.png"
                     class="absolute inset-0 w-full h-full object-cover">

                <div class="absolute inset-0 bg-black/40 p-6 flex flex-col justify-end">
                    <h3 class="text-white text-xl font-bold mb-2">
                        {{ $title }}
                    </h3>
                    <p class="text-white text-sm mb-4">
                        {{ $text }}
                    </p>

                    <div class="text-right">
                        <a href="#"
                           class="text-white text-sm font-semibold underline">
                            Read More
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
</section>


<!-- =========================
 SUBSCRIBE (reuse partial)
========================= -->
@include('partials.subscribe')

@endsection
