<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Inscription a la visite guidee</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    votre nom: <input type="text" name="nom" >
    votre prenom: <input type="text" name="prenom">
    votre age : <input type="text" name="age">
    votre adresse mail: <input type="email" name="email" id="">
    <input type="submit" value="inscription" name="ok">
    <input type="submit" value="Afficher" name="ok1">
</form> 
<?php
if(isset($_POST['ok'])){
    $no=$_POST['nom'];
    $pre=$_POST['prenom'];
    $age=$_POST['age'];
    $mail=$_POST['email'];
    if($no||$pre||$age||(str_contains($mail,"@"))==1){
        echo"<script> alert('l inscription pour :".$no." ".$pre."a ete prise en charge') </script>";
    }
    else{
        echo"error";
    }
}
if(isset($_POST['ok1'])){
    $no=htmlspecialchars($_POST['nom']);
    $pre=htmlspecialchars($_POST['prenom']);
    $age=htmlspecialchars($_POST['age']);
    $mail=htmlspecialchars($_POST['email']);
    echo"<table border='1'><tr><th>nom</th><th>prenom</th><th>age</th><th>email</th></tr><tr><td>".$no."</td><td>".$pre."</td><td>".$age."</td><td>".$mail."</td></tr></table>";
    var_dump($_POST);
    //print_r($_POST);

}
?>
</body>
</html>