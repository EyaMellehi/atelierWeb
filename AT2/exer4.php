<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mot="bonjour tous le monde";
$n=strlen($mot);
echo "la longueur du chaine est $n";
?>
<form action="exer4.php" method="post">
  longueur pour extraire la chaine
  <input type="number" name="leng" id="">
  <input type="submit" value="extraire" name="ok">
</form> 
<?php
if (isset($_POST['ok'])){
  $ch=$_POST['leng'];
  $newch=substr($mot,0,$ch);
echo $newch."<br>";
$ch2="";
for($i=0;$i<strlen($mot);$i++){
  $ch2=$mot[$i].$ch2;
}
echo $ch2;
}

?>
</body>
</html>
