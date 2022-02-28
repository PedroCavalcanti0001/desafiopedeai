<?php

namespace App\Services;

use App\Repositories\Repository;
use Illuminate\Http\Request;

interface Service
{
    function getAll();

    function get($id);

    function store(Request $request);

    function update($id, Request $request);

    function destroy($id);

    function setRepository(Repository $repository);
}
