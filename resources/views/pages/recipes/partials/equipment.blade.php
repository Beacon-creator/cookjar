@if ($recipe->equipments->count())
<div class="bg-white/50 rounded-2xl p-6">
    <h3 class="font-semibold text-orange-600 mb-4">EQUIPMENT NEEDED FOR PREPARATION</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->equipments as $equipment)
            <li>• {{ $equipment->name }}</li>
        @endforeach
    </ul>
</div>
@endif
