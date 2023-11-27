<?php
class mise{
    private $ch;
    

    public function getCh()
    {
        return $this->ch;
    }


    public function setCh($ch): self
    {
        $this->ch = $ch;

        return $this;
    }

    public function gras($ch){
        return "<strong>$ch</strong>";
    }
    public function ital($ch){
        return "<i>$ch</i>";
    }
    public function soulg($ch){
        return "<u>$ch</u>";
    }
}
?>