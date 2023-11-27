<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cliquer sur l'un des boutons!</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="submit" value="Vendre"name="v">
        <input type="submit" value="Acheter" name="A">
        <input type="submit" value="Louer" name="l">
        <?php
    if(isset($_POST['v'])){
        header("location:vente.php");
    }
    if(isset($_POST['A'])){
        header("location:achat.php");
    }
    if(isset($_POST['l'])){
        header("location:location.php");
    }
    
    ?>
    </form>
</body>
</html>