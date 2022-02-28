<?php

namespace App\Http\Controllers;

use App\Services\RecipeStepService;

/**
 *
 */
class RecipeStepController extends Controller
{

    /**
     * @param RecipeStepService $recipeStepService
     */
    public function __construct(RecipeStepService $recipeStepService)
    {
        parent::setService($recipeStepService);
    }


    public function get($id)
    {
        return parent::get($id); // TODO: Change the autogenerated stub
    }

}