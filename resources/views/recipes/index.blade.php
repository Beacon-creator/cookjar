@extends('layouts.app')

@section('title', 'All Recipes | CookJar')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-10 text-center">All Recipes</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($recipes as $recipe)
            <a href="{{ route('recipes.show', $recipe) }}"
               class="block border rounded-lg overflow-hidden hover:shadow">
               
                <img src="/images/{{ $recipe->image }}"
                     class="h-48 w-full object-cover">

                <div class="p-4">
                    <h2 class="font-semibold text-lg">
                        {{ $recipe->title }}
                    </h2>
                    <p class="text-gray-600 text-sm">
                        {{ $recipe->more_info }}
                    </p>
                </div>
            </a>
        @empty
            <p class="col-span-3 text-center text-gray-500">
                No recipes found.
            </p>
        @endforelse
    </div>

    <div class="mt-10">
        {{ $recipes->links() }}
    </div>
</section>
@endsection
