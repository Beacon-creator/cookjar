<section class="mx-auto max-w-3xl px-6 py-3 text-center">

    <!-- Tag -->
    <span class="inline-block px-4 py-1 mb-6 text-xs tracking-wide
                 rounded-full text-white bg-orange-500">
        RECIPE
    </span>

    <!-- Title -->
    <h1 class="text-4xl md:text-5xl lg:text-6xl
               font-extrabold leading-tight mx-auto mb-4">
        {{ $recipe->title }}
    </h1>

    <!-- Description -->
    <p class="text-sm md:text-base text-gray-600
              max-w-2xl mx-auto mb-8">
        {{ $recipe->description }}
    </p>

    <!-- Meta info -->
    <div class="flex flex-wrap justify-center items-center gap-4
                text-xs md:text-sm font-medium text-gray-700">
        <span>⏱ {{ $recipe->prep_time ?? '1 HOUR' }}</span>
        <span class="opacity-40">•</span>
        <span>🔥 {{ $recipe->difficulty ?? 'HARD PREP' }}</span>
        <span class="opacity-40">•</span>
        <span>🍽 {{ $recipe->serving ?? '4 SERVES' }}</span>
    </div>

</section>
