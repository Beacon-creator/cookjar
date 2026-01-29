<section class="max-w-7xl mx-auto py-10">

    <!-- Section Header -->
    <h2 class="text-3xl font-bold mb-10 uppercase text-gray-900">
        Tips & Tricks
    </h2>

    <!-- Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ([
            ['Fresh vs. Dried Herbs', 'Discover the nuanced world of herbs. Learn when to opt for the 
                freshness of herbs and when dried variants can amplify your culinary creations.', '15 min', 'tricks-bg.png'],
            ['Choosing Produce', 'Selecting ripe fruits and vegetables is an art. 
                Explore our insights to ensure optimal taste in every dish.', '20 min', 'trick2.png'],
            ['Spice Tricks', 'Elevate flavors with simple spice hacks.', '10 min', 'trick3.png'],
            ['Balancing Sweet Savory', 'Achieve the perfect symphony of flavors by mastering the art
                 of balancing sweet and savory elements in your dishes', '25 min', 'nourish.png'],
            ['Fixing Seasoning Issues', 'Discover quick fixes for seasoning mishaps 
                and ensure your dishes are perfectly balanced.', '12 min', 'trick5.png'],
            ['Storage Solution', 'Keep ingredients fresh and accessible with our storage solutions.
                 Transform your kitchen into an organized oasis.', '30 min', 'trick6.png'],
        ] as [$title, $desc, $prepTime, $img])

        <div class="relative h-96 rounded-3xl overflow-hidden shadow-lg">

            <!-- Background Image -->
            <img src="{{ asset('images/' . $img) }}" alt="{{ $title }}" class="absolute inset-0 w-full h-45 object-cover">

            <!-- Overlay -->
            <div class="absolute inset-0 p-6 flex flex-col justify-end text-black">

                <!-- Title & Description -->
                <h3 class="text-xl font-bold mb-2 uppercase">{{ $title }}</h3>
                <p class="text-sm mb-4">{{ $desc }}</p>

                <!-- Prep Time + Read More -->
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold">{{ $prepTime }}</span>
                    <a href="#"
                       class="text-sm font-semibold border border-gray-400 px-3 py-1 rounded-full hover:bg-white/20">
                        Read More
                    </a>
                </div>

            </div>

        </div>

        @endforeach

    </div>
</section>
