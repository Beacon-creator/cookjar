@if ($recipe->steps->count())
<div>
    <h2 class="text-2xl font-semibold mb-6">Steps</h2>
    <div class="space-y-8">
        @foreach ($recipe->steps as $step)
            <div class="flex gap-6">
                <div class="font-bold text-lg">
                    {{ $step->step_number }}.
                </div>
                <div>
                    <h3 class="font-semibold mb-2">{{ $step->title }}</h3>
                    <p class="text-gray-600 mb-3">{{ $step->instruction }}</p>
                    @if ($step->image)
                        <img src="/images/{{ $step->image }}"
                             class="rounded-xl w-full max-w-md">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif
