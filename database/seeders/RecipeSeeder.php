<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Recipe;
use App\Models\RecipeStep;
use App\Models\Ingredient;
use App\Models\Equipment;
use App\Models\Nutrition;
use App\Models\Author;
use Illuminate\Support\Str;

class RecipeSeeder extends Seeder
{
 
    public function run(): void
    {
    $author = Author::create([
        'name' => 'Chef Maria Lopez',
        'bio'  => 'Professional home chef and food blogger.',
        'image'=> 'author.png',
    ]);

    $recipe = Recipe::create([
        'title' => 'Lemon Garlic Roasted Chicken',
        'description' => 'A juicy roasted chicken infused with lemon and garlic flavors.',
        'more_info' => '1 Hour • Hard Prep • 4 Serves',
        'image' => 'lemon-chicken.png',
        'is_featured' => true,
        'author_id' => $author->id,
        'slug' => Str::slug('lemon-garlic-roasted-chicken'),
    ]);

    Ingredient::insert([
        ['recipe_id' => $recipe->id, 'name' => 'Whole chicken', 'quantity' => '1'],
        ['recipe_id' => $recipe->id, 'name' => 'Lemon', 'quantity' => '2'],
        ['recipe_id' => $recipe->id, 'name' => 'Garlic cloves', 'quantity' => '6'],
    ]);

    Equipment::insert([
        ['recipe_id' => $recipe->id, 'name' => 'Roasting pan'],
        ['recipe_id' => $recipe->id, 'name' => 'Meat thermometer'],
    ]);

    RecipeStep::insert([
        [
            'recipe_id' => $recipe->id,
            'step_number' => 1,
            'title' => 'Prepare the chicken',
            'instruction' => 'Pat the chicken dry and season generously.',
            'image' => 'step1.png',
        ],
        [
            'recipe_id' => $recipe->id,
            'step_number' => 2,
            'title' => 'Roast to perfection',
            'instruction' => 'Roast at 190°C until golden brown.',
            'image' => 'step2.png',
        ],
    ]);

    Nutrition::insert([
        ['recipe_id' => $recipe->id, 'label' => 'Calories', 'value' => '420 kcal'],
        ['recipe_id' => $recipe->id, 'label' => 'Protein', 'value' => '38g'],
    ]);
    }
}




