<?php

namespace App\Repositories\Impl\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 *
 */
interface Eloquent
{
    /**
     * @param Model $model
     * @return mixed
     */
    function setModel(Model $model);

    /**
     * @return Model
     */
    function getModel(): Model;
}
