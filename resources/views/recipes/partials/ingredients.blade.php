<div class="border rounded-2xl p-6">
    <h3 class="font-semibold mb-4">Ingredients</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->ingredients as $ingredient)
            <li>• {{ $ingredient->quantity }} {{ $ingredient->name }}</li>
        @endforeach
    </ul>
</div>
