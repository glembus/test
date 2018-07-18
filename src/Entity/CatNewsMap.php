<?php

namespace Entity;

/**
 * Many to Many mapping between News and Categories
 * Unique constrain by newsId, categoryId
 * @package Entity
 */
class CatNewsMap
{
    const TABLE_NAME = 'Cat_News_Map';

    /**
     * @var int
     */
    private $newsId;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @return int
     */
    public function getNewsId()
    {
        return $this->newsId;
    }

    /**
     * @param int $newsId
     *
     * @return CatNewsMap
     */
    public function setNewsId($newsId)
    {
        $this->newsId = $newsId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     *
     * @return CatNewsMap
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }
}