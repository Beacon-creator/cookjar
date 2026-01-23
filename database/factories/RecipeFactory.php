use Illuminate\Support\Str;

public function definition()
{
    $title = $this->faker->sentence(3);

    return [
        'title'       => $title,
        'slug'        => Str::slug($title) . '-' . uniqid(),
        'description' => $this->faker->paragraph(),
        'more_info'   => '30 mins • Easy',
        'image'       => 'recipe1.png',
        'prep_time'   => '30 mins',
        'difficulty'  => 'Easy',
        'serving'     => '4 Serves',
        'is_featured' => false,
    ];
}
