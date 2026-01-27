@if ($recipe->nutritions->count())
<div class=" bg-white/50 rounded-2xl p-6">
    <h3 class="font-semibold text-orange-600 mb-4">NUTRITION VALUES</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->nutritions as $nutrition)
            <li>{{ $nutrition->label }}: {{ $nutrition->value }}</li>
        @endforeach
    </ul>
</div>
@endif
