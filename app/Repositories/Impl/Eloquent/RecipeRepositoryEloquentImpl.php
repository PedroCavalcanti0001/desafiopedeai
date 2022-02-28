<?php

namespace App\Repositories\Impl\Eloquent;

use App\Models\Dao\RecipeDAO;
use App\Models\Recipe;
use App\Repositories\RecipeRepository;
use Illuminate\Http\Request;

/**
 *
 */
class RecipeRepositoryEloquentImpl extends BaseEloquent implements RecipeRepository
{

    /**
     * @param $recipeDAO
     */
    public function __construct(RecipeDAO $recipeDAO)
    {
        $this->setModel($recipeDAO);
    }

    /**
     * @return Recipe[]|array|\Illuminate\Database\Eloquent\Collection|null[]
     */
    public function getAll()
    {
        return array_map(
            function ($rcp) {
                return Recipe::deserialize($this->getModel(), $rcp);
            },
            $this->getModel()->all()->all()
        );
    }

    /**
     * @param $id
     * @return Recipe|mixed|null
     */
    public function get($id)
    {
        return Recipe::deserialize($this->getModel(), $this->getModel()->find($id));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->getModel()->create($request->all());
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request)
    {
        return $this->getModel()->find($id)
            ->update($request->all());
    }


}
