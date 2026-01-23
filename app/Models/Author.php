<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'bio', 'image'];

    public function recipe()
    {
        return $this->hasMany(Recipe::class);
    }
}
