@extends('layouts.app')

@section('title', $recipe->title . ' | CookJar')

@section('content')
<section class="max-w-7xl mx-auto mb-6 px-6 py-5
                border border-black/10
                rounded-3xl bg-orange-50
                shadow-lg">

    {{-- HERO --}}
    @include('pages.recipes.partials.hero')

    {{-- IMAGE --}}
    <img src="{{ asset('images/' . $recipe->image) }}"
         class="w-full h-125 object-cover rounded-2xl my-5">

    {{-- MAIN GRID --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        {{-- LEFT: MAIN CONTENT --}}
        <div class="lg:col-span-2 space-y-5">

            {{-- DESCRIPTION --}}
            <div class=" rounded-3xl p-3">
                <p class="text-gray-700 leading-relaxed">
                    {{ $recipe->body }}
                </p>
            </div>

            {{-- DO'S & DON'TS --}}
            @include('pages.recipes.partials.tips')

            {{-- INSTRUCTIONS --}}
            @include('pages.recipes.partials.steps')

            {{-- PAIRINGS --}}
            @include('pages.recipes.partials.pairings')

            {{-- AUTHOR --}}
            @include('pages.recipes.partials.author')

        </div>

        {{-- RIGHT: SIDEBAR --}}
        <aside class="space-y-4">

            <div class="bg-white rounded-3xl p-2">
                @include('pages.recipes.partials.ingredients')
            </div>

            <div class="bg-white rounded-3xl p-2">
                @include('pages.recipes.partials.equipment')
            </div>

            <div class="bg-white rounded-3xl p-2">
                @include('pages.recipes.partials.nutrition')
            </div>

        </aside>

    </div>
</section>


<!-- SIMILAR RECIPES -->
@include('partials.featured-recipes', ['title' => 'SIMILAR RECIPES'])


<!-- Subscribe Section -->
@include('partials.subscribe')

@endsection
