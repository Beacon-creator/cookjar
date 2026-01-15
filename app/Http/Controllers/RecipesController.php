<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller
{
    // Show all recipes
    public function index()
    {
        $recipes = Recipe::latest()->paginate(12); // pagination
        return view('recipes.index', compact('recipes'));
    }

    // Show single recipe
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }
}
