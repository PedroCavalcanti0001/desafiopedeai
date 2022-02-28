<?php

namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{

    private Service $service;


    /**
     * @param Service $service
     */
    public function setService(Service $service): void
    {
        $this->service = $service;
    }


    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        return $this->service->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return $this->service->get($id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request)
    {
        return $this->service->update($id, $request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id)
    {
        return $this->service->destroy($id);
    }

}
