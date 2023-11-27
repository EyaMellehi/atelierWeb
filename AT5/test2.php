<?php
include "ex2.php";
$obj=new mise();
$obj->setCh("Programmation orientee objet en PHP");

echo $obj->getCh();
echo "<br>".$obj->gras($obj->getCh());
echo "<br>".$obj->ital($obj->getCh());
echo "<br>".$obj->soulg($obj->getCh());
echo "<br>".strtoupper($obj->getCh());

 
?>