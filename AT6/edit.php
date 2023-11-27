<?php
ob_start();
require_once "config/connexion.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        reference : <input type="text" name="refr" id="refr"><br>
        libelle : <input type="text" name="lib" id="lib"><br>
        prix : <input type="text" name="lib" id="lib"><br>
        quantite : <input type="number" name="qt" id="qt"><br>
        image : <input type="url" name="img" id="img"><br>
        promos : <input type="number" name="pr" id="pr"><br>
        description : <input type="text" name="desc" id="des"><br>
        <input type="submit" value="update" name="ok">
    </form>
</body>
</html>



<?php
if(isset($_POST['ok'])){
    if(isset($_GET['ref'])){
        $r=$_POST['refr'];
        $l=$_POST['lib'];
        $ref=$_GET['ref'];
        $sql="update produit set $produit[0]='$r' where reference='$ref'";
        $connexion->exec($sql);}}//$res est un objet PDOstatemnet
$contenu=ob_get_clean();
include "layout.php";
?>