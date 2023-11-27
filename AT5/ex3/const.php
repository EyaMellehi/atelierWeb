<?php
include "salaire.php";
class constrac extends salarie{
    private $date;
    private $type;
  
    public function __construct($c,$n,$p,$s,$i,$d,$t)
    {
        parent::__construct($c,$n,$p,$s,$i);
        $this->date=$d;
        $this->type=$t;
        
    }
    
    public function infosal(){
        return parent::infosal()." date :$this->date: type .$this->type";
    }


}
?>