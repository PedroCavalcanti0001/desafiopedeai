<?php

namespace App\Models;

class RequestError implements \JsonSerializable
{
    private $code;
    private $message;

    /**
     * @param $code
     * @param $message
     */
    public function __construct($code, $message)
    {
        $this->code = $code;
        $this->message = $message;
    }

    public function jsonSerialize()
    {
        return [
            "code" => $this->getCode(),
            "message" => $this->getMessage()
        ];
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}
