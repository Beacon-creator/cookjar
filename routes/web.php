<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CookingTipController;


Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/recipes', [RecipesController::class, 'index'])
    ->name('recipes.index');

Route::get('/recipes/{recipe}', [RecipesController::class, 'show'])
    ->name('recipes.show');

Route::get('/tips', [CookingTipController::class, 'index'])
    ->name('tips');

Route::get('/about', [AboutController::class, 'index'])
    ->name('about');

Route::get('/search', function () {
    return 'Search page';
})->name('search');

Route::get('/subscribe', function () {
    return 'Subscribe page';
})->name('subscribe');

