<?php
require "exp.php";//si le fichier ne existe pas il affiche error et ne pas continuez
//include quand le fichier n'existe pas il affiche error and the rest of the code

     $obj = new personne("eya","tunis");
     //$obj->setNom("eya");
    //echo $obj->getNom();
    //var_dump($obj);
    echo $obj;
    unset($obj);
    
?>