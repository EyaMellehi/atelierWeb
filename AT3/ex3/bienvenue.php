<?php
if (isset($_GET['ok'])) {
    $nom = $_GET['prenom'];
    $rept = $_GET['rep'];
    if($nom&&$rept&&($rept<10)&&(filter_var($rept, FILTER_VALIDATE_INT))){
        for ($i = 0; $i < $rept; $i++) {
            echo "Bienvenue $nom<br>";
        }
    }
    else{ 
        echo"invalide";
    }
   
}
?>