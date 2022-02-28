<?php

namespace App\Repositories;

use Illuminate\Http\Request;

/**
 *
 */
interface Repository
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request);

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id, Request $request);

    /**
     * @param $id
     * @return mixed
     */
    public function destroy($id);
}
