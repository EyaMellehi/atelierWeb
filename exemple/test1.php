<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test1.php" method="get">
   nom <input type="text" name="nom" id=""><br>
    age<input type="text" name="age" id=""><br>
    <input type="submit" value="envoyer" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])){
        echo "existe <br>votre nom : ".htmlspecialchars($_GET['nom']);
        echo "<br>votre age : ". htmlspecialchars($_GET['age']);
    }
    ?>
</body>
</html>