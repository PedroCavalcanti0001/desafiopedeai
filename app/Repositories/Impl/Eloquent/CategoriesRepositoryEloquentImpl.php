<?php

namespace App\Repositories\Impl\Eloquent;

use App\Models\Dao\CategoriesDAO;
use App\Repositories\CategoriesRepository;

class CategoriesRepositoryEloquentImpl extends BaseEloquent implements CategoriesRepository
{

    /**
     * @param CategoriesDAO $categoriesDAO
     */
    public function __construct(CategoriesDAO $categoriesDAO)
    {
        $this->setModel($categoriesDAO);
    }


}
