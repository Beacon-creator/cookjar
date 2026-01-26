@extends('layouts.app')

@section('title', 'Cooking Tips | CookJar')

@section('content')

{{-- SECTION 1: HERO --}}
<x-split-hero title="Our Essential Cooking Tips">
    Cooking is both an art and a science. Here we share the knowledge
    that helps you cook smarter, not harder.
</x-split-hero>

{{-- SECTION 1 (LOWER): ICONS --}}
<div class="grid md:grid-cols-3 gap-8 mt-12">
    <x-feature-icon ... />
    <x-feature-icon ... />
    <x-feature-icon ... />
</div>

{{-- SECTION 2: NEWEST RECIPES --}}
<x-recipe-grid title="Newest Recipes" :recipes="$newestRecipes" />

{{-- SECTION 3: MASTERING THE BASICS --}}
<x-section title="Mastering the Basics">
    <div class="flex gap-6 overflow-x-auto">
        @foreach ($basics as $item)
            <x-info-card ... />
        @endforeach
    </div>
</x-section>

{{-- SECTION 4: NOURISHING EVERY PALATE --}}
<x-section title="Nourishing Every Palate">
    <div class="grid md:grid-cols-4 gap-6">
        @foreach ($nourishing as $item)
            <x-overlay-card ... />
        @endforeach
    </div>
</x-section>

{{-- SECTION 5: TIPS & TRICKS --}}
<x-section title="Tips & Tricks">
    <div class="grid md:grid-cols-4 gap-6">
        @foreach ($tips as $item)
            <x-overlay-card ... />
        @endforeach
    </div>
</x-section>

{{-- SUBSCRIBE --}}
<x-subscribe />

@endsection
