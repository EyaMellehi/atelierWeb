<?php
include "personne1.php";
class adul extends personne{
    private int $age;
    private $loisir;
    public function __construct($n,$p,$a,$l){
        parent::__construct($n,$p);
        $this->age=$a;
        $this->loisir=$l;   
    }    
     public function getinfo(){
        return "nom ".$this->nom." penom ".$this->prenom." age ".$this->age." salaire ".$this->loisir;
     }
}

?>