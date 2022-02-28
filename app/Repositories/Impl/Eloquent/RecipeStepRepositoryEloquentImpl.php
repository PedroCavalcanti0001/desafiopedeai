<?php

namespace App\Repositories\Impl\Eloquent;

use App\Models\Dao\RecipeStepDAO;
use App\Repositories\RecipeStepRepository;

class RecipeStepRepositoryEloquentImpl extends BaseEloquent implements RecipeStepRepository
{

    /**
     * @param RecipeStepDAO $recipeStepDAO
     */
    public function __construct(RecipeStepDAO $recipeStepDAO)
    {
        $this->setModel($recipeStepDAO);
    }


    public function get($id)
    {
        return parent::getModel()->all()->where("recipe", $id)->all();
    }

}
