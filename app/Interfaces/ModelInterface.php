<?php

namespace App\Interfaces;

interface ModelInterface
{

    /**
     * @return string
     */
    public function getRouteKeyName();

    /**
     * @param array $values
     */
    public static function make(array $values);

    /**
     * @param array $values
     */
    public function updateModel(array $values);

    /**
     * @return boolean
     */
    public function remove();
}
