@if(isset($featuredRecipes) && $featuredRecipes->count())
<section class="bg-orange-50 border border-gray-300 px-6 py-6 rounded-3xl relative">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold">
            {{ $title ?? 'FEATURED RECIPES' }}
        </h2>

        <!-- Scroll Buttons -->
        <div class="flex space-x-3">
            <button onclick="scrollLeft()" class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                <i class="fa fa-chevron-left"></i>
            </button>

            <button onclick="scrollRight()" class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Scroll Container -->
    <div id="recipeScroll" class="flex gap-3 overflow-x-auto scroll-smooth pb-4 snap-x scrollbar-hide">

        @foreach ($featuredRecipes as $recipe)
        <article class="w-1/2 shrink-0 h-95 bg-orange-50 rounded-2xl shadow flex flex-col overflow-hidden snap-start">
            <img src="{{ asset('images/' . $recipe->image) }}" alt="{{ $recipe->title }}" class="h-55 w-full object-cover">
            <div class="p-4 flex flex-col flex-1">
                <div class="flex-1">
                    <h3 class="font-extrabold text-lg mb-2 line-clamp-2">{{ $recipe->title }}</h3>
                    <p class="text-gray-600 text-sm line-clamp-3">{{ $recipe->description }}</p>
                </div>
                <div class="flex items-center justify-between pt-4 text-xs">
                    <span class="text-gray-500">{{ $recipe->more_info }}</span>
                    <a href="{{ route('recipes.show', $recipe) }}" class="text-gray-600 border border-gray-400 rounded-full font-semibold hover:bg-gray-100 px-3 py-1">
                        VIEW RECIPE
                    </a>
                </div>
            </div>
        </article>
        @endforeach

    </div>

    <!-- Scroll Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollContainer = document.getElementById('recipeScroll');

            function getScrollAmount() {
                const card = scrollContainer.querySelector('article');
                if (!card) return 0;
                const style = window.getComputedStyle(scrollContainer);
                const gap = parseInt(style.gap) || 0;
                return card.offsetWidth + gap;
            }

            window.scrollRight = () => {
                scrollContainer.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            };

            window.scrollLeft = () => {
                scrollContainer.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
            };
        });
    </script>

</section>
@endif
