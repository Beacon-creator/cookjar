<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'title',
        'description',
        'more_info',
        'image',
        'prep_time',
        'difficulty',
        'servings',
        'is_featured',
        'author_id',
    ];

    /* --------------------
     | Relationships
     |--------------------*/

    public function steps()
    {
        return $this->hasMany(RecipeStep::class)->orderBy('step_number');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class);
    }

    public function nutritions()
    {
        return $this->hasMany(Nutrition::class);
    }

    public function tips()
    {
        return $this->hasMany(RecipeTip::class);
    }

    public function pairings()
    {
        return $this->hasMany(Pairing::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
