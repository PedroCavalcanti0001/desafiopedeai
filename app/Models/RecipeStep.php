<?php

namespace App\Models;

use JsonSerializable;

class RecipeStep implements JsonSerializable
{
    private int $step;
    private string $name;
    private string $description;

    /**
     * @param int $step
     * @param String $name
     * @param String $description
     */
    public function __construct(int $step, string $name, string $description)
    {
        $this->step = $step;
        $this->name = $name;
        $this->description = $description;
    }

    public function jsonSerialize()
    {
        return [
            "step" => $this->getStep(),
            "name" => $this->getName(),
            "description" => $this->getDescription()
        ];
    }

    /**
     * @return int
     */
    public function getStep(): int
    {
        return $this->step;
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
