<?php

namespace App\Http\Controllers;

use App\Services\RecipeCategoriesService;
use App\Services\RecipeService;

class RecipesCategoriesController extends Controller
{
    private RecipeCategoriesService $recipeService;

    /**
     * @param RecipeService $recipeCategoriesService
     */
    public function __construct(RecipeCategoriesService $recipeCategoriesService)
    {
        parent::setService($recipeCategoriesService);
    }
}
