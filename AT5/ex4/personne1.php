<?php
abstract class personne{
    protected $nom;
    protected $prenom;

    public function __construct($n,$p){
        $this->nom=$n;
        $this->prenom=$p;
    }

    
    abstract public function getinfo();
    
}

?>