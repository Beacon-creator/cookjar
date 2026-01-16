@extends('layouts.app')

@section('title', $recipe->title . ' | CookJar')

@section('content')
<section class="max-w-5xl mx-auto px-6 py-16">

    <!-- Recipe Header -->
    <div class="text-center mb-10">
        <span class="inline-block px-4 py-1 rounded-full bg-orange-200 text-orange-800 font-semibold text-sm">RECIPE</span>
        <h1 class="text-4xl font-bold mt-4">{{ $recipe->title }}</h1>
        <p class="text-gray-600 mt-2">{{ $recipe->description }}</p>

        <div class="flex justify-center items-center gap-6 mt-3 text-gray-600 text-sm">
            <span class="flex items-center gap-1">⏱ {{ $recipe->more_info }}</span>
        </div>
    </div>

    <!-- Main Image -->
    <img src="/images/{{ $recipe->image }}" class="w-full h-80 object-cover rounded-lg mb-10">

    <!-- Ingredients / Equipment / Nutrition / Tips / Pairings -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">

        <!-- Left Column: Ingredients -->
        <div>
            <h3 class="font-semibold text-lg mb-2">Ingredients</h3>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($recipe->ingredients as $ingredient)
                    <li>{{ $ingredient->quantity ? $ingredient->quantity . ' - ' : '' }}{{ $ingredient->name }}</li>
                @endforeach
            </ul>

            <h3 class="font-semibold text-lg mt-4 mb-2">Equipment</h3>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($recipe->equipment as $eq)
                    <li>{{ $eq->name }}</li>
                @endforeach
            </ul>

            <h3 class="font-semibold text-lg mt-4 mb-2">Tips</h3>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($recipe->tips as $tip)
                    <li>{{ $tip->tip }}</li>
                @endforeach
            </ul>
        </div>

        <!-- Right Column: Nutrition & Pairings -->
        <div>
            <h3 class="font-semibold text-lg mb-2">Nutrition</h3>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($recipe->nutritions as $nut)
                    <li>{{ $nut->label }}: {{ $nut->value }}</li>
                @endforeach
            </ul>

            <h3 class="font-semibold text-lg mt-4 mb-2">Pairings</h3>
            <ul class="list-disc pl-5 text-gray-700">
                @foreach($recipe->pairings as $pair)
                    <li>{{ $pair->name }}</li>
                @endforeach
            </ul>
        </div>

    </div>

    <!-- Recipe Steps -->
    <div class="mb-10">
        <h3 class="text-2xl font-bold mb-4">Steps</h3>
        @foreach($recipe->steps as $step)
            <div class="mb-6">
                <h4 class="font-semibold text-lg mb-1">Step {{ $step->step_number }}: {{ $step->title }}</h4>
                <p class="text-gray-700 mb-2">{{ $step->instruction }}</p>
                @if($step->image)
                    <img src="/images/{{ $step->image }}" class="w-full h-64 object-cover rounded-lg">
                @endif
            </div>
        @endforeach
    </div>

    <!-- Author -->
    @if($recipe->author)
        <div class="flex items-center gap-4 mt-10 border-t pt-4">
            <img src="/images/{{ $recipe->author->image }}" class="w-16 h-16 rounded-full object-cover">
            <div>
                <h4 class="font-semibold">{{ $recipe->author->name }}</h4>
                <p class="text-gray-600 text-sm">{{ $recipe->author->bio }}</p>
            </div>
        </div>
    @endif

</section>
@endsection
