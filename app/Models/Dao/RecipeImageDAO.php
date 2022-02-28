<?php

namespace App\Models\Dao;

use Illuminate\Database\Eloquent\Model;

class RecipeImageDAO extends Model
{

    public $timestamps = false;
    protected $table = 'recipes_images';
    protected $fillable = [
        'recipe',
        'image'
    ];

}
