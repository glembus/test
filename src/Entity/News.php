<?php

namespace Entity;

class News extends AbstractEntity
{
    const TABLE_NAME = 'News';

    const STATUS_NOT_PUBLISHED = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_DELETED = 2;

    /**
     * @var int
     * Field Nws_Id
     * Type INT
     * Primary Key
     * Autoincrement
     */
    private $id;

    /**
     * @var string
     * Field Nws_Title
     * Type STRING
     * Length 255
     */
    private $title;

    /**
     * @var string
     * Field Nws_Content
     * Type TEXT
     * Nullable TRUE
     */
    private $content;

    /**
     * @var int
     * Field Nws_Status
     * Type SMALLINT
     * DEFAULT 0
     */
    private $status;

    /**
     * @var array
     */
    private $categories;


    public function __construct()
    {
        $this->status = 0;
    }

    /**
     * @return string
     */
    public function getTableName()
    {
        return self::TABLE_NAME;
    }

    public function hasForeignConstrain()
    {
        return false;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return News
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return News
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     *
     * @return News
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public

    public function addCategory()
}