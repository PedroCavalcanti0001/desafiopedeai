<?php

namespace App\Repositories\Impl\Eloquent;

use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 *
 */
abstract class BaseEloquent implements Eloquent, Repository
{

    /**
     * @var Model
     */
    private Model $model;

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->model->find($id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->model->create($request->all());
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request)
    {
        return $this->model->find($id)
            ->update($request->all());
    }

    /**
     * @param $id
     * @return null
     */
    public function destroy($id)
    {
        $find = $this->getModel()->find($id);
        if ($find != null) {
            return $find
                ->delete();
        }
        return null;
    }

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @param Model $model
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
    }
}
