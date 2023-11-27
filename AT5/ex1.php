<?php
class ville{
    private $nom;
    private $gouver;
    
    public function getNom()
    {
        return $this->nom;
    }


    public function getGouver()
    {
        return $this->gouver;
    }
    
    public function __construct($n,$g){
        $this->nom=$n;
        $this->gouver=$g;
    }
    public function get_info(){
        return "la ville ".$this->nom." est dans le gouver ".$this->gouver;
    }
    public function __toString()
    {
        return  "la ville ".$this->nom." est dans le gouver ".$this->gouver;
    }
}
?>