use Illuminate\Support\Facades\Date;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

public function definition(): array
{
    $title = $this->faker->unique()->sentence(3);

    return [
        'title'       => $title,
        'slug'        => Str::slug($title),
        'description' => $this->faker->paragraph(),
        'body'        => $this->faker->paragraphs(4, true),
        'more_info'   => '30 MINS • EASY • 3 SERVES',
        'image'       => 'recipe1.png',
        'prep_time'   => '30 mins',
        'difficulty'  => 'Easy',
        'serving'     => '4 Serves',
        'is_featured' => $this->faker->boolean(30),
        'author_id'   => 1,
    ];
}
