<?php

namespace Entity;

/**
 * Many to Many mapping between News and Categories
 * Unique constrain by Cnm_Nws_Id, Cnm_Cat_Id
 * @package Entity
 */
class CatNewsMap extends AbstractEntity
{
    const TABLE_NAME = 'Cat_News_Map';

    /**
     * @var int
     * Field Cnm_Id
     * Primary Key
     */
    private $id;

    /**
     * @var int
     * Field Cnm_Nws_Id
     */
    private $news;

    /**
     * @var int
     * Field Cnm_Cat_Id
     */
    private $category;

    public function getForeignConstrain()
    {
        return parent::getForeignConstrain(); // TODO: Change the autogenerated stub
    }

    public function hasForeignConstrain()
    {
        return true;
    }

    public static function createFromArray(array $array)
    {

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
     * @return CatNewsMap
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * @param int $news
     *
     * @return CatNewsMap
     */
    public function setNews($news)
    {
        $this->news = $news;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     *
     * @return CatNewsMap
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
}