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
