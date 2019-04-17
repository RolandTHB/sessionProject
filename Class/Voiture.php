<?php
abstract class Voiture extends Vehicule {
    private $nbPortes;
    private $clim;
    private $siegeChauffant;

    public function __construct($marque, $model, $prix, $nbPortes, $clim, $siegeChauffant)
    {
        parent::__construct($marque, $model, $prix);
        $this->nbPortes = $nbPortes;
        $this->clim = $clim;
        $this->siegeChauffant = $siegeChauffant;
        try{
            new VoitureException($this);
        } catch (Exception $exception){
            var_dump($exception->getMessage());
        }
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
    public function getNbPortes()
    {
        return $this->nbPortes;
    }

    /**
     * @param mixed $nbPortes
     */
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;
    }

    /**
     * @return mixed
     */
    public function getClim()
    {
        return $this->clim;
    }

    /**
     * @param mixed $clim
     */
    public function setClim($clim)
    {
        $this->clim = $clim;
    }

    /**
     * @return mixed
     */
    public function getSiegeChauffant()
    {
        return $this->siegeChauffant;
    }

    /**
     * @param mixed $siegeChauffant
     */
    public function setSiegeChauffant($siegeChauffant)
    {
        $this->siegeChauffant = $siegeChauffant;
    }
}
?>