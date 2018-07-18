<?php

namespace Entity;

class Category
{
    const TABLE_NAME = 'Category';

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    static public function createFromArray(array $array)
    {
        /** @var \ReflectionClass $refl */
        $refl = new \ReflectionClass(self::class);
        $category = new self();
        foreach ($array as $key => $value) {
            $set = 'set' . ucfirst($key);
            if ($refl->hasMethod($set)) {
                $category->$set($value);
            }
        }

        return $category;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Category
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}