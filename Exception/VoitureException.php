<?php
class VoitureException extends Exception{

    private $allowedMark = ['Renault', 'Nissan', 'Audi', 'BMW'];

    public function __construct(Voiture $voiture){
        if(!in_array($voiture->getMarque(), $this->allowedMark)){
            throw new Exception('La voiture '.$voiture->getMarque().' n\'est pas au catalogue',
                400);
        }
    }
}
?>