<?php

namespace App\Services;

use App\Repositories\RecipeRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class RecipeService extends BaseService
{

    public function __construct(RecipeRepository $recipeRepository)
    {
        parent::setRepository($recipeRepository);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required | max:255',
                'description' => 'required',
                'difficulty' => 'required | numeric | max:5 | min:0',
                'quality' => 'required | numeric |max:5 | min:0',
            ]
        );
        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
        } else {
            return parent::store($request);
        }
    }

}
