<section class="max-w-4xl mx-auto px-6 pt-16 text-center">
    <span class="inline-block px-4 py-1 mb-4 text-sm rounded-full bg-gray-100">
        RECIPE
    </span>

    <h1 class="text-4xl font-bold mb-4">
        {{ $recipe->title }}
    </h1>

    <p class="text-gray-600 max-w-2xl mx-auto mb-6">
        {{ $recipe->description }}
    </p>

    <div class="flex justify-center items-center gap-6 text-sm text-gray-500">
        <span>⏱ {{ $recipe->prep_time ?? '1 Hour' }}</span>
        <span>•</span>
        <span>🔥 {{ $recipe->difficulty ?? 'Hard Prep' }}</span>
        <span>•</span>
        <span>🍽 {{ $recipe->servings ?? '4 Serves' }}</span>
    </div>
</section>
