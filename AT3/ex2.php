<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <fieldset>
        <legend>Verification d'adresse IPV4</legend>
        <input type="number" name="a" id="">.<input type="number" name="b" id="">.<input type="number" name="c" id="">.<input type="number" name="d" id=""><br>
        <input type="submit" value="verifier" name="ok">
    </fieldset>
</form>
<?php
if(isset($_POST['ok'])){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];
    $ip=$a.".".$b.".".$c.".".$d;
    //echo $ip;
    $validate= filter_var($ip,FILTER_VALIDATE_IP);
    if($validate!==false){
        echo $ip." est une adresse IPV4 valide";
    }
    else{
        echo$ip." n'est pas une adresse IPV4 valide!";
    }
}
?>
</body>
</html>