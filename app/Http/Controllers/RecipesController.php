<?php

namespace App\Http\Controllers;

use App\Services\RecipeService;

/**
 *
 */
class RecipesController extends Controller
{
    /**
     * @var RecipeService
     */
    private RecipeService $recipeService;

    /**
     * @param RecipeService $recipeService
     */
    public function __construct(RecipeService $recipeService)
    {
        parent::setService($recipeService);
    }


}
