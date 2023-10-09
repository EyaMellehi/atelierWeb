<?php
$ch="au debut ,ils rient de vous,
ensuite ils vous combattent,
et a la fin,vous gagnez";
$ch=ucwords($ch);
$tab=explode(' ' ,$ch);
$ch2[count($tab)-1]=strtoupper($tab[count($tab) - 1]);
$ch4=implode(' ',$tab);
echo $ch4;


?>