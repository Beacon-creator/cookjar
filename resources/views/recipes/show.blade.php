@extends('layouts.app')

@section('title', $recipe->title . ' | CookJar')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
    <h1 class="text-4xl font-bold mb-6">{{ $recipe->title }}</h1>
    <img src="/images/{{ $recipe->image }}" class="w-full h-64 object-cover mb-6 rounded-lg">
    <p class="text-gray-600 mb-4">{{ $recipe->description }}</p>
    <p class="text-gray-500">{{ $recipe->more_info }}</p>
</section>
@endsection
