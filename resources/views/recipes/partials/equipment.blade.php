<div class="border rounded-2xl p-6">
    <h3 class="font-semibold mb-4">Equipment</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->equipments as $equipment)
            <li>• {{ $equipment->name }}</li>
        @endforeach
    </ul>
</div>
