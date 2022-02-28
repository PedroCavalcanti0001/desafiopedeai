<?php

namespace App\Services;

use App\Repositories\CategoriesRepository;

class CategoriesService extends BaseService
{
    /**
     * @param $categoriesRepository
     */
    public function __construct(CategoriesRepository $categoriesRepository)
    {
        parent::setRepository($categoriesRepository);
    }
}
