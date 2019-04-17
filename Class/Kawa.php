<?php

class Kawa extends Moto implements kawaInterface
{
    private $isKawai;

    public function __construct($marque, $model, $prix, $topCase, $isKawai)
    {
        parent::__construct($marque, $model, $prix, $topCase);
        $this->isKawai= $isKawai;
    }

    // __set
    public function __set($name, $value)
    {
        echo"L'attribut n'existe pas ou est privé";
    }
    // __get
    public function __get($name)
    {
        echo"impossible d'afficher la valeur. $name";
    }

    /**
     * @return mixed
     */
    public function getisKawai()
    {
        return $this->isKawai;
    }

    /**
     * @param mixed $isKawai
     */
    public function setIsKawai($isKawai)
    {
        $this->isKawai = $isKawai;
    }


}
