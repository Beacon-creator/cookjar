@extends('layouts.app')

@section('title', 'About Us | CookJar')

@section('content')
    @include('pages.about.partials.hero')
    @include('pages.about.partials.biography')
    @include('pages.about.partials.gallery')
@endsection
