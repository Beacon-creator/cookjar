@extends('layouts.app')

@section('title', 'Cooking Tips | CookJar')

@section('content')

<!-- ======================== -->
@include('pages.tips.partials.hero')


<!-- =========================
 SECTION 2: NEWEST RECIPES

========================= -->
@include('partials.featured-recipes', ['title' => 'NEWEST RECIPES'])


<!-- =========================
 SECTION 3: MASTERING THE BASICS
========================= -->

@include('pages.tips.partials.basics')

<!-- =========================
 SECTION 4: NOURISHING EVERY PALATE
========================= -->
@include('pages.tips.partials.nourishing')

<!-- ========================= -->
@include('pages.tips.partials.tricks')

<!-- =========================
 SUBSCRIBE (reuse partial)
========================= -->
@include('partials.subscribe')

@endsection
