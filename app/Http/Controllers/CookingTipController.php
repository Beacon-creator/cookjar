<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;


class CookingTipController extends Controller
{
    public function index()
    {
        return view('pages.tips.index', [
            'featuredRecipes' => Recipe::latest()->take(6)->get(),
        ]);
    }
}

