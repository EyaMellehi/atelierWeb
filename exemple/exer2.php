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
echo "<h1>tableau automatique</h1>";
$pays=["tunisie","france","italie","canada","allemagne"];
foreach($pays as $value){
    echo $value."<br>";
}
echo "<h3>ordre croissant</h3>";
sort($pays);
foreach($pays as $value){
    echo $value."<br>";
}
echo "<h3>ordre decroissant</h3>";
rsort($pays);
foreach($pays as $value){
    echo $value."<br>";
}
echo "<h1>tableau associatif</h1>";
$pays=["tunis"=>"tunisie","paris"=>"france","rome"=>"italie","ottawa"=>"canada","berlin"=>"allemagne"];
foreach($pays as $key=>$value){
        echo $key.":".$value."<br>";
    };
echo "<h3>ordre croissant des valeurs</h3>";
asort($pays);
foreach($pays as $key=>$value){
    echo $key.":".$value."<br>";
};
echo "<h3>ordre decroissant des valeurs</h3>";
arsort($pays);
foreach($pays as $key=>$value){
    echo $key.":".$value."<br>";
};
echo "<h3>ordre croissant des indices</h3>";
ksort($pays);
foreach($pays as $key=>$value){
    echo $key.":".$value."<br>";
};
echo "<h3>ordre decroissant des indices</h3>";
krsort($pays);
foreach($pays as $key=>$value){
    echo $key.":".$value."<br>";
}
?>
<br>
<table class="table table-dark">
    <tr class="table-primary"><th>les pays</th></tr>
<?php
foreach($pays as $value){
    echo "<tr><td>$value</td></tr>";
};

?>
</table>
<table class="table table-dark">
    <tr class="table-primary"><th>les capitales</th><th>les pays</th></tr>
<?php
foreach($pays as $key=>$value){
    echo "<tr><td>$key</td><td>$value</td></tr>";
};

?>
</table>
    
</body>
</html>
