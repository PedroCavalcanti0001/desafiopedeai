<?php

namespace App\Services;

use App\Repositories\RecipeCategoriesRepository;

/**
 *
 */
class RecipeCategoriesService extends BaseService
{

    public function __construct(RecipeCategoriesRepository $recipeCategoriesRepository)
    {
        parent::setRepository($recipeCategoriesRepository);
    }

}
