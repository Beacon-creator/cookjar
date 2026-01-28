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
        'name' => 'Chef',
        'bio'  => 'Professional home chef and food blogger.',
        'image'=> 'author.png',
    ]);

$recipes = [
    [
        'title' => 'Savory Herb-Infused Chicken',
        'description' => 'Indulge in the rich and savory symphony 
            of flavors with our Savory Herb-Infused Chicken.',
        'body' => 'Picture succulent chicken infused with the bright notes of lemon and the aromatic 
            richness of garlic. It\'s a symphony of flavors that will have your taste buds dancing. 
            Join us as we delve into the art of roasting and uncover the secrets behind creating a masterpiece 
            that\'s not just a meal but a celebration of culinary craftsmanship. As you preheat your oven, 
            envision the kitchen filling with the tantalizing aroma of herbs and citrus, setting the
            stage for a delightful meal that transcends the ordinary. The anticipation builds 
            as the chicken roasts to golden perfection, promising a dining experience that  marries 
            simplicity with sophistication. Whether you\'re a seasoned chef or a kitchen novice, this 
            recipe invites you to become a culinary artist, creating a masterpiece that will leave a lasting impression on your guests and loved ones.',
        'more_info' => '40 MINS • EASY PREP • 3 Serves',
        'image' => 'lemon-chicken.png',
        'is_featured' => true,
        'slug' => 'savory-herb-infused-chicken',
    ],
    [
        'title' => 'Decadent Chocolate Mousse',
        'description' => 'Dive into the velvety indulgence of our Decadent 
            Chocolate Mousse. A dessert that transcends sweetness!.',
        'body' => 'Comfort food at its finest.',
        'more_info' => '30 MINS • MEDIUM PREP • 4 SERVES',
        'image' => 'chocolate-mousse.png',
        'is_featured' => true,
        'slug' => 'chocolate-mousse',
    ],
    [
        'title' => 'Brocolli with Honey Glaze',
        'description' => 'Perfectly grilled brocolli with honey glaze.',
        'body' => 'Healthy and flavorful.',
        'more_info' => '25 MINS • MEDIUM PREP • 3 SERVES',
        'image' => 'brocolli-meal.png',
        'is_featured' => true,
        'slug' => 'brocolli-meal',
    ],

    [
        'title' => 'Berry Bliss Smoothie Bowl',
        'description' => 'This berry smoothie bowl is not only 
            visually appealing but also a powerhouse of antioxidants.',
        'body' => 'A healthy start to your day.',
        'more_info' => '15 MINS • EASY PREP • 2 SERVES',
        'image' => 'berry-bliss.png',
        'is_featured' => false,
        'slug' => 'berry-bliss-smoothie-bowl',
    ],

    [
        'title' => 'Spagetti Aglio e Olio',
        'description' => 'A minimalist yet flavorful dish with garlic, 
            olive oil, and a hint of red pepper flakes.',
        'body' => 'Simple yet delicious.',
        'more_info' => '20 MINS • EASY PREP • 4 SERVES',
        'image' => 'spag-aglio.png',
        'is_featured' => false,
        'slug' => 'spagetti-aglio-e-olio',
    ],

    [
        'title' => 'Grilled Veggies with Sauce',
        'description' => 'Served with a zesty chimichurri 
            sauce its a perfect addition to your outdoor gatherings.',
        'body' => 'Perfect for summer barbecues.',
        'more_info' => '30 MINS • MEDIUM PREP • 3 SERVES',
        'image' => 'grilled-veg.png',
        'is_featured' => false,
        'slug' => 'grilled-veggies-with-sauce',
    ]
];

foreach ($recipes as $data) {
    $recipeInstance = Recipe::create([
        ...$data,
        'author_id' => $authors->id,
    ]);

    if ($recipeInstance->slug === 'savory-herb-infused-chicken') {
       Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Whole chicken', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Lemon', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Garlic cloves', 'quantity' => '4'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Fresh herbs', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
        ]);

        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Roasting pan'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Meat thermometer'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Basting brush'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Kitchen twine'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Cutting board'],
        ]);

        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '450 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '40g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~15g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '4g'],
        ]);

        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'title' => 'PREHEAT AND PREPARE',
                'instruction' => 'Pat the chicken dry and season generously.',
                'image' => 'step1.png',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'title' => 'ROAST TO PERFECTION',
                'instruction' => 'Roast at 190°C until golden brown.',
                'image' => 'step2.png',
            ],
        ]);

        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Thoroughly Clean Hands and Surfaces',
            'content' => 'Before and after handling raw chicken, ensure your hands, utensils, and surfaces are clean to prevent cross-contamination.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Use Separate Cutting Boards',
            'content' => 'Dedicate specific cutting boards for raw chicken to avoid the spread of bacteria to other foods.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Check Internal Temperature',
            'content' => 'Ensure the chicken reaches a safe internal temperature of 165°F (74°C).',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Thaw Chicken at Room Temperature',
            'content' => 'Always thaw chicken in the refrigerator to prevent bacterial growth.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overcrowd the Pan',
            'content' => 'Leave space between chicken pieces to allow even cooking.',
        ],
        ]);

        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Roasted Vegetables',
            'description' => 'Seasonal roasted vegetables complement the citrus and garlic flavors beautifully.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Herb-infused Quinoa',
            'description' => 'A wholesome base that absorbs the roasted chicken juices perfectly.',     
        ],

        ]);
    }

    if ($recipeInstance->slug === 'decadent-chocolate-mousse') {
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Dark chocolate', 'quantity' => '200g'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Heavy cream', 'quantity' => '1 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Sugar', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Vanilla extract', 'quantity' => '1 tsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Egg whites', 'quantity' => '3'],
        ]);
    }

    if ($recipeInstance->slug === 'brocolli-with-honey-glaze') {
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Broccoli florets', 'quantity' => '400g'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Honey', 'quantity' => '3 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Soy sauce', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Garlic powder', 'quantity' => '1 tsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
        ]);
    }

    if ($recipeInstance->slug === 'berry-bliss-smoothie-bowl') {
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Mixed berries', 'quantity' => '1 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Banana', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Greek yogurt', 'quantity' => '1/2 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Almond milk', 'quantity' => '1/2 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Honey', 'quantity' => '1 tbsp'],
        ]);
    }

    if ($recipeInstance->slug === 'spagetti-aglio-e-olio') {
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Spaghetti', 'quantity' => '200g'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Garlic cloves', 'quantity' => '4'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '4 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Red pepper flakes', 'quantity' => '1 tsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Fresh parsley', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
        ]);
    }

    if ($recipeInstance->slug === 'grilled-veggies-with-sauce') {
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Assorted vegetables', 'quantity' => '400g'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Chimichurri sauce', 'quantity' => '1/2 cup'],
        ]);
    }
}

}}


