<?php

namespace App\Models\Dao;

use Illuminate\Database\Eloquent\Model;

class CategoriesDAO extends Model
{

    public $timestamps = false;
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'description',
    ];

}
