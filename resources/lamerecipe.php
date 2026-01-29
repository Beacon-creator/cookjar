
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;
use App\Models\Author;
use App\Models\Ingredient;
use App\Models\Equipment;
use App\Models\Nutrition;
use App\Models\RecipeStep;
use App\Models\RecipeTip;
use App\Models\Pairing;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        // Create a default author
        $author = Author::updateOrCreate([
            'name' => 'Chef',
            'bio'  => 'Professional home chef and food blogger.',
            'image'=> 'author.png',
        ]);

        // Create 6 recipes using factory
        Recipe::factory(6)->create([
            'author_id' => $author->id,
        ])->each(function($recipe) {
            // Seed ingredients
            Ingredient::insert([
                ['recipe_id' => $recipe->id, 'name' => 'Ingredient 1', 'quantity' => '1'],
                ['recipe_id' => $recipe->id, 'name' => 'Ingredient 2', 'quantity' => '2'],
            ]);

            // Seed equipment
            Equipment::insert([
                ['recipe_id' => $recipe->id, 'name' => 'Pan'],
                ['recipe_id' => $recipe->id, 'name' => 'Oven'],
            ]);

            // Seed nutrition
            Nutrition::insert([
                ['recipe_id' => $recipe->id, 'label' => 'Calories', 'value' => '250 kcal'],
                ['recipe_id' => $recipe->id, 'label' => 'Protein', 'value' => '15g'],
            ]);

            // Seed recipe steps
            RecipeStep::insert([
                ['recipe_id' => $recipe->id, 'title' => 'Step 1', 'instruction' => 'Do something.', 'image' => 'step1.png'],
                ['recipe_id' => $recipe->id, 'title' => 'Step 2', 'instruction' => 'Do something else.', 'image' => 'step2.png'],
            ]);

            // Seed tips
            RecipeTip::insert([
                ['recipe_id' => $recipe->id, 'type' => 'do', 'title' => 'Tip 1', 'content' => 'Do this.'],
                ['recipe_id' => $recipe->id, 'type' => 'dont', 'title' => 'Tip 2', 'content' => 'Don’t do that.'],
            ]);

            // Seed pairings
            Pairing::insert([
                ['recipe_id' => $recipe->id, 'title' => 'Side Dish', 'description' => 'This goes well.'],
            ]);
        });
    }
}
