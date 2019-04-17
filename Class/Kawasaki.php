<?php
class Kawasaki extends Moto implements KawasakiInterface {
    private $isJaponaise;

    public function __construct( $model, $prix, $topCase)
    {
        parent::__construct( "Kawasaki", $model, $prix, $topCase, false);
        $this->isJaponaise = true;
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
}
?>