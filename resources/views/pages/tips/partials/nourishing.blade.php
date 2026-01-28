<section class="max-w-7xl mx-auto px-6 py-10 bg-[#C4E5FC] rounded-3xl relative">

    <!-- Section Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold uppercase text-black">NOURISHING EVERY PALATE</h2>

        <!-- Scroll Buttons -->
        <div class="flex space-x-3">
            <button onclick="scrollPalateLeft()"
                class="border-gray-300 border text-black hover:bg-white/30 rounded-full p-2">
                <i class="fa fa-chevron-left"></i>
            </button>
            <button onclick="scrollPalateRight()"
                class="border-gray-300 border text-black hover:bg-white/30 rounded-full p-2">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Scroll Container -->
    <div id="palateScroll" class="flex gap-6 overflow-x-auto scroll-smooth snap-x scrollbar-hide">

        @foreach ([
            ['Balanced Meals', 'Nutrition-focused meals that still excite your taste buds.', '30 min', 'nourish1.png'],
            ['Diet-Friendly Cooking', 'Adapt recipes for vegan, gluten-free, or low-carb needs.', '25 min', 'nourish2.png'],
            ['Flavorful Herbs', 'Enhance dishes with fresh herbs and spices.', '15 min', 'nourish3.png'],
            ['Quick Snacks', 'Easy-to-make healthy snacks for any time.', '10 min', 'nourish.png'],
            ['Seasonal Veggies', 'Cook with the freshest seasonal produce.', '20 min', 'nourish2.png'],
        ] as [$title, $description, $prepTime, $img])

        <div class="min-w-[calc((100%/3)-1rem)] h-96 rounded-3xl overflow-hidden relative shrink-0 snap-start">

            <!-- Background Image -->
            <img src="/images/{{ $img }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/40 p-6 flex flex-col justify-end text-white">

                <!-- Title & Description -->
                <h3 class="text-xl font-bold mb-2 uppercase">{{ $title }}</h3>
                <p class="text-sm mb-4">{{ $description }}</p>

                <!-- Prep Time + Read More -->
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold">{{ $prepTime }}</span>
                    <a href="#"
                       class="text-sm font-semibold border border-white px-3 py-1 rounded-full hover:bg-white/20">
                        Read More
                    </a>
                </div>

            </div>
        </div>

        @endforeach

    </div>
</section>

<!-- Scroll Script -->
<script>
    const palateScroll = document.getElementById('palateScroll');

    function getPalateScrollAmount() {
        const card = palateScroll.querySelector('div'); // first card
        const style = window.getComputedStyle(palateScroll);
        const gap = parseInt(style.gap) || 0;
        // Scroll 3 cards at a time
        return (card.offsetWidth + gap) * 3;
    }

    function scrollPalateLeft() {
        palateScroll.scrollBy({ left: -getPalateScrollAmount(), behavior: 'smooth' });
    }

    function scrollPalateRight() {
        palateScroll.scrollBy({ left: getPalateScrollAmount(), behavior: 'smooth' });
    }
</script>
