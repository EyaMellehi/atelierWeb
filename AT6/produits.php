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
<h1>Liste des produits</h1>
<table class="table">
    <tr class="table-primary">
        <th>Reference</th>
        <th>libelle</th>
        <th>prix</th>
        <th>quantite</th>
        <th>Promos</th>
        <th colspan="3">Action</th>
    </tr>
<?php
foreach($tabp as $produit){
    echo "<tr>
            <td>$produit[0]</td>
            <td>$produit[1]</td>
            <td>$produit[2]</td>
            <td>$produit[3]</td>
            <td>$produit[5]</td>
            <td><a href='delete.php?ref=$produit[0]'>Supprimer</a></td>
            <td><a href='edit.php?ref=$produit[0]'>Edit</a></td>
            <td><a href='details.php?ref=$produit[0]'>Voir details</a></td>
        </tr>";
}
echo "</table>";
?>