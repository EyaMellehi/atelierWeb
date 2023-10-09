<?php
$x=rand(0,4);
echo $x."<br>";
switch($x){
    case 0:
    case 1:
    case 2:
        echo "infer a 3 le num est ".$x;
        break;
    case 3:
        echo "egale a 3 le num est ".$x;
        break;
    case 4:
        echo "sup a 3 le num est".$x;
        break;
}
?>