@if ($recipe->pairings->count())
<div class="border rounded-2xl p-6">
    <h3 class="font-semibold mb-4">Pairings</h3>
    <ul class="space-y-2 text-sm">
        @foreach ($recipe->pairings as $pairing)
            <li>• {{ $pairing->title }}</li>
        @endforeach
    </ul>
</div>
@endif