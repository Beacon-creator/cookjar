<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller
{
    // All recipes page
    public function index()
    {
        $recipes = Recipe::latest()->paginate(12);

        return view('recipes.index', compact('recipes'));
    }

    // Single recipe page
    public function show(Recipe $recipe)
    {
        $recipe->load([
            'steps',
            'ingredients',
            'equipments',
            'nutritions',
            'tips',
            'pairings',
            'author',
        ]);

        return view('recipes.show', compact('recipe'));
    }
}
