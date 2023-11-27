<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab=["yessmine"=>20,"eya"=>19,"imen"=>18,"halim"=>21,"montassar"=>0,"youssef"=>0];
    ?>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    nom <input type="text" name="name" id="">
        <select name="ch">
            <?php
            foreach($tab as $key=>$value){
               echo" <option value='$key'>$key</option>";
            }
            ?>
        </select>
        <input type="submit" value="note" name="ok">
    </form>
    <?php
    if (isset($_POST['ok'])){
       $name= htmlspecialchars($_POST['name']);
        $nom=$_POST['ch'];
        echo $nom ." a comme note :".$tab[$nom];
        if ($tab[$nom]>=10)
            $resultat="admis";
        else{
            $resultat="refusee";
        }
        
        echo "<a href='resultat.php?name=$nom&&resultat=$resultat'>resultat</a>";

    }
    ?>

</body>
</html>