<?php
/**
 * Created by PhpStorm.
 * User: HB
 * Date: 17/04/2019
 * Time: 11:28
 */

class Session {
    private $attributs = [];
    public function __construct()
    {
        //demarre une session
        session_start();
        // met les parametres de la session dans un tableau
        foreach ($_SESSION as $key=>$value) {
            $this->attributs[$key] = $value;
        }
    }
/*Appeler chaque fin de script
et sauvegarde les donnees de session*/
    public function __destruct()
    {
        foreach ($this ->attributs as $key=>$value) {
            $_SESSION[$key] = $value;
        }
    }

    /**
     * @return array
     */
    public function getAttributs()
    {
        return $this->attributs;
    }

    public function add($key, $valeur){
    }
    public function update($key, $valeur){
    }
    public function exist($key){
    }
    public function remove($key){
    }
    // permet de detecter la modification d'un attribut qui n'existe pas ou qui est privé
    // prend en parametre 2 arguments le nom de l'argumet et la valeur qu'on tente de lui passer
    public function __set($name, $value)
    {
        // met le argument name dans le tableau atributs et serialize la valeur
        // transforme un objet en chaine de caracteres
        $this->attributs[$name] = serialize($value);
    }
    public function __get($name)
    {
        return unserialize($this->attributs[$name]) ;
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