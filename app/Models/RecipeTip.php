<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeTip extends Model
{
    protected $table = 'recipe_tips';
    protected $fillable = ['title', 'recipe_id', 'type', 'content'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
