@if ($recipe->pairings->count())
<div class=" py-3">
    <h3 class="font-semibold text-3xl mb-4">PAIRING SUGGESTIONS</h3>

    {{-- Intro text (SHOW ONCE) --}}
    <ol class="mb-4 text-sm text-gray-600 space-y-1">
        <li>Side Dish: Serve alongside roasted vegetables or a simple green salad.</li>
        <li>Wine: Pair with a crisp white wine or a light rosé for a well-balanced meal.</li>
    </ol>

    <p class="text-sm text-gray-600 mb-6">
        The combination of fresh lemon and aromatic garlic creates a
        citrus-infused masterpiece that takes the classic roast chicken to a whole new level.
        The acidity of the lemons adds brightness and helps tenderize the meat, resulting in a juicy,
        flavorful dish. Perfect for both family dinners and special occasions.
    </p>

    {{-- Pairings (REPEAT) --}}
    <ul class="space-y-3 text-sm">
        @foreach ($recipe->pairings as $pairing)
            <li>
                <p class="font-medium">• {{ $pairing->title }}</p>
                <p class="ml-4 text-gray-600">
                    {{ $pairing->description }}
                </p>
            </li>
        @endforeach
    </ul>
</div>
@endif
