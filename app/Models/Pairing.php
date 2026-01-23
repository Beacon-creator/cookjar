<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pairing extends Model
{
    protected $table = 'pairings';
    protected $fillable = ['recipe_id', 'title', 'description'];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
