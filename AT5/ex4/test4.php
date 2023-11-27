<?php
include "personne1.php";
include "adulte.php";
include "adol.php";
$adultes=new adol("eya","mellehi","ingenieure",3000);
$adoles=new adul("rym","ayari",15,"sing");
echo $adultes->getinfo();
//echo "<br>".$adoles->getinfo();

?>