<?php

namespace App\Http\Controllers;

use App\Services\CategoriesService;

class CategoriesController extends Controller
{

    private CategoriesService $categoriesService;

    /**
     * @param CategoriesService $categoriesService
     */
    public function __construct(CategoriesService $categoriesService)
    {
        parent::setService($categoriesService);
    }


}
