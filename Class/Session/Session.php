<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 11:28
 */

class Session
{
    public $attribut = [];
    /**
     * @return array
     */
    function add ($key, $value)
    {
        $this->attribut[$key] = $value;
    }

    function update($key, $value)
    {
        $this->attribut[$key] = $value;
    }

    function __set($name, $value)
    {
        $this->add($name,$value);
    }

    function __get($name)
    {
       echo $this->attribut[$name];
    }

    public function getAttribut()
    {
        return $this->attribut;
    }
}