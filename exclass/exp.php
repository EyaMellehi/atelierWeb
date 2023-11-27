<?php
class personne{
    private $nom;
    private $adr;
    function __construct($n,$a){
        $this->nom=$n;
        $this->adr=$a;
        //on n'a pas mettez $ devant nom car c'est un attribut non une variable;
    }
    
    function __destruct(){
        return "c'est la fin";
    }


    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }


    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of adr
     */
    public function getAdr()
    {
        return $this->adr;
    }


    /**
     * Set the value of adr
     */
    public function setAdr($adr): self
    {
        $this->adr = $adr;

        return $this;
    }
    function __toString()
    {
        return $this->nom." ".$this->adr;

    }
}
?>