<?php

namespace App\Repositories\Impl\Eloquent;

use App\Models\Dao\RecipeCategoryDAO;
use App\Repositories\RecipeCategoriesRepository;

class RecipeCategoriesRepositoryEloquentImpl extends BaseEloquent implements RecipeCategoriesRepository
{

    /**
     * @param RecipeCategoryDAO $recipeCategoryDAO
     */
    public function __construct(RecipeCategoryDAO $recipeCategoryDAO)
    {
        $this->setModel($recipeCategoryDAO);
    }


    public function get($id)
    {
        return parent::getModel()->all()->where("recipe", $id)->all();
    }

}
