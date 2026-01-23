<section class="border border-black/10 rounded-3xl p-6 bg-transparent">
    <h3 class="text-xl font-bold mb-6">Let’s go over the basics– the do’s, 
        and the don’ts– for How to Cook a chicken</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- DO'S --}}
        <div>
            <h4 class="font-semibold text-green-600 mb-4">DO’S</h4>
            <ul class="space-y-4">
                @foreach($recipe->tips->where('type', 'do') as $tip)
                    <li>
                        <p class="font-medium">{{ $tip->title }}</p>
                        <p class="text-sm text-gray-600">{{ $tip->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- DON'TS --}}
        <div>
            <h4 class="font-semibold text-red-600 mb-4">DON'TS</h4>
            <ul class="space-y-4">
                @foreach($recipe->tips->where('type', 'dont') as $tip)
                    <li>
                        <p class="font-medium">{{ $tip->title }}</p>
                        <p class="text-sm text-gray-600">{{ $tip->content }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>
