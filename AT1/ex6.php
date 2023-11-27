<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex6.php" method="post">
        <input type="text" name="n1" id="">+
        <input type="text" name="n2" id="">
        <input type="submit" value="calculer" name='ok'>
    </form>
    <?php
    if (isset($_POST['ok'])){
    $n1=$_POST['n1'];
    $n2=$_POST['n2'];
    $som=$n1+$n2;
    echo "le resultat est :".$som;}
    ?>
</body>
</html>