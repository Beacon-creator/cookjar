@if ($recipe->author)
<div class="flex items-center gap-6 border rounded-3xl p-6">
    <img src="/images/{{ $recipe->author->image }}"
         class="w-20 h-20 rounded-full object-cover">

    <div>
        <h4 class="font-semibold">{{ $recipe->author->name }}</h4>
        <p class="text-gray-600 text-sm">{{ $recipe->author->bio }}</p>
    </div>
</div>
@endif
