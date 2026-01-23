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
        'name' => 'Chef Maria Lopez',
        'bio'  => 'Professional home chef and food blogger.',
        'image'=> 'author.jpeg',
    ]);

    $recipe = Recipe::create([
        'title' => 'Lemon Garlic Roasted Chicken',
        'description' => 'Welcome to Cooks Delight, where culinary dreams 
            come alive! Today, we embark on a journey of flavors with a dish that promises to elevate your 
            dining experience – our Citrus Infusion Delight: Lemon Garlic Roasted Chicken.',
        'body' => 'This recipe is a perfect blend of citrusy and garlicky flavors, 
            creating a dish that is both aromatic and satisfying.',
        'more_info' => '1 Hour • Hard Prep • 4 Serves',
        'image' => 'lemon-chicken.png',
        'is_featured' => true,
        'author_id' => $authors->id,       
        'slug' => Str::slug('lemon-garlic-roasted-chicken'),
    ]);

    Ingredient::insert([
        ['recipe_id' => $recipe->id, 'name' => 'Whole chicken', 'quantity' => '1'],
        ['recipe_id' => $recipe->id, 'name' => 'Lemon', 'quantity' => '2'],
        ['recipe_id' => $recipe->id, 'name' => 'Garlic cloves', 'quantity' => '6'],
        ['recipe_id' => $recipe->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
        ['recipe_id' => $recipe->id, 'name' => 'Fresh rosemary', 'quantity' => '2 sprigs'],
        ['recipe_id' => $recipe->id, 'name' => 'Salt', 'quantity' => 'to taste'],
        ['recipe_id' => $recipe->id, 'name' => 'Black pepper', 'quantity' => 'to taste'],
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
    [
        'recipe_id' => $recipe->id,
        'title' => 'Wine Pairing',
        'description' => 'Pair with a crisp white wine or light rosé for a balanced meal.',
    ],
]);

    }
}




