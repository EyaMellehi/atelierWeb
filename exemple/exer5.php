<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='exer5.php' method="post">
    chaine<input type="text" name="chaine" id="">
    <input type="submit" value="afficher" name="ok">
</form>
    <?php
    if(isset($_POST['ok'])){
        $ch=$_POST['chaine'];
        $tab=explode(' ',$ch);
        $chnew='';
        for($i=0;$i<count($tab);$i++){
            $su=substr($tab[$i],0,1);
            $chnew=$chnew.ucfirst($su);

        }
        echo $chnew;
        
    }

    ?>

</body>
</html>
