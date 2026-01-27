@if ($recipe->ingredients->count())
<div class="bg-white/50 rounded-2xl p-6">
    <h3 class="font-semibold text-orange-600 mb-4">INGREDIENTS</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->ingredients as $ingredient)
            <li>• {{ $ingredient->quantity }} {{ $ingredient->name }}</li>
        @endforeach
    </ul>
</div>
@endif
