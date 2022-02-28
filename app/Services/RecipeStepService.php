<?php

namespace App\Services;

use App\Repositories\RecipeStepRepository;

/**
 *
 */
class RecipeStepService extends BaseService
{

    public function __construct(RecipeStepRepository $recipeStepRepository)
    {
        parent::setRepository($recipeStepRepository);
    }

}
