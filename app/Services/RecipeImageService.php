<?php

namespace App\Services;

use App\Repositories\RecipeImageRepository;

/**
 *
 */
class RecipeImageService extends BaseService
{

    public function __construct(RecipeImageRepository $recipeImageRepository)
    {
        parent::setRepository($recipeImageRepository);
    }

}
