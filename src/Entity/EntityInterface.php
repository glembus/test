<?php

namespace Entity;

interface EntityInterface
{
    /**
     * @return string
     */
    public function getTableName();

    /**
     * @return array
     */
    public function getForeignConstrain();

    /**
     * @return bool
     */
    public function hasForeignConstrain();

    /**
     * @param array $array
     *
     * @return mixed
     */
    static public function createFromArray(array $array);
}