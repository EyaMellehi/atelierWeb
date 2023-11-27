<?php
$dsn="mysql:host=localhost;dbname=atelier6_dsi3_g2";
$username="root";
$password="";
try{
$connexion=new PDO($dsn,$username,$password);}
catch(Exception $e){echo "error connexion ".$e->getMessage();die;}
?>