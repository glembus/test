<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.07.2018
 * Time: 0:51
 */

namespace Entity;


abstract class AbstractEntity implements EntityInterface
{
    abstract public function hasForeignConstrain();

    public function getForeignConstrain()
    {
        return [];
    }
}