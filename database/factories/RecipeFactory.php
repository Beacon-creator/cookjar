<?php

namespace Database\Factories;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
   protected $model = Recipe::class;

    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(3);

        return [
            'title'       => $title,
            'slug'        => Str::slug($title),
            'description' => $this->faker->sentence(8),
            'body'        => $this->faker->paragraphs(3, true),
            'more_info'   => $this->faker->randomElement([
                '15 MINS • EASY • 2 SERVES',
                '30 MINS • EASY • 3 SERVES',
                '45 MINS • MEDIUM • 4 SERVES',
            ]),
            'image'       => 'recipe' . $this->faker->numberBetween(1, 6) . '.png',
            'is_featured' => $this->faker->boolean(30),
            'author_id'   => 1,
        ];
    }
}