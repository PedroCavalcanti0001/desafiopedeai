<?php

namespace App\Models;

use JsonSerializable;

/**
 *
 */
class RecipeCategory implements JsonSerializable
{
    /**
     * @var String
     */
    private string $name;
    /**
     * @var String
     */
    private string $description;

    /**
     * @param String $name
     * @param String $description
     */
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @return String[]
     */
    public function jsonSerialize()
    {
        return [
            'Name' => $this->getName(),
            'description' => $this->getDescription(),
        ];
    }

    /**
     * @return String
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return String
     */
    public function getDescription(): string
    {
        return $this->description;
    }
}
