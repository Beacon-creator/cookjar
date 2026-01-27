<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Recipe;
use App\Models\RecipeStep;
use App\Models\Ingredient;
use App\Models\Equipment;
use App\Models\Nutrition;
use App\Models\RecipeTip;
use App\Models\Pairing;
use App\Models\Author;
use Illuminate\Support\Str;


class RecipeSeeder extends Seeder
{
 
    public function run(): void
    {
    
    $authors = Author::create([
        'name' => 'Chef Beacon',
        'bio'  => 'Professional home chef and food blogger.',
        'image'=> 'author.jpeg',
    ]);

$recipes = [
    [
        'title' => 'Lemon Garlic Roasted Chicken',
        'description' => 'Succulent chicken infused with lemon and garlic.',
        'body' => 'A classic roast recipe.',
        'more_info' => '1 Hour • Hard Prep • 4 Serves',
        'image' => 'lemon-chicken.png',
        'is_featured' => true,
        'slug' => 'lemon-garlic-roasted-chicken',
    ],
    [
        'title' => 'Creamy Mushroom Pasta',
        'description' => 'Rich, creamy pasta with sautéed mushrooms.',
        'body' => 'Comfort food at its finest.',
        'more_info' => '30 Min • Easy • 2 Serves',
        'image' => 'mushroom-pasta.png',
        'is_featured' => true,
        'slug' => 'creamy-mushroom-pasta',
    ],
    [
        'title' => 'Grilled Honey Salmon',
        'description' => 'Perfectly grilled salmon with honey glaze.',
        'body' => 'Healthy and flavorful.',
        'more_info' => '25 Min • Medium • 3 Serves',
        'image' => 'honey-salmon.png',
        'is_featured' => true,
        'slug' => 'grilled-honey-salmon',
    ],
];

foreach ($recipes as $data) {
    Recipe::create([
        ...$data,
        'author_id' => $authors->id,
    ]);
}
    $recipe = Recipe::where('slug', 'lemon-garlic-roasted-chicken')->first();

    

    Ingredient::insert([
        ['recipe_id' => $recipe->id, 'name' => 'Whole chicken', 'quantity' => '1'],
        ['recipe_id' => $recipe->id, 'name' => 'Lemon', 'quantity' => '2'],
        ['recipe_id' => $recipe->id, 'name' => 'Garlic cloves', 'quantity' => '6'],
        ['recipe_id' => $recipe->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
        ['recipe_id' => $recipe->id, 'name' => 'Fresh rosemary', 'quantity' => '2 sprigs'],
        ['recipe_id' => $recipe->id, 'name' => 'Salt', 'quantity' => 'Some'],
        ['recipe_id' => $recipe->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
    ]);

    Equipment::insert([
        ['recipe_id' => $recipe->id, 'name' => 'Roasting pan'],
        ['recipe_id' => $recipe->id, 'name' => 'Meat thermometer'],
        ['recipe_id' => $recipe->id, 'name' => 'Basting brush'],
        ['recipe_id' => $recipe->id, 'name' => 'Kitchen twine'],
        ['recipe_id' => $recipe->id, 'name' => 'Cutting board'],
    ]);

    RecipeStep::insert([
        [
            'recipe_id' => $recipe->id,
            'title' => 'PREHEAT AND PREPARE',
            'instruction' => 'Pat the chicken dry and season generously.',
            'image' => 'step1.png',
        ],
        [
            'recipe_id' => $recipe->id,
            'title' => 'ROAST TO PERFECTION',
            'instruction' => 'Roast at 190°C until golden brown.',
            'image' => 'step2.png',
        ],
    ]);

    Nutrition::insert([
        ['recipe_id' => $recipe->id, 'label' => 'Calories', 'value' => '420 kcal'],
        ['recipe_id' => $recipe->id, 'label' => 'Protein', 'value' => '38g'],
        ['recipe_id' => $recipe->id, 'label' => 'Total Fat', 'value' => '~13g'],
        ['recipe_id' => $recipe->id, 'label' => 'Carbohydrates', 'value' => '5g'],
    ]);

    RecipeTip::insert([
    [
        'recipe_id' => $recipe->id,
        'type' => 'do',
        'title' => 'Thoroughly Clean Hands and Surfaces',
        'content' => 'Before and after handling raw chicken, ensure your hands, utensils, and surfaces are clean to prevent cross-contamination.',
    ],
    [
        'recipe_id' => $recipe->id,
        'type' => 'do',
        'title' => 'Use Separate Cutting Boards',
        'content' => 'Dedicate specific cutting boards for raw chicken to avoid the spread of bacteria to other foods.',
    ],
    [
        'recipe_id' => $recipe->id,
        'type' => 'do',
        'title' => 'Check Internal Temperature',
        'content' => 'Ensure the chicken reaches a safe internal temperature of 165°F (74°C).',
    ],
    [
        'recipe_id' => $recipe->id,
        'type' => 'dont',
        'title' => 'Thaw Chicken at Room Temperature',
        'content' => 'Always thaw chicken in the refrigerator to prevent bacterial growth.',
    ],
    [
        'recipe_id' => $recipe->id,
        'type' => 'dont',
        'title' => 'Overcrowd the Pan',
        'content' => 'Leave space between chicken pieces to allow even cooking.',
    ],
    ]);

   Pairing::insert([
    [
        'recipe_id' => $recipe->id,
        'title' => 'Roasted Vegetables',
        'description' => 'Seasonal roasted vegetables complement the citrus and garlic flavors beautifully.',
    ],
    [
        'recipe_id' => $recipe->id,
        'title' => 'Herb-infused Quinoa',
        'description' => 'A wholesome base that absorbs the roasted chicken juices perfectly.',     
    ],

    ]);
    }
}




