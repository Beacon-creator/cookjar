@extends('layouts.app')

@section('title', 'About Us | CookJar')

@section('content')
    @include('pages.about.partials.hero')

    <section class="px-4 py-8 border rounded-3xl">
         @include('pages.about.partials.biography')
        @include('pages.about.partials.gallery')
    </section>

    <section class="mt-12">
        @include('partials.featured-recipes')
        @include('partials.subscribe')
    </section>
@endsection
