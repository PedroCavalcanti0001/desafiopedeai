<?php

namespace App\Models\Dao;

use Illuminate\Database\Eloquent\Model;

class RecipeCategoryDAO extends Model
{

    public $timestamps = false;
    protected $table = 'recipes_categories';

    /*
    public function details(){
        return $this->hasOne(CategoriesDAO::class, 'id', 'category');
    }
    */
    protected $fillable = [
        'recipe',
        'category',
    ];

}
