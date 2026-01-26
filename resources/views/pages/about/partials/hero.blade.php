<section class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center py-10">
    <!-- Left -->
    <div>
        <h1 class="text-6xl font-extrabold leading-tight">
            WELCOME TO MY CULINARY WORLD!
        </h1>
    </div>

    <!-- Right -->
    <div class="text-gray-600">
        <p>
           Bonjour and welcome to the heart of my kitchen! I'm Isabella Russo, 
           the culinary enthusiast behind this haven of flavors, Cooks Delight. Join me on a gastronomic journey 
           where each dish carries a story, and every recipe is a crafted symphony of taste.
        </p>

        <button>
            <a href="{{ route('recipes.index') }}"
               class="mt-6 inline-block text-xs bg-orange-400 text-white
                      px-3 py-3 rounded-full font-semibold
                      hover:bg-orange-500 transition">
                EXPLORE RECIPES
            </a>
    </div>
</section>
