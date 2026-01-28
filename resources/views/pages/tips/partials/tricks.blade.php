<section class="max-w-6xl mx-auto px-6 py-10">

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

