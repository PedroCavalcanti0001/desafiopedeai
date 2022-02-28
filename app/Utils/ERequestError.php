<?php

namespace App\Utils;

use App\Models\RequestError;

class ERequestError
{
    public static function NO_DATA(): RequestError
    {
        return new RequestError(1, "Nenhum dado encontrado!");
    }

    public static function DB_CONNECTION(): RequestError
    {
        return new RequestError(2, "Não foi possivel se conectar com o banco de dados!");
    }
}
