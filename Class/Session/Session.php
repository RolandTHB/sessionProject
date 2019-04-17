<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 11:28
 */

class Session {
    private $attributs = [];
    public function add($key, $valeur){
    }
    public function update($key, $valeur){
    }
    public function exist($key){
    }
    public function remove($key){
    }
    public function __set($name, $value)
    {
        $this->attributs[$name] = $value;
    }
    public function __get($name)
    {
        return $this->attributs[$name];
    }
    public function __isset($name)
    {
        return isset($this->attributs[$name]);
    }
    public function __unset($name)
    {
        unset($this->attributs[$name]);
    }
}