<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/recipes', [RecipesController::class, 'index'])
    ->name('recipes.index');

Route::get('/recipes/{recipe}', [RecipesController::class, 'show'])
    ->name('recipes.show');

Route::get('/tips', function () {
    return view('pages.tips');
})->name('tips.index');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/search', function () {
    return 'Search page';
})->name('search');

Route::get('/subscribe', function () {
    return 'Subscribe page';
})->name('subscribe');

