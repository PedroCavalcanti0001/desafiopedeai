<?php

namespace App\Models;

/**
 *
 */
class Recipe implements \JsonSerializable
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $description;
    /**
     * @var
     */
    private $difficulty;
    /**
     * @var
     */
    private $quality;
    /**
     * @var
     */
    private $categories;

    /**
     * @var
     */
    private $steps;

    /**
     * @var
     */
    private $images;


    /**
     * @param $id
     * @param $name
     * @param $description
     * @param $difficulty
     * @param $quality
     * @param $categories
     */
    public function __construct($id, $name, $description, $difficulty, $quality, $categories, $steps, $images)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->difficulty = $difficulty;
        $this->quality = $quality;
        $this->categories = $categories;
        $this->steps = $steps;
        $this->images = $images;
    }

    /**
     * @param $self
     * @param $recipe
     * @return Recipe|null
     */
    public static function deserialize($self, $recipe): ?Recipe
    {
        if ($recipe != null) {
            $steps = array_map(function ($step) {
                return new RecipeStep($step->step, $step->name, $step->description);
            }, $self->steps());
            $categories = array_map(function ($cat) {
                return new RecipeCategory($cat->name, $cat->description);
            }, $self->categories());
            $images = array_map(function ($img) {
                return $img;
            }, $self->images());
            return new Recipe($recipe->id, $recipe->name, $recipe->description, $recipe->difficulty, $recipe->quality, $categories, $steps, $images);
        } else {
            return null;
        }
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
            'difficulty' => $this->getDifficulty(),
            'quality' => $this->getQuality(),
            'categories' => $this->getCategories(),
            'steps' => $this->getSteps(),
            'images' => $this->getImages()
        ];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @param mixed $difficulty
     */
    public function setDifficulty($difficulty): void
    {
        $this->difficulty = $difficulty;
    }

    /**
     * @return mixed
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @param mixed $quality
     */
    public function setQuality($quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }
}
