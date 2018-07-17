<?php

namespace Entity;

class Category implements EntityInterface
{
    const TABLE_NAME = 'Category';

    /**
     * @var int
     * Field Cat_Id
     * Type INT
     * Primary Key
     * Autoincrement
     */
    private $id;

    /**
     * @var string
     * Field Cat_Name
     * Type STRING
     * Length 255
     */
    private $name;

    /**
     * @param array $array
     *
     * @return Category
     * @throws \ReflectionException
     */
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
     * @return string
     */
    public function getTableName()
    {
        return self::TABLE_NAME;
    }

    /**
     * @return bool
     */
    public function hasForeignConstrain()
    {
        return false;
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
     * @return string|null
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