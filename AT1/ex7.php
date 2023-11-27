<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex7.php" method="post">
        <input type="text" name="n1" id="">
        <input type="submit" value="parite" name='ok'>
    </form>
    <?php
    if (isset($_POST['ok'])){
    $n1=$_POST['n1'];
    if($n1%2==0){
        echo "le nombre est pair";
    }
    else{
        echo "le nombre est impair";
    }
}
    ?>
</body>
</html>