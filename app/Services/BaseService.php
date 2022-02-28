<?php

namespace App\Services;

use App\Repositories\Repository;
use App\Utils\ERequestError;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseService implements Service
{

    private Repository $repository;

    /**
     * @return Repository
     */
    public function getRepository(): Repository
    {
        return $this->repository;
    }

    /**
     * @param Repository $repository
     */
    public function setRepository(Repository $repository): void
    {
        $this->repository = $repository;
    }


    public function getAll()
    {
        $recipes = $this->repository->getAll();
        return response()->json($recipes, Response::HTTP_OK);
    }

    public function get($id)
    {
        try {
            $recipe = $this->repository->get($id);
            if ($recipe != null) {
                return response()->json($recipe, Response::HTTP_OK);
            } else {
                return response()->json(ERequestError::NO_DATA(), Response::HTTP_OK);
            }
        } catch (QueryException $exception) {
            return Response()->Json(ERequestError::DB_CONNECTION(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    function store(Request $request)
    {
        try {
            $store = $this->repository->store($request);
            return response()->json($store, Response::HTTP_CREATED);
        } catch (QueryException $exception) {
            return Response()->Json(ERequestError::DB_CONNECTION(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    function update($id, Request $request)
    {
        try {
            $update = $this->repository->update($id, $request);
            return response()->json($update, Response::HTTP_CREATED);
        } catch (QueryException $exception) {
            return Response()->Json(ERequestError::DB_CONNECTION(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    function destroy($id)
    {
        try {
            $destroy = $this->repository->destroy($id);
            if ($destroy != null) {
                return response()->json(null, Response::HTTP_OK);
            } else {
                return response()->json(ERequestError::NO_DATA(), Response::HTTP_OK);
            }
        } catch (QueryException $exception) {
            return Response()->Json(ERequestError::DB_CONNECTION(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
