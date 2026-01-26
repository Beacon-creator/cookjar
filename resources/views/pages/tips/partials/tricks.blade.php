<section class="mb-20">
    <h2 class="text-3xl font-bold mb-10">
        Tips & Tricks
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach ([1,2,3] as $item)

        <div class="relative h-64 rounded-2xl overflow-hidden">
            <div class="absolute inset-0 bg-gray-800"></div>

            <div class="absolute inset-0 p-5 flex flex-col justify-end text-white">
                <h3 class="font-semibold text-lg mb-2">
                    Balanced Cooking
                </h3>
                <p class="text-sm mb-3">
                    Create meals that satisfy every lifestyle.
                </p>
                <a href="#" class="text-sm font-medium self-end">
                    Read more →
                </a>
            </div>
        </div>

        @endforeach

    </div>
</section>
