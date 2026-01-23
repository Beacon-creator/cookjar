@extends('layouts.app')

@section('title', $recipe->title . ' | CookJar')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-10
                border border-black/10
                rounded-3xl
                bg-transparent">

    {{-- HERO --}}
    @include('pages.recipes.partials.hero')

    {{-- IMAGE --}}
    <img src="/images/{{ $recipe->image }}"
         class="w-full h-105 object-cover rounded-2xl my-10">

    {{-- MAIN GRID --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

        {{-- LEFT: MAIN CONTENT --}}
        <div class="lg:col-span-2 space-y-10">

            {{-- DESCRIPTION --}}
            <div class=" rounded-3xl p-6">
                <p class="text-gray-700 leading-relaxed">
                    {{ $recipe->description }}
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
        <aside class="space-y-6">

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
@endsection
