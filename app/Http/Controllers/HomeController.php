<?php

namespace App\Http\Controllers;

use App\Models\Recipe;   // <-- THIS LINE IS CRITICAL
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $featuredRecipes = Recipe::where('is_featured', true)
            ->latest()
            ->take(6)
            ->get();

        return view('pages.home', compact('featuredRecipes'));
    }
}
