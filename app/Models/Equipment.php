<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = ['recipe_id', 'name'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}

