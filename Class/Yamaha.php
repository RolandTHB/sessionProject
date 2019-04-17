<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 16/04/2019
 * Time: 12:01
 */
class Yamaha extends Moto implements YamahaInterface
{
    protected $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai=$isKawai;
    }

    // __set
    public function __set($name, $value)
    {
        echo"L'attribut n'existe pas ou est privé";
    }
    // __get
    public function __get($name)
    {
        echo"impossible d'afficher la valeur.$name";
    }

    public function getisKawai()
    {
    }

    public function setisKawai()
    {
    }
}