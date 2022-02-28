<?php

namespace App\Repositories\Impl\Eloquent;

use App\Models\Dao\RecipeImageDAO;
use App\Repositories\RecipeImageRepository;

class RecipeImageRepositoryEloquentImpl extends BaseEloquent implements RecipeImageRepository
{

    /**
     * @param RecipeImageDAO $recipeStepDAO
     */
    public function __construct(RecipeImageDAO $recipeStepDAO)
    {
        $this->setModel($recipeStepDAO);
    }

    public function get($id)
    {
        return parent::getModel()->all()->where("recipe", $id)->all();
    }

}
