<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css"/>
</head>
<body>

<?php
$note=array("rami"=>7.50,"mohamed"=>19.00,
"amira"=>15.50,"asma"=>10.00,"ahmed"=>09.5,
"yassine"=>15.5,"islem"=>12);
foreach($note as $key=>$value){
    if($value>=10){
        echo $key." a une moyenne :".$value."<br>";
    }
}
$n=count($note);
echo "il y'a ".$n." etudiants<br>";
$max=0;
foreach($note as $key=>$value){
    if($value>$max){
        $max=$value;
    }
}
echo "max est :".$max;


?>
<table class="table">
    <tr class="table-primary" ><th>NOM</th><th>Note en PHP</th></tr>
    <?php
    foreach($note as $key=>$value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    ?>
</table>

<?php

asort($note);

/*foreach($note as $key=>$value){
        echo $key." a une moyenne :".$value."<br>";
}*/
?>
<table class="table table-dark table-striped">
    <tr class="table-primary"><th>nom</th><th>note</th></tr>
    <?php
    foreach($note as $key=>$value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }

    ?>
</table>
<?php
echo "ordre décroissant <br>";
krsort($note);
foreach($note as $key=>$value){
    echo $key." a une moyenne :".$value."<br>";
}
$moy=(array_sum($note))/$n;
echo " la moyenne du classe est :$moy";

?>

    
</body>
</html>