//     $recipe = Recipe::where('slug', 'lemon-garlic-roasted-chicken')->first();

    

//     Ingredient::insert([
//         ['recipe_id' => $recipe->id, 'name' => 'Whole chicken', 'quantity' => '1'],
//         ['recipe_id' => $recipe->id, 'name' => 'Lemon', 'quantity' => '2'],
//         ['recipe_id' => $recipe->id, 'name' => 'Garlic cloves', 'quantity' => '6'],
//         ['recipe_id' => $recipe->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
//         ['recipe_id' => $recipe->id, 'name' => 'Fresh rosemary', 'quantity' => '2 sprigs'],
//         ['recipe_id' => $recipe->id, 'name' => 'Salt', 'quantity' => 'Some'],
//         ['recipe_id' => $recipe->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
//     ]);

//     Equipment::insert([
//         ['recipe_id' => $recipe->id, 'name' => 'Roasting pan'],
//         ['recipe_id' => $recipe->id, 'name' => 'Meat thermometer'],
//         ['recipe_id' => $recipe->id, 'name' => 'Basting brush'],
//         ['recipe_id' => $recipe->id, 'name' => 'Kitchen twine'],
//         ['recipe_id' => $recipe->id, 'name' => 'Cutting board'],
//     ]);

//     RecipeStep::insert([
//         [
//             'recipe_id' => $recipe->id,
//             'title' => 'PREHEAT AND PREPARE',
//             'instruction' => 'Pat the chicken dry and season generously.',
//             'image' => 'step1.png',
//         ],
//         [
//             'recipe_id' => $recipe->id,
//             'title' => 'ROAST TO PERFECTION',
//             'instruction' => 'Roast at 190°C until golden brown.',
//             'image' => 'step2.png',
//         ],
//     ]);

//     Nutrition::insert([
//         ['recipe_id' => $recipe->id, 'label' => 'Calories', 'value' => '420 kcal'],
//         ['recipe_id' => $recipe->id, 'label' => 'Protein', 'value' => '38g'],
//         ['recipe_id' => $recipe->id, 'label' => 'Total Fat', 'value' => '~13g'],
//         ['recipe_id' => $recipe->id, 'label' => 'Carbohydrates', 'value' => '5g'],
//     ]);

//     RecipeTip::insert([
//     [
//         'recipe_id' => $recipe->id,
//         'type' => 'do',
//         'title' => 'Thoroughly Clean Hands and Surfaces',
//         'content' => 'Before and after handling raw chicken, ensure your hands, utensils, and surfaces are clean to prevent cross-contamination.',
//     ],
//     [
//         'recipe_id' => $recipe->id,
//         'type' => 'do',
//         'title' => 'Use Separate Cutting Boards',
//         'content' => 'Dedicate specific cutting boards for raw chicken to avoid the spread of bacteria to other foods.',
//     ],
//     [
//         'recipe_id' => $recipe->id,
//         'type' => 'do',
//         'title' => 'Check Internal Temperature',
//         'content' => 'Ensure the chicken reaches a safe internal temperature of 165°F (74°C).',
//     ],
//     [
//         'recipe_id' => $recipe->id,
//         'type' => 'dont',
//         'title' => 'Thaw Chicken at Room Temperature',
//         'content' => 'Always thaw chicken in the refrigerator to prevent bacterial growth.',
//     ],
//     [
//         'recipe_id' => $recipe->id,
//         'type' => 'dont',
//         'title' => 'Overcrowd the Pan',
//         'content' => 'Leave space between chicken pieces to allow even cooking.',
//     ],
//     ]);

//    Pairing::insert([
//     [
//         'recipe_id' => $recipe->id,
//         'title' => 'Roasted Vegetables',
//         'description' => 'Seasonal roasted vegetables complement the citrus and garlic flavors beautifully.',
//     ],
//     [
//         'recipe_id' => $recipe->id,
//         'title' => 'Herb-infused Quinoa',
//         'description' => 'A wholesome base that absorbs the roasted chicken juices perfectly.',     
//     ],

//     ]);
//     }
// }




