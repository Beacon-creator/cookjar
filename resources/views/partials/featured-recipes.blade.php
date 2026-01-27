@if(isset($featuredRecipes) && $featuredRecipes->count())
<section class="bg-gray-50 border border-gray-300 px-6 py-6 rounded-3xl">

    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-bold">FEATURED RECIPES</h2>

        <!-- Scroll Buttons -->
        <div class="flex space-x-3">
            <button onclick="scrollLeft()"
                class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                <i class="fa fa-chevron-left"></i>
            </button>

            <button onclick="scrollRight()"
                class="border border-gray-300 rounded-full px-3 py-1 hover:bg-gray-200">
                <i class="fa fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- Scroll Container -->
    <div id="recipeScroll"
        class="flex gap-6 overflow-x-auto scroll-smooth pb-4">

        @foreach ($featuredRecipes as $recipe)
        <article
            class="min-w-[300px] max-w-[300px] h-[420px]
                   bg-white rounded-2xl shadow
                   flex flex-col overflow-hidden">

            <!-- Image -->
            <img
                src="{{ asset('images/' . $recipe->image) }}"
                alt="{{ $recipe->title }}"
                class="h-48 w-full object-cover">

            <!-- Content -->
            <div class="p-4 flex flex-col flex-1">

                <div class="flex-1">
                    <h3 class="font-extrabold text-lg mb-2 line-clamp-2">
                        {{ $recipe->title }}
                    </h3>

                    <p class="text-gray-600 text-sm line-clamp-3">
                        {{ $recipe->description }}
                    </p>
                </div>

                <div class="flex items-center justify-between pt-4 text-xs">
                    <span class="text-gray-500">
                        {{ $recipe->more_info }}
                    </span>

                    <a href="{{ route('recipes.show', $recipe) }}"
                       class="text-gray-600 border border-gray-400
                              rounded-full font-semibold
                              hover:bg-gray-100 px-3 py-1">
                        VIEW RECIPE
                    </a>
                </div>

            </div>
        </article>
        @endforeach

    </div>
</section>
@endif
