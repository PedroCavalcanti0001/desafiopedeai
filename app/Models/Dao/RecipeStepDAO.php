<?php

namespace App\Models\Dao;

use Illuminate\Database\Eloquent\Model;

class RecipeStepDAO extends Model
{

    public $timestamps = false;
    protected $table = 'recipes_steps';
    protected $fillable = [
        'step',
        'name',
        'description',
        'recipe'
    ];

}
