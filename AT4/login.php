<?php
session_start();
if(isset($_GET['error'])){
    $etat=$_GET['error'];
    switch ($etat){
        case '1':
            echo"<script>alert('login et/ou mot de passe sont incorrectes')</script>";
            break;
        case'2':
            echo"<script>alert('vous n etes pas autorise')</script>";
            break;
        case'3':
            echo"<script>alert('merci pour votre visite a la prochaine')</script>";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="page2.php">lien vers page2</a><br>
    <a href="page3.php">lien vers page3</a><br>
    <a href="page4.php">lien vers page4</a><br>
    <form action="" method="post">
        votre login<input type="text" name="log" id="">
        votre mot de passe<input type="text" name="pw" id="">
        <input type="submit" name="ok" value="connecter">
        
    </form>
    <?php
    if(isset($_POST['ok'])){
        $log=htmlspecialchars($_POST['log']);
        $mp=htmlspecialchars($_POST['pw']);
        if($log=="admin" && md5($mp)=="0192023a7bbd73250516f069df18b500"){
            $_SESSION['log']=$log;
            $_SESSION['pw']=$mp;
            header("location:page2.php");
            exit;
        }
        header("location:login.php?error=1");
    }
    ?>
</body>
</html>