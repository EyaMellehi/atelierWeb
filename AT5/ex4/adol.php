<?php
include "personne1.php";

class adol extends personne {
    private $metier;
    private float $salaire;

    public function __construct($n, $p, $m, $s) {
        parent::__construct($n, $p);
        $this->metier = $m;
        $this->salaire = $s;
    }

    public function getinfo() {
        return "nom " . $this->nom . " prenom " . $this->prenom . " metier " . $this->metier . " salaire " . $this->salaire;
    }
}
?>