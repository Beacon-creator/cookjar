@if ($recipe->pairings->count())
<div class=" p-6">
    <h3 class="font-semibold mb-4">PAIRING SUGGESTIONS</h3>
    <ol class="mb-2 text-sm text-gray-600">
        <li>Side Dish: Serve alongside roasted vegetables or a simple green salad.</li>
        <li>Wine: Pair with a crisp white wine or a light rosé for a well-balanced meal.</li>
    </ol>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->pairings as $pairing)
        <p>{{ $pairing->list }}</p>
            <li>• {{ $pairing->title }}</li>
            <li class="ml-4 text-gray-600">{{ $pairing->description }}</li>
        <p>The combination of fresh lemon and aromatic garlic creates a
            citrus-infused masterpiece that takes the classic roast chicken to a whole new level. The acidity of the lemons not only adds brightness but also helps to tenderize the meat, resulting in a juicy and flavorful dish.
            Whether you\'re hosting a family dinner or looking for a show-stopping centerpiece for a special celebration, 
            this Lemon Garlic Roasted Chicken is the answer. The simplicity of the ingredients allows the natural flavors 
            to shine, making it a versatile and impressive dish.',</p>
        @endforeach
    </ul>
</div>
@endif