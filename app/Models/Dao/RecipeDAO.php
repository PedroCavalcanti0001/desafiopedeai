<?php

namespace App\Models\Dao;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RecipeDAO extends Model
{

    public $timestamps = false;
    protected $table = 'recipes';
    protected $fillable = [
        'id',
        'name',
        'description',
        'difficulty',
        'quality'
    ];

    public function categories()
    {
        return DB::table("recipes")
            ->join("recipes_categories", "recipes.id", "recipes_categories.recipe")
            ->join("categories", "categories.id", "recipes_categories.category")
            ->select("categories.*")
            ->get()
            ->all();
    }

    public function steps()
    {
        return DB::table("recipes")
            ->join("recipes_steps", "recipes.id", "recipes_steps.recipe")
            ->select("recipes_steps.*")
            ->get()
            ->all();
    }

    public function images()
    {
        return array_map(function ($dat) {
            $img = base64_encode($dat->image);
            return $img;
        },
            DB::table("recipes")
                ->join("recipes_images", "recipes.id", "recipes_images.recipe")
                ->select("recipes_images.image")
                ->get()
                ->all());
    }


}
