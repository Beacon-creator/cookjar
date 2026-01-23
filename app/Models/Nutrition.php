<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    protected $table = 'nutritions';
    protected $fillable = ['recipe_id', 'label', 'value'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
