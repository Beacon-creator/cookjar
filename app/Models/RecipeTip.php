<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeTip extends Model
{
    protected $fillable = ['recipe_id', 'type', 'content'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
