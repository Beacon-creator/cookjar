@if ($recipe->nutritions->count())
<div class="border rounded-2xl p-6">
    <h3 class="font-semibold mb-4">Nutrition</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->nutritions as $nutrition)
            <li>{{ $nutrition->label }}: {{ $nutrition->value }}</li>
        @endforeach
    </ul>
</div>
@endif
