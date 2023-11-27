<?php
ob_start();
require_once "config/connexion.php";
$sql="select * from produit";
$res=$connexion->query($sql);//$res est un objet PDOstatemnet
$tabp=$res->fetchAll(PDO::FETCH_NUM);//array contient tous les produits*/
//echo "<pre>";
//var_dump($tabp);
//echo "</pre>";
$contenu=ob_get_clean();
include "layout.php";
?>
<h1>Les details des produits</h1>
<div>
<?php
foreach($tabp as $produit)
echo " 
<div class='card' style='width: 18rem;'>
  <img src=$produit[4] class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>Reference:$produit[0]</h5>
    <p class='card-text'>libelle:$produit[1]<br>
    prix: 
   $produit[2]<br>
   quantite:
   $produit[3]<br>
   Promos:
   $produit[5]<br>
   description:
   $produit[6]</p>
  </div>
</div>";?>
</div>