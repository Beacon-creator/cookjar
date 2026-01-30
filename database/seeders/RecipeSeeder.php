<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Recipe;
use App\Models\RecipeStep;
use App\Models\Ingredient;
use App\Models\Equipment;
use App\Models\Nutrition;
use App\Models\RecipeTip;
use App\Models\Pairing;
use App\Models\Author;


class RecipeSeeder extends Seeder
{
 
    public function run(): void
    {
    
    $authors = Author::updateOrCreate([
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
        'body' => 'Comfort food at its finest, this rich and creamy chocolate
             mousse is a true indulgence best eaten with a dollop of whipped cream. It is a dessert that
              transcends sweetness, offering a harmonious blend of deep cocoa flavors and a light, airy texture
               that melts in your mouth. Whether you\'re celebrating a special occasion or simply craving a
                moment of pure bliss, our chocolate mousse promises to satisfy your sweet tooth and elevate your dessert
                 experience to new heights. Join us as we explore the art of crafting this exquisite treat,
                  where every spoonful is a journey into the heart of chocolate decadence.',
        'more_info' => '30 MINS • MEDIUM PREP • 4 SERVES',
        'image' => 'chocolate-mousse.png',
        'is_featured' => true,
        'slug' => 'decadent-chocolate-mousse',
    ],
    [
        'title' => 'Brocolli with Honey Glaze',
        'description' => 'Perfectly grilled brocolli with honey glaze.',
        'body' => 'Healthy and flavorful meal that is both satisfying and nutritious. 
            The tender-crisp broccoli florets are coated in a luscious honey glaze, 
            creating a delightful balance of sweetness and savory goodness. 
            This dish is not only a feast for the taste buds but also a vibrant addition 
            to your dining table. Whether served as a side or a main course, our Broccoli 
            with Honey Glaze promises to elevate your culinary experience with its irresistible flavors and wholesome ingredients.',
        'more_info' => '25 MINS • MEDIUM PREP • 3 SERVES',
        'image' => 'brocolli-meal.png',
        'is_featured' => true,
        'slug' => 'brocolli-with-honey-glaze',
    ],

    [
        'title' => 'Berry Bliss Smoothie Bowl',
        'description' => 'This berry smoothie bowl is not only 
            visually appealing but also a powerhouse of antioxidants.',
        'body' => 'A healthy start to your day. Packed with fresh berries, 
            this smoothie bowl is a vibrant blend of natural sweetness and refreshing flavors. 
            Topped with granola and coconut flakes, it provides a satisfying and nutritious 
            breakfast that energizes your morning.',
        'more_info' => '15 MINS • EASY PREP • 2 SERVES',
        'image' => 'berry-bliss.png',
        'is_featured' => true,
        'slug' => 'berry-bliss-smoothie-bowl',
    ],

    [
        'title' => 'Spagetti Aglio e Olio',
        'description' => 'A minimalist yet flavorful dish with garlic, 
            olive oil, and a hint of red pepper flakes.',
        'body' => 'Simple yet delicious. This classic Italian dish is a celebration of the 
        marriage between pasta and olive oil, enhanced with 
        the warmth of garlic and a gentle kick of red pepper flakes.',
        'more_info' => '20 MINS • EASY PREP • 4 SERVES',
        'image' => 'spag-aglio.png',
        'is_featured' => true,
        'slug' => 'spagetti-aglio-e-olio',
    ],

    [
        'title' => 'Grilled Veggies with Sauce',
        'description' => 'Served with a zesty chimichurri 
            sauce its a perfect addition to your outdoor gatherings.',
        'body' => 'Perfect for summer barbecues. The grilled vegetables are seasoned
             with a zesty chimichurri sauce that adds a burst of fresh
             herbs and tangy flavors to each bite.',
        'more_info' => '30 MINS • MEDIUM PREP • 3 SERVES',
        'image' => 'grilled-veg.png',
        'is_featured' => true,
        'slug' => 'grilled-veggies-with-sauce',
    ]
];

foreach ($recipes as $data) {
   $recipeInstance = Recipe::updateOrCreate(
    ['slug' => $data['slug']],   // lookup condition (UNIQUE)
    [
        'title' => $data['title'],
        'description' => $data['description'],
        'body' => $data['body'],
        'more_info' => $data['more_info'],
        'image' => $data['image'],
        'is_featured' => $data['is_featured'],
        'author_id' => $authors->id,
    ]
);


    if ($recipeInstance->slug === 'savory-herb-infused-chicken') {
        Ingredient::where('recipe_id', $recipeInstance->id)->delete();
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Whole chicken', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Lemon', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Garlic cloves', 'quantity' => '4'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Fresh herbs', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '3 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
        ]);

        Equipment::where('recipe_id', $recipeInstance->id)->delete();
        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Roasting pan'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Meat thermometer'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Basting brush'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Kitchen twine'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Cutting board'],
        ]);

        Nutrition::where('recipe_id', $recipeInstance->id)->delete();
        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '450 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '40g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~15g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '4g'],
        ]);

        RecipeStep::where('recipe_id', $recipeInstance->id)->delete();
        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'PREHEAT AND PREPARE',
                'instruction' => 'Pat the chicken dry and season generously.',
                'image' => 'step1.png',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'ROAST TO PERFECTION',
                'instruction' => 'Roast at 190°C until golden brown.',
                'image' => 'step2.png',
            ],
        ]);

        RecipeTip::where('recipe_id', $recipeInstance->id)->delete();
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

        Pairing::where('recipe_id', $recipeInstance->id)->delete();
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
        Ingredient::where('recipe_id', $recipeInstance->id)->delete();
        Ingredient::insert([
                ['recipe_id' => $recipeInstance->id, 'name' => 'Dark chocolate', 'quantity' => '200g'],
                ['recipe_id' => $recipeInstance->id, 'name' => 'Heavy cream', 'quantity' => '1 cup'],
                ['recipe_id' => $recipeInstance->id, 'name' => 'Sugar', 'quantity' => '2 tbsp'],
                ['recipe_id' => $recipeInstance->id, 'name' => 'Vanilla extract', 'quantity' => '1 tsp'],
                ['recipe_id' => $recipeInstance->id, 'name' => 'Egg whites', 'quantity' => '3'],
            ]);

        Equipment::where('recipe_id', $recipeInstance->id)->delete();
        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Mixing bowls'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Whisk or electric mixer'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Spatula'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Refrigerator-safe serving dishes'],
        ]);

        Nutrition::where('recipe_id', $recipeInstance->id)->delete();
        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '350 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '6g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Fat', 'value' => '20g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '40g'],
        ]);

        RecipeStep::where('recipe_id', $recipeInstance->id)->delete();
        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'MELT THE CHOCOLATE',
                'instruction' => 'Gently melt the dark chocolate over a double boiler.',
                'image' => 'mousse-step1.jpg',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'WHIP THE CREAM',
                'instruction' => 'In a separate bowl, whip the heavy cream until soft peaks form.',
                'image' => 'mousse-step2.jpg',
            ],
        ]);

        RecipeTip::where('recipe_id', $recipeInstance->id)->delete();
        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Use High-Quality Chocolate',
            'content' => 'Opt for dark chocolate with at least 70% cocoa for a richer flavor.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Chill Before Serving',
            'content' => 'Allow the mousse to chill in the refrigerator for at least 2 hours for the best texture.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overbeat the Cream',
            'content' => 'Stop whipping the cream as soon as soft peaks form to avoid turning it into butter.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Skip the Cooling Step',
            'content' => 'Serving the mousse immediately will result in a runny texture.',
        ],
        ]);

        Pairing::where('recipe_id', $recipeInstance->id)->delete();
        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Fresh Berries',
            'description' => 'The tartness of fresh berries balances the richness of the mousse.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Espresso',
            'description' => 'A shot of espresso enhances the chocolate flavor and provides a delightful contrast.',     
        ],
        ]);

    }

    if ($recipeInstance->slug === 'brocolli-with-honey-glaze') {
        Ingredient::where('recipe_id', $recipeInstance->id)->delete();
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Broccoli florets', 'quantity' => '400g'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Honey', 'quantity' => '3 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Soy sauce', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Olive oil', 'quantity' => '2 tbsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Garlic powder', 'quantity' => '1 tsp'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Salt', 'quantity' => 'Some'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Black pepper', 'quantity' => 'Some'],
        ]);

        Equipment::where('recipe_id', $recipeInstance->id)->delete();
        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Grill pan or outdoor grill'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Mixing bowl'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Tongs'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Basting brush'],
        ]);

        Nutrition::where('recipe_id', $recipeInstance->id)->delete();
        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '180 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '5g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~7g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '25g'],
        ]);

        RecipeStep::where('recipe_id', $recipeInstance->id)->delete();
        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'PREPARE THE GLAZE',
                'instruction' => 'Mix honey, soy sauce, olive oil, garlic powder, salt, and pepper in a bowl.',
                'image' => 'brocolli-step1.jpg',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'GRILL THE BROCCOLI',
                'instruction' => 'Grill broccoli florets, basting with honey glaze until tender and slightly charred.',
                'image' => 'brocolli-step2.jpg',
            ],
        ]);

        RecipeTip::where('recipe_id', $recipeInstance->id)->delete();
        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Preheat the Grill',
            'content' => 'Ensure your grill is hot before placing the broccoli to achieve a nice char.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Use Fresh Broccoli',
            'content' => 'Fresh broccoli will yield the best flavor and texture for grilling.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overcook the Broccoli',
            'content' => 'Grill just until tender to maintain a slight crunch and vibrant color.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Skip Basting',
            'content' => 'Regularly baste the broccoli with the honey glaze to enhance flavor.',
        ],
        ]); 

        Pairing::where('recipe_id', $recipeInstance->id)->delete();
        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Quinoa Salad',
            'description' => 'A light quinoa salad with lemon vinaigrette complements the sweetness of the honey-glazed broccoli.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Grilled Chicken',
            'description' => 'Juicy grilled chicken pairs perfectly with the flavorful broccoli.',     
        ],
        ]); 

    }

    if ($recipeInstance->slug === 'berry-bliss-smoothie-bowl') {
        Ingredient::where('recipe_id', $recipeInstance->id)->delete();
        Ingredient::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Mixed berries', 'quantity' => '1 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Banana', 'quantity' => '1'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Greek yogurt', 'quantity' => '1/2 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Almond milk', 'quantity' => '1/2 cup'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Honey', 'quantity' => '1 tbsp'],
        ]);

        Equipment::where('recipe_id', $recipeInstance->id)->delete();
        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Blender'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Bowls'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Spoon'],
        ]);

        Nutrition::where('recipe_id', $recipeInstance->id)->delete();
        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '250 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '8g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~5g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '45g'],
        ]); 

        RecipeStep::where('recipe_id', $recipeInstance->id)->delete();
        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'BLEND THE INGREDIENTS',
                'instruction' => 'Combine mixed berries, banana, Greek yogurt, almond milk, and honey in a blender until smooth.',
                'image' => 'smoothie-step1.jpg',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'SERVE AND TOP',
                'instruction' => 'Pour the smoothie into bowls and top with granola, coconut flakes , and fresh berries.',
                'image' => 'smoothie-step2.jpg',
            ],
        ]); 

        RecipeTip::where('recipe_id', $recipeInstance->id)->delete();
        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Use Frozen Berries',
            'content' => 'Using frozen berries helps achieve a thicker consistency without needing ice.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Add Protein Boosters',
            'content' => 'Consider adding a scoop of protein powder or a spoonful of nut butter for extra nutrition.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overfill the Blender',
            'content' => 'Leave some space in the blender to ensure smooth blending without spills.',
        ],  
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Skip the Toppings',
            'content' => 'Toppings add texture and additional flavors, enhancing the overall experience.',
        ],
        ]);

        Pairing::where('recipe_id', $recipeInstance->id)->delete();
        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Herbal Tea',
            'description' => 'A light herbal tea complements the fruity flavors of the smoothie bowl.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Whole Grain Toast',
            'description' => 'A slice of whole grain toast with almond butter adds a satisfying crunch.',     
        ],
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

        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Large pot'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Skillet'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Tongs'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Colander'],
        ]);

        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '400 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '12g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~14g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '60g'],
        ]);

        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'COOK THE SPAGHETTI',
                'instruction' => 'Boil spaghetti in salted water until al dente.',
                'image' => 'spag-step1.jpg',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'SAUTÉ THE GARLIC',
                'instruction' => 'In a skillet, heat olive oil and sauté garlic until golden.',
                'image' => 'spag-step2.jpg',
            ],
        ]);

        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Use Fresh Garlic',
            'content' => 'Fresh garlic provides a more robust flavor compared to pre-minced options.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Reserve Pasta Water',
            'content' => 'Save a cup of pasta water to adjust the sauce consistency if needed.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Burn the Garlic',
            'content' => 'Keep an eye on the garlic while sautéing to prevent it from burning and turning bitter.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overcook the Pasta',
            'content' => 'Cook the spaghetti until just al dente for the best texture.',
        ],
        ]);

        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Caesar Salad',
            'description' => 'A crisp Caesar salad provides a refreshing contrast to the rich pasta.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Garlic Bread',
            'description' => 'Buttery garlic bread complements the flavors of the spaghetti aglio e olio.',     
        ],
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

        Equipment::insert([
            ['recipe_id' => $recipeInstance->id, 'name' => 'Grill or grill pan'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Tongs'],
            ['recipe_id' => $recipeInstance->id, 'name' => 'Mixing bowl'],
        ]);

        Nutrition::insert([
            ['recipe_id' => $recipeInstance->id, 'label' => 'Calories', 'value' => '220 kcal'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Protein', 'value' => '6g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Total Fat', 'value' => '~10g'],
            ['recipe_id' => $recipeInstance->id, 'label' => 'Carbohydrates', 'value' => '30g'],
        ]);

        RecipeStep::insert([
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 1,
                'title' => 'PREPARE THE VEGETABLES',
                'instruction' => 'Toss vegetables with olive oil, salt, and pepper.',
                'image' => 'veg-step1.jpg',
            ],
            [
                'recipe_id' => $recipeInstance->id,
                'step_number' => 2,
                'title' => 'GRILL THE VEGETABLES',
                'instruction' => 'Grill vegetables until tender and slightly charred, then serve with chimichurri sauce.',
                'image' => 'veg-step2.jpg',
            ],
        ]);

        RecipeTip::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Preheat the Grill',
            'content' => 'Ensure your grill is hot before placing the vegetables to achieve a nice char.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'do',
            'title' => 'Cut Vegetables Evenly',
            'content' => 'Uniformly cut vegetables ensure even cooking on the grill.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Overcrowd the Grill',
            'content' => 'Leave space between vegetables to allow for proper grilling and charring.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'type' => 'dont',
            'title' => 'Forget to Baste',
            'content' => 'Regularly baste the vegetables with olive oil to enhance flavor and prevent drying out.',
        ],
        ]);

        Pairing::insert([
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Grilled Chicken',
            'description' => 'Juicy grilled chicken pairs perfectly with the flavorful grilled vegetables.',
        ],
        [
            'recipe_id' => $recipeInstance->id,
            'title' => 'Quinoa Salad',
            'description' => 'A light quinoa salad with lemon vinaigrette complements the grilled vegetables.',     
        ],
        ]);
    }}

}}

