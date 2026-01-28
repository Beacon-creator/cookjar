@extends('layouts.app')

@section('title', 'All Recipes | CookJar')

@section('content')
<section class="px-3 py-3">
    <h1 class="text-3xl font-bold mb-5 text-center">ALL RECIPES</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        @forelse($recipes as $recipe)
            <div class="border rounded-lg overflow-hidden hover:shadow flex flex-col">
               
                <!-- Recipe Image -->
                <img src="/images/{{ $recipe->image }}"
                     class="h-48 w-full object-cover">

                <!-- Content -->
                <div class="p-4 flex flex-col flex-1">
                    <h2 class="font-semibold text-lg mb-2">
                        {{ $recipe->title }}
                    </h2>
                    <p class="text-gray-600 text-sm mb-4">
                        {{ $recipe->more_info }}
                    </p>

                    <!-- Read More Button -->
                    <a href="{{ route('recipes.show', $recipe) }}"
                       class="mt-auto inline-block text-sm font-semibold text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-full text-center">
                        Read More
                    </a>
                </div>
            </div>
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
