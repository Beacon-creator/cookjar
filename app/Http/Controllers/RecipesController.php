<?php

namespace App\Http\Controllers;

use App\Models\Recipe;

class RecipesController extends Controller
{
    // All recipes page
    public function index()
    {
        $recipes = Recipe::latest()->paginate(12);

        return view('pages.recipes.index', compact('recipes'));
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

        $featuredRecipes = Recipe::where('is_featured', true)
        ->where('id', '!=', $recipe->id)
        ->latest()
        ->take(6)
        ->get();

        return view('pages.recipes.show', 
        ['recipe' => $recipe, 'featuredRecipes' => $featuredRecipes]
        // compact('recipe', 'featuredRecipes'));
    );
    }   
}
