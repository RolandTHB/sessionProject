<?php
class MotoException extends Exception{

    private $allowedMark = ['Kawasaki', 'KTM', 'Yamaha', 'Honda'];

    public function __construct(Moto $moto){
        if(!in_array($moto->getMarque(), $this->allowedMark)){
            throw new Exception('La moto que vous voulez n\'est pas au catalogue',
                400);
        }

        if($moto->getMarque() === 'Kawasaki' && $moto->getisJaponnaise() === true){
            throw new Exception('Une kawasaki est forcément japonaise',
                500);
        }
    }
}
?>