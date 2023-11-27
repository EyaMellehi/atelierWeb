<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vos Commentaire</h1>
    <h3>Aidez-nous a ameliorer notre site:</h3>
    <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
    votre nom<input type="text" name="nom" id=""/><br>
    Vos Commentaire:<textarea></textarea><br>
    Votre adresse de courier electronique:<input type="email" name="mail" id=""/><br>
    <h3>Indiquez les elements du site que vous aimez:</h3>
    design du site<input type="checkbox" name="q1[]" value="serveur" id=""><br>
    les liens<input type="checkbox" name="q1[]" id=""value="lien"><br>
    facilite de navigation<input type="checkbox" name="q1[]" value="fcn"id=""><br>
    les images<input type="checkbox" name="q1[]" id=""value="img"><br>
    <input type="submit" value="soumettre" name="ok">
    <input type="reset" value="affacer" name='re'>
</form>
<?php
if(isset($_POST['ok']))
{echo "votre nom:".htmlspecialchars($_POST['nom']);
    $question1=$_POST['q1'];
    echo"<pre>";
    var_dump($question1);
    echo "</pre>";
    echo "les reponse <br>";
    foreach($question1 as $value){
        echo $value."<br>";
    }
}

?>
</body>
</html>