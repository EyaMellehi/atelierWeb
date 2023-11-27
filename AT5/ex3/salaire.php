<?php
class salarie{
    protected $code;
    protected $nom;
    protected $prenom;
    protected float $sal;
    protected float $ind;
    public function __construct($c,$n,$p,$s,$i)
    {
        $this->code=$c;
        $this->nom=$n;
        $this->prenom=$p;
        $this->sal=$s;
        $this->ind=$i;
        
    }
    public function calculsal(){
        return $this->sal+$this->ind;
    }
    public function infosal(){
        return "code $this->code nom $this->nom prenom $this->prenom salaire $this->sal indemnité $this->ind";
    }

}
?>